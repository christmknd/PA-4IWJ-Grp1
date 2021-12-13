<?php
// src/Controller/MailerController.php
namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\User;
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class MailerController extends AbstractController
{

    public function sendEmailForEventRegisterToUser(MailerInterface $mailer, User $user, Evenement $evenement ): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address('esgipa2021@gmail.com', 'Carte des Animaux'))
            ->to($user->getEmail())
            ->subject('Carte des Animaux - Confirmation Inscription Evenement - '.$evenement->getTitre())
            ->htmlTemplate('register_event/inscription_event_email_user.html.twig')
            ->context([
                'user' => $user,
                'evenement' => $evenement
            ]);

        $mailer->send($email);
    }

    public function sendEmailForEventRegisterToAsso(MailerInterface $mailer, User $user, Evenement $evenement ): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address('esgipa2021@gmail.com', 'Carte des Animaux'))
            ->to($user->getEmail())
            ->subject('Carte des Animaux - Nouvelle Inscription Evenement - '.$evenement->getTitre())
            ->htmlTemplate('register_event/inscription_event_email_asso.html.twig')
            ->context([
                'user' => $user,
                'evenement' => $evenement
            ]);

        $mailer->send($email);
    }
}