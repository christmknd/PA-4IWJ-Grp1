<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\User;
use App\Form\AnnonceType;
use App\Security\Voter\AnnonceVoter;
use App\Repository\AnnonceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/annonces")
 */
class AnnonceController extends AbstractController
{
    /**
     * @Route("/", name="mes_annonces_index", methods={"GET"})
     */
    public function index(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonceRepository->findBy(['utilisateur' =>$this->getUser()],['titre'=> 'ASC']),
        ]);
    }


    /**
     * @Route("/new", name="annonce_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            return $this->redirectToRoute('mes_annonces_index');
        }
        $annonce = new Annonce();
        $annonce->setUtilisateur($user);
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annonce);
            $entityManager->flush();

            return $this->redirectToRoute('mes_annonces_index');
        }

        return $this->render('annonce/new.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="annonce_show", methods={"GET"})
     */
    public function show(Annonce $annonce): Response
    {
        $annonce->setNbrViews($annonce->getNbrViews()+1);
        $this->getDoctrine()->getManager()->flush();
        return $this->render('annonce/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="annonce_edit", methods={"GET","POST"})
     * @Security("is_granted('POST_EDIT', annonce)")
     */
    public function edit(Request $request, Annonce $annonce): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            return $this->redirectToRoute('mes_annonces_index');
        }
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mes_annonces_index');
        }

        return $this->render('annonce/edit.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="annonce_delete", methods={"POST"})
     * @Security("is_granted('POST_DELETE', annonce)")
     */
    public function delete(Request $request, Annonce $annonce): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            return $this->redirectToRoute('mes_annonces_index');
        }
        if ($this->isCsrfTokenValid('delete'.$annonce->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($annonce);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mes_annonces_index');
    }

    /**
     * @Route("/{id}/toggle_is_finish", name="annonce_toggle_is_finish", methods={"POST"})
     */
    public function toggle_isFinish(Request $request, Annonce $annonce): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            $annonce->setIsFinish(true);
            return $this->redirectToRoute('mes_annonces_index');
        }
        $annonce->setIsFinish(!$annonce->getIsFinish());
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('mes_annonces_index');
    }

    /**
     * @Route("/{id}/toggle_is_published", name="annonce_toggle_is_published", methods={"POST"})
     */
    public function toggle_isPublished(Request $request, Annonce $annonce): Response
    {
        $user = $this->getUser();
        if(!$user->isVerified()){
            $this->addFlash('success', 'Compte restreint ! Validez votre compte en cliquant sur le lien reçu par email.');
            $annonce->setIsPublished(true);
            return $this->redirectToRoute('mes_annonces_index');
        }
        $annonce->setIsPublished(!$annonce->getIsPublished());
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('mes_annonces_index');
    }
}
