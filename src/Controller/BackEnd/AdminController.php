<?php

namespace App\Controller\BackEnd;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\UserType;
use App\Repository\AnnonceRepository;
use App\Repository\EvenementRepository;
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
 * @Route("/admin", name="admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="", methods={"GET"})
     */
    public function index(AnnonceRepository $annonceRepository, EvenementRepository $evenementRepository)
    {
        return $this->render('BackEnd/default/index.html.twig');

    }


    /**
     * @Route("/show", name="_show", methods={"GET"})
     */
    public function show(): Response
    {
        return $this->render('BackEnd/user/show.html.twig', [
            'user' => $this->getUser()
        ]);
    }


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

}
