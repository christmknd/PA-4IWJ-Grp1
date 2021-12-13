<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',TextType::class, [
                'label' => 'Titre'
            ])
            ->add('description',TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('dateEvent', DateTimeType::class, [
                'label' => "Date de l'evenement",
                'date_widget' => 'single_text'
            ])
            ->add('address',TextType::class, [
                'label' => 'Address',
                'attr' => ['class' => 'location']
            ])
            ->add('ville',TextType::class, [
                'label' => 'Ville',
                'attr' => ['class' => 'locality'],
            ])
            ->add('zipCode',TextType::class, [
                'label' => 'Code Postal',
                'attr' => ['class' => 'postal_code'],
            ])
            ->add('pays',TextType::class, [
                'label' => 'Pays',
                'attr' => ['class' => 'country'],
            ])
            ->add('LatLng', HiddenType::class, [
                'attr' => ['class' => 'LatLng'],
            ])
            //->add('annonces')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
