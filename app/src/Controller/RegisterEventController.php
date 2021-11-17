<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\User;
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user/register/event")
 */
class RegisterEventController extends AbstractController
{

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
        $user = $userRepository->find($this->getUser()->getId());
        $evenement->removeListUserRegistered($user);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('evenement_show', ['id'=>$request->attributes->get('id')]);
    }

    /**
     * @Route("/{id}/add_user", name="add_user_to_evenement", methods={"POST"})
     */
    public function add_user_to_evenement(Request $request, Evenement $evenement, UserRepository $userRepository): Response
    {
        $user = $userRepository->find($this->getUser()->getId());
        $evenement->addListUserRegistered($user);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('evenement_show', ['id'=>$request->attributes->get('id')]);
    }
}
