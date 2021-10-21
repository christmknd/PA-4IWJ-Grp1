<?php

namespace App\Form\Tri;

use App\Entity\TriSelection;
use App\Repository\AnnonceRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TriAnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ageTri', ChoiceType::class, [
                'label' => 'Age',
                'required' => false,
                'choices'  => [
                    'Croissant' => 'ASC',
                    'Décroissant' => 'DESC',
                ],
            ])
            ->add('lieuTri', ChoiceType::class, [
                'label' => 'Lieu',
                'required' => false,
                'choices'  => [
                    'Croissant' => 'ASC',
                    'Décroissant' => 'DESC',
                ],
            ])
            ->add('nbrViewTri', ChoiceType::class, [
                'label' => 'Nbr de vues',
                'required' => false,
                'choices'  => [
                    'Croissant' => 'ASC',
                    'Décroissant' => 'DESC',
                ],
            ])
            ->add('dateAtCreatedTri', ChoiceType::class, [
                'label' => 'Date de création',
                'required' => false,
                'choices'  => [
                    'Croissant' => 'ASC',
                    'Décroissant' => 'DESC',
                ],
            ])
            ->add('submit', SubmitType::class,[
                'label' => 'Trier',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TriSelection::class,
        ]);
    }
}
