<?php

namespace App\Form;

use App\Entity\FilterSelection;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilterAnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sexe', ChoiceType::class, [
                'label' => 'Sexe',
                'required' => false,
                'choices'  => [
                    'Male' => 'Male',
                    'Femelle' => 'Femelle',
                ],
            ])
            ->add('espece', ChoiceType::class, [
                'label' => 'Espece',
                'required' => false,
                'choices'  => [
                    'Chien' => 'Chien',
                    'Chat' => 'Chat',
                    'Serpent' => 'Serpent',
                    'Hamster' => 'Hamster'
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'required' => false,
                'choices'  => [
                    'Adoption' => 'Adoption',
                    'Perte' => 'Perte'
                ],
            ])
            ->add('submit', SubmitType::class,[
                'label' => 'Filtrer',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FilterSelection::class,
        ]);
    }
}
