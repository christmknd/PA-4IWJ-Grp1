<?php

namespace App\Controller\BackEnd;

use App\Entity\Annonce;
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
 * @Route("/admin/annonces", name="admin_annonces")
 */
class AnnonceController extends AbstractController
{
    /**
     * @Route("/", name="", methods={"GET"})
     */
    public function index(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('BackEnd/annonce/index.html.twig', [
            'annonces' => $annonceRepository->findAll()
        ]);
    }

    /**
     * @Route("/{id}", name="_show", methods={"GET"})
     */
    public function show(Annonce $annonce): Response
    {
        $annonce->setNbrViews($annonce->getNbrViews()+1);
        $this->getDoctrine()->getManager()->flush();
        return $this->render('BackEnd/annonce/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Annonce $annonce): Response
    {
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_annonces');
        }

        return $this->render('BackEnd/annonce/edit.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="_delete", methods={"POST"})
     */
    public function delete(Request $request, Annonce $annonce): Response
    {
        if ($this->isCsrfTokenValid('delete'.$annonce->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($annonce);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_annonces');
    }

    /**
     * @Route("/{id}/toggle_etat", name="_toggle_etat", methods={"POST"})
     */
    public function toggle_etat(Request $request, Annonce $annonce): Response
    {
        $annonce->setEtat(!$annonce->getEtat());
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('admin_annonces');
    }
}
