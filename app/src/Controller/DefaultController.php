<?php

namespace App\Controller;

use App\Form\FilterAnnonceType;
use App\Form\Tri\TriAnnonceType;
use App\Form\Tri\TriEvenementType;
use App\Repository\AnnonceRepository;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default", methods={"GET","POST"})
     */
    public function index(AnnonceRepository $annonceRepository, EvenementRepository $evenementRepository,Request $request): Response
    {
        $formTriAnnonces = $this->createForm(TriAnnonceType::class);
        $optionsTriAnnonces = [];


        $formTriAnnonces->handleRequest($request);
        if ($formTriAnnonces->isSubmitted() && $formTriAnnonces->isValid()) {
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
        }

        $formTriEvenements = $this->createForm(TriEvenementType::class);
        $optionsTriEvenements = [];

        $formTriEvenements->handleRequest($request);
        if ($formTriEvenements->isSubmitted() && $formTriEvenements->isValid()) {
            if(!$formTriEvenements->get('dateAtCreatedTri')->isEmpty()){
                $optionDateTriEvenements = $formTriEvenements->get('dateAtCreatedTri')->getData();
                $optionsTriEvenements['atCreated']=$optionDateTriEvenements;
            }
            if(!$formTriEvenements->get('dateEventTri')->isEmpty()){
                $optionAgeTriEvenements = $formTriEvenements->get('dateEventTri')->getData();
                $optionsTriEvenements['dateEvent']=$optionAgeTriEvenements;
            }
            if(!$formTriEvenements->get('nbrViewTri')->isEmpty()){
                $optionNbrViewsTriEvenements = $formTriEvenements->get('nbrViewTri')->getData();
                $optionsTriEvenements['nbrViews']=$optionNbrViewsTriEvenements;
            }
        }

        $formFilterAnnonce = $this->createForm(FilterAnnonceType::class);
        $formFilterAnnonce->handleRequest($request);

        $optionsFilterAnnonce = [];

        if ($formFilterAnnonce->isSubmitted() && $formFilterAnnonce->isValid()) {
            if(!$formFilterAnnonce->get('sexe')->isEmpty()){
                $optionSexeFilterAnnonce = $formFilterAnnonce->get('sexe')->getData();
                $optionsFilterAnnonce['sexe']=$optionSexeFilterAnnonce;
            }
            if(!$formFilterAnnonce->get('espece')->isEmpty()){
                $optionEspeceFilterAnnonce = $formFilterAnnonce->get('espece')->getData();
                $optionsFilterAnnonce['espece']=$optionEspeceFilterAnnonce;
            }
        }


        return $this->render('default/index.html.twig', [
            'annonces' => $annonceRepository->findBy($optionsFilterAnnonce,$optionsTriAnnonces),
            'evenements' => $evenementRepository->findBy([],$optionsTriEvenements),
            'formTriAnnonces' => $formTriAnnonces->createView(),
            'formTriEvenements' => $formTriEvenements->createView(),
            'formFilterAnnonce' => $formFilterAnnonce->createView()
        ]);
    }


}
