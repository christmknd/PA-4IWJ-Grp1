<?php

namespace App\Controller\BackEnd;

use App\Entity\Annonce;
use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\AnnonceRepository;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Security\Voter\EvenementVoter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/admin/mes_evenements", name="admin_evenements")
 */
class EvenementController extends AbstractController
{
    /**
     * @Route("/", name="", methods={"GET"})
     */
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('BackEnd/evenement/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id}", name="_show", methods={"GET"})
     */
    public function show(Evenement $evenement): Response
    {
        return $this->render('BackEnd/evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Evenement $evenement): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_evenements');
        }

        return $this->render('BackEnd/evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="_delete", methods={"POST"})
     */
    public function delete(Request $request, Evenement $evenement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_evenements');
    }

    /**
     * @Route("/{id}/remove_annonce/{annonce_id}", name="_remove_annonce", methods={"POST"})
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
     * @Route("/{id}/add_annonce/{annonce_id}", name="_add_annonce", methods={"POST"})
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
     * @Route("/{id}/toggle_etat", name="_toggle_etat", methods={"POST"})
     */
    public function toggle_etat(Request $request, Evenement $evenement): Response
    {
        $evenement->setEtat(!$evenement->getEtat());
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('admin_evenements');
    }

}
