<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use App\Security\AppCustomAuthenticator;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

/**
 * @Route("/register")
 */
class RegistrationController extends AbstractController
{
    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    /**
     * @Route("/", name="app_register", methods={"GET"})
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, AppCustomAuthenticator $authenticator): Response
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('default');
        }
        return $this->render('registration/register.html.twig', [
            'typeDeCompte' => '',
        ]);
    }

    /**
     * @Route("/person", name="register_person", methods={"GET", "POST"})
     * ToDo: remove 1 controller
     */
    public function registerPerson(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, AppCustomAuthenticator $authenticator): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('default');
        }
        $user = new User();
        $user->setTypeDeCompte("Personne");
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->remove('siret');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $email = (new TemplatedEmail())
                ->from(new Address('esgipa2021@gmail.com', 'Carte des Animeaux'))
                ->to($user->getEmail())
                ->subject('Carte des Animeaux - Confirmation Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
                ->context([
                    'user' => $user,
                ]);
            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user, $email);

            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'typeDeCompte' => "personne",
        ]);
    }

    /**
     * @Route("/association", name="register_association", methods={"GET", "POST"})
     */
    public function registerAssociation(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, AppCustomAuthenticator $authenticator): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('default');
        }
        $user = new User();
        $user->setTypeDeCompte("Association");
        $user->setRoles(["ROLE_ASSO"]);
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $errorMessages = [];
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$user->isSiret($form->get('siret')->getData()))
            {
                array_push($errorMessages, 'Numero de Siret invalide');
                return $this->render('registration/register.html.twig', [
                    'user' => $user,
                    'registrationForm' => $form->createView(),
                    'typeDeCompte' => "association",
                    'errorMessages' => $errorMessages
                ]);
            }
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $email = (new TemplatedEmail())
                ->from(new Address('esgipa2021@gmail.com', 'Carte des Animeaux'))
                ->to($user->getEmail())
                ->subject('Carte des Animeaux - Confirmation Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
                ->context([
                    'user' => $user,
                ]);
            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user, $email);

            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('registration/register.html.twig', [
            'user' => $user,
            'registrationForm' => $form->createView(),
            'typeDeCompte' => "association",
            'errorMessages' => $errorMessages
        ]);
    }

    /**
     * @Route("/verify/email", name="app_verify_email")
     */
    public function verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre email a bien été validé');

        return $this->redirectToRoute('app_register');
    }
}
