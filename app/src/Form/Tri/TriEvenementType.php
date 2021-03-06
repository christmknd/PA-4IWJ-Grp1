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

class TriEvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbrViewTri', ChoiceType::class, [
                'label' => 'Nbr de vues',
                'required' => false,
                'choices'  => [
                    'Plus populaire' => 'DESC',
                    'Moins populaire' => 'ASC',
                ],
            ])
            ->add('dateAtCreatedTri', ChoiceType::class, [
                'label' => 'Date de création',
                'required' => false,
                'choices'  => [
                    'Plus récents' => 'ASC',
                    'Moins récents' => 'DESC',
                ],
            ])
            ->add('dateEventTri', ChoiceType::class, [
                'label' => "Date de l'évenement",
                'required' => false,
                'choices'  => [
                    'Plus proche' => 'ASC',
                    'Moins proche' => 'DESC',
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
