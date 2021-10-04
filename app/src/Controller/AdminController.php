<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\UserType;
use App\Security\AppCustomAuthenticator;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

/**
 * @Route("/admin", name="admin")
 */
class AdminController extends AbstractController
{

    /**
     * @Route("/new", name="register_admin", methods={"GET", "POST"})
     */
    public function registerAdmin(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, AppCustomAuthenticator $authenticator): Response
    {
        $user = (new User())
            ->setRoles(["ROLE_ADMIN"])
            ->setPseudo("adminBest")
            ->setEmail("admin@test.fr")
            ->setTypeDeCompte("Admin");
        $user->setPassword(
        $passwordEncoder->encodePassword(
            $user,
            "admin@test.fr"
            )
        );
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $guardHandler->authenticateUserAndHandleSuccess(
            $user,
            $request,
            $authenticator,
            'main' // firewall name in security.yaml
        );
    }

    /**
     * @Route("", name="_show", methods={"GET"})
     */
    public function show(): Response
    {
        return $this->render('admin/show.html.twig', [
            'admin' => $this->getUser()
        ]);
    }

    /**
     * @Route("/edit", name="_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, EmailVerifier $emailVerifier, GuardAuthenticatorHandler $guardHandler, AppCustomAuthenticator $authenticator): Response
    {
        $user = $this->getUser();
        $email = $user->getEmail();
        $form = $this->createForm(UserType::class, $user);
        if ($user->getTypeDeCompte()!=="Association"){
            $form->remove('siret');
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si le mail a été modifié, le compte n'est pas vérifier

            if($email!==$form->get('email')->getData()){
                $user->setIsVerified(false);

                $email_new = (new TemplatedEmail())
                    ->from(new Address('esgipa2021@gmail.com', 'Carte des Pets'))
                    ->to($user->getEmail())
                    ->subject('Carte des Pets - Confirmation Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
                    ->context([
                        'user' => $user,
                    ]);
                // generate a signed url and email it to the user
                $emailVerifier->sendEmailConfirmation('app_verify_email', $user, $email_new);

            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_show');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request): Response
    {
        $session = new Session();
        $session->invalidate();
        if ($this->isCsrfTokenValid('delete'.$this->getUser()->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($this->getUser());
            $entityManager->flush();
        }
        return $this->redirectToRoute('default');
    }
}
