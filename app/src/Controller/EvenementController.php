<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\User;
use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\AnnonceRepository;
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Security\Voter\EvenementVoter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/evenements")
 */
class EvenementController extends AbstractController
{
    /**
     * @Route("/", name="mes_evenements_index", methods={"GET"})
     */
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findBy(['utilisateur' =>$this->getUser()]),
        ]);
    }

    /**
     * @Route("/new", name="evenement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            return $this->redirectToRoute('mes_evenements_index');
        }
        $evenement = new Evenement();
        $evenement->setUtilisateur($user);
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('mes_evenements_index');
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show{id}", name="evenement_show", methods={"GET"})
     */
    public function show(Evenement $evenement): Response
    {
        $user = $this->getUser();
        $isContain = $user->getListEventRegistered()->contains($evenement);;
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'isContain' => $isContain,
            'usersRegisted' => $evenement->getListUserRegistered()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="evenement_edit", methods={"GET","POST"})
     * @Security("is_granted('POST_EDIT', evenement)")
     */
    public function edit(Request $request, Evenement $evenement): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            return $this->redirectToRoute('mes_evenements_index');
        }
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mes_evenements_index');
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="evenement_delete", methods={"POST"})
     * @Security("is_granted('POST_DELETE', evenement)")
     */
    public function delete(Request $request, Evenement $evenement): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            return $this->redirectToRoute('mes_evenements_index');
        }
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mes_evenements_index');
    }

    /**
     * @Route("/{id}/remove_annonce/{annonce_id}", name="remove_annonce_from_evenement", methods={"POST"})
     */
    public function remove_annonce_from_evenement(Request $request, Evenement $evenement, AnnonceRepository $annonceRepository): Response
    {
        $annonce = $annonceRepository->find($request->attributes->get('annonce_id'));
        $evenement->removeAnnonce($annonce);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('evenement_show', ['id'=>$request->attributes->get('id')]);
    }

    /**
     * @Route("/{id}/add_annonce/{annonce_id}", name="add_annonce_to_evenement", methods={"POST"})
     */
    public function add_annonce_to_evenement(Request $request, Evenement $evenement, AnnonceRepository $annonceRepository): Response
    {
        $annonce = $annonceRepository->find($request->attributes->get('annonce_id'));
        $evenement->addAnnonce($annonce);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('evenement_show', ['id'=>$request->attributes->get('id')]);
    }

    /**
     * @Route("/{id}/toggle_etat", name="evenement_toggle_etat", methods={"POST"})
     */
    public function toggle_etat(Request $request, Evenement $evenement): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            $evenement->setEtat(false);
            return $this->redirectToRoute('mes_annonces_index');
        }
        $evenement->setEtat(!$evenement->getEtat());
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('mes_evenements_index');
    }

}
