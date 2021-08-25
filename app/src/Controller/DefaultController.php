<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default", methods={"GET"})
     */
    public function index(AnnonceRepository $annonceRepository, EvenementRepository $evenementRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'annonces' => $annonceRepository->findAll(),
            'evenements' => $evenementRepository->findAll(),
        ]);
    }
}
