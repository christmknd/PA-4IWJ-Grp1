<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',TextType::class, [
                'label' => 'Titre'
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices'  => [
                    'Adoption' => 'Adoption',
                    'Perte' => 'Perte',
                ],
            ])
            ->add('description',TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('nomAnimal',TextType::class, [
                'label' => 'Nom animal'
            ])
            ->add('espece',TextType::class, [
                'label' => 'Espece'
            ])
            ->add('lieu',TextType::class, [
                'label' => 'Lieu'
            ])
            ->add('sexe', ChoiceType::class, [
                'label' => 'Sexe',
                'choices'  => [
                    'Male' => 'Male',
                    'Femelle' => 'Femelle',
                ],
            ])
            ->add('age',IntegerType::class, [
                'label' => 'Age'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
