<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlateformeController extends AbstractController
{
    /**
     * @Route("/plateforme", name="plateforme")
     */
    public function index(): Response
    {
        return $this->render('plateforme/index.html.twig', [
            'controller_name' => 'PlateformeController',
        ]);
    }
}
