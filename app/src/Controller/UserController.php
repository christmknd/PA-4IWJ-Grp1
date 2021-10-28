<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\UserType;
use App\Repository\UserRepository;
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
 * @Route("/user")
 */
class UserController extends AbstractController
{


    /**
     * @Route("", name="user_show", methods={"GET"})
     */
    public function show(): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $this->getUser()
        ]);
    }

    /**
     * @Route("/edit", name="user_edit", methods={"GET","POST"})
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
        $errorMessages = [];

        if ($form->isSubmitted() && $form->isValid()) {

            // Si le numero de siret a été modifié, verifier le numero de siret

                // Si le numero de siret existe via l'API Insee
                if (!$user->isSiret($form->get('siret')->getData())){
                    array_push($errorMessages, 'Numero de Siret invalide');
                    return $this->render('user/edit.html.twig', [
                        'user' => $user,
                        'form' => $form->createView(),
                        'errorMessages' => $errorMessages
                    ]);
                }

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
            'errorMessages' => $errorMessages
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
