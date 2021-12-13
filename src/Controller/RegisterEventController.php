<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\User;
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/user/register/event")
 */
class RegisterEventController extends AbstractController
{
    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    /**
     * @Route("/", name="evenements_registred", methods={"GET"})
     */
    public function index(EvenementRepository $evenementRepository): Response
    {
        $user = $this->getUser();
        return $this->render('register_event/index.html.twig', [
            'evenements' => $user->getListEventRegistered(),
        ]);
    }

    /**
     * @Route("/{id}/remove_user", name="remove_user_from_evenement", methods={"POST"})
     */
    public function remove_user_from_evenement(Request $request, Evenement $evenement, UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            return $this->redirectToRoute('default');
        }
        $evenement->removeListUserRegistered($user);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('evenement_show', ['id'=>$request->attributes->get('id')]);
    }

    /**
     * @Route("/{id}/add_user", name="add_user_to_evenement", methods={"POST"})
     */
    public function add_user_to_evenement(MailerInterface $mailer, MailerController $mailerController, Request $request, Evenement $evenement): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            return $this->redirectToRoute('default');
        }
        $evenement->addListUserRegistered($user);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

        $mailerController->sendEmailForEventRegisterToUser($mailer, $user, $evenement);
        $mailerController->sendEmailForEventRegisterToAsso($mailer, $evenement->getUtilisateur(), $evenement);

        return $this->redirectToRoute('evenement_show', ['id'=>$request->attributes->get('id')]);
    }
}
