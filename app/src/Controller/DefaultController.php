<?php

namespace App\Controller;

use App\Form\FilterAnnonceType;
use App\Repository\AnnonceRepository;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default", methods={"GET"})
     */
    public function index(AnnonceRepository $annonceRepository, EvenementRepository $evenementRepository,Request $request): Response
    {
        $formTriAnnonces = $this->createForm(FilterAnnonceType::class);
        $formTriAnnonces->handleRequest($request);
        $optionsTriAnnonces = [];
        if(!$formTriAnnonces->get('dateAtCreatedTri')->isEmpty()){
            $optionDateTriAnnonces = $formTriAnnonces->get('dateAtCreatedTri')->getData();
            $optionsTriAnnonces['atCreated']=$optionDateTriAnnonces;
        }
        if(!$formTriAnnonces->get('ageTri')->isEmpty()){
            $optionAgeTriAnnonces = $formTriAnnonces->get('ageTri')->getData();
            $optionsTriAnnonces['age']=$optionAgeTriAnnonces;
        }
        if(!$formTriAnnonces->get('nbrViewTri')->isEmpty()){
            $optionNbrViewsTriAnnonces = $formTriAnnonces->get('nbrViewTri')->getData();
            $optionsTriAnnonces['nbrViews']=$optionNbrViewsTriAnnonces;
        }

        $formTriEvenements = $this->createForm(FilterAnnonceType::class);
        $formTriEvenements->handleRequest($request);
        $optionsTriEvenements = [];
        if(!$formTriEvenements->get('dateAtCreatedTri')->isEmpty()){
            $optionDateTriEvenements = $formTriEvenements->get('dateAtCreatedTri')->getData();
            $optionsTriEvenements['atCreated']=$optionDateTriEvenements;
        }
        if(!$formTriEvenements->get('ageTri')->isEmpty()){
            $optionAgeTriEvenements = $formTriEvenements->get('ageTri')->getData();
            $optionsTriEvenements['age']=$optionAgeTriEvenements;
        }
        if(!$formTriEvenements->get('nbrViewTri')->isEmpty()){
            $optionNbrViewsTriEvenements = $formTriEvenements->get('nbrViewTri')->getData();
            $optionsTriEvenements['nbrViews']=$optionNbrViewsTriEvenements;
        }

        return $this->render('default/index.html.twig', [
            'annonces' => $annonceRepository->findBy([],$optionsTriAnnonces),
            'evenements' => $evenementRepository->findBy([],$optionsTriEvenements),
            'formTriAnnonces' => $formTriAnnonces->createView(),
            'formTriEvenements' => $formTriEvenements->createView()
        ]);
    }

    /**
     * @Route("/", name="default_post", methods={"POST"})
     */
    public function filter(AnnonceRepository $annonceRepository, EvenementRepository $evenementRepository,Request $request): Response
    {
        $formTriAnnonces = $this->createForm(FilterAnnonceType::class);
        $formTriAnnonces->handleRequest($request);
        $optionsTriAnnonces = [];
        if(!$formTriAnnonces->get('dateAtCreatedTri')->isEmpty()){
            $optionDateTriAnnonces = $formTriAnnonces->get('dateAtCreatedTri')->getData();
            $optionsTriAnnonces['atCreated']=$optionDateTriAnnonces;
        }
        if(!$formTriAnnonces->get('ageTri')->isEmpty()){
            $optionAgeTriAnnonces = $formTriAnnonces->get('ageTri')->getData();
            $optionsTriAnnonces['age']=$optionAgeTriAnnonces;
        }
        if(!$formTriAnnonces->get('nbrViewTri')->isEmpty()){
            $optionNbrViewsTriAnnonces = $formTriAnnonces->get('nbrViewTri')->getData();
            $optionsTriAnnonces['nbrViews']=$optionNbrViewsTriAnnonces;
        }

        $formTriEvenements = $this->createForm(FilterAnnonceType::class);
        $formTriEvenements->handleRequest($request);
        $optionsTriEvenements = [];
        if(!$formTriEvenements->get('dateAtCreatedTri')->isEmpty()){
            $optionDateTriEvenements = $formTriEvenements->get('dateAtCreatedTri')->getData();
            $optionsTriEvenements['atCreated']=$optionDateTriEvenements;
        }
        if(!$formTriEvenements->get('ageTri')->isEmpty()){
            $optionAgeTriEvenements = $formTriEvenements->get('ageTri')->getData();
            $optionsTriEvenements['age']=$optionAgeTriEvenements;
        }
        if(!$formTriEvenements->get('nbrViewTri')->isEmpty()){
            $optionNbrViewsTriEvenements = $formTriEvenements->get('nbrViewTri')->getData();
            $optionsTriEvenements['nbrViews']=$optionNbrViewsTriEvenements;
        }

        return $this->render('default/index.html.twig', [
            'annonces' => $annonceRepository->findBy([],$optionsTriAnnonces),
            'evenements' => $evenementRepository->findBy([],$optionsTriEvenements),
            'formTriAnnonces' => $formTriAnnonces->createView(),
            'formTriEvenements' => $formTriEvenements->createView()
        ]);
    }

}
