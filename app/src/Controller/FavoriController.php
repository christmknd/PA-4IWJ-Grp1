<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Evenement;
use App\Repository\AnnonceRepository;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/favori", name="favori")
 */
class FavoriController extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function indexFavori(AnnonceRepository $annonceRepository, EvenementRepository $evenementRepository): Response
    {
        return $this->render('favori/index.html.twig', [
            'annonces' => $annonceRepository->findBy(
                [
                    'favori' =>true
                ]),
            'evenements' => $evenementRepository->findBy(
                [
                    'favori' =>true
                ]
            )
        ]);
    }

    /**
     * @Route("/favori-annonce", name="_annonce")
     */
    public function indexFavoriAnnonce(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('favori/favori_annonce.html.twig', [
            'annonces' => $this->getUser()->getAnnoncesFavoris()
        ]);
    }

    /**
     * @Route("/favori-evenement", name="_evenement")
     */
    public function indexFavoriEvenement(EvenementRepository $evenementRepository): Response
    {
        return $this->render('favori/favori_evenement.html.twig', [
            'evenements' => $this->getUser()->getEvenementsFavoris()
        ]);
    }


    /**
     * @Route("/{id}/annonce-toggle", name="_annonce_toggle", methods={"POST"})
     */
    public function annonce_toggle_favori(Request $request, Annonce $annonce): Response
    {
        if (!$annonce->isFavori($this->getUser())) $this->getUser()->addAnnoncesFavori($annonce);
        else $this->getUser()->removeAnnoncesFavori($annonce);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('default');
    }

    /**
     * @Route("/{id}/evenement-toggle", name="_evenement_toggle", methods={"POST"})
     */
    public function evenement_toggle_favori(Request $request, Evenement $evenement): Response
    {
        if (!$evenement->isFavori($this->getUser())) $this->getUser()->addEvenementsFavori($evenement);
        else $this->getUser()->removeEvenementsFavori($evenement);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('default');
    }

}
