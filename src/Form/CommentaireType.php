<?php

namespace App\Form;

use App\Entity\Commentaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('contenu', TextareaType::class, [
            'label' => 'Commentaire',
            'required' => true,
            'constraints' => [
                new Length(['max' => 300, 'maxMessage' => 'Le numéro de votre permis ne peut pas dépasser {{ limit }} caractères.']),
            ],
            'label_attr' => ['class' => 'form-label'],
            'attr' => [
                'maxlength' => 299,
                'class' => 'form-control mb-3'
            ]
        ])
        ->add('note', NumberType::class, [
            'label' => 'Note (de 0 à 5)',
            'required' => true,
            'constraints' => [
                new NotBlank(['message' => 'Veuillez entrer votre note.']),
                new Regex([
                    'pattern' => '/^[0-5]+$/i',
                    'message' => 'La note ne peut que contenir des chiffres de 0 à 5.',
                ])
            ],
            'label_attr' => ['class' => 'form-label'],
            'attr' => ['class' => 'form-control mb-3']
        ])
        ->add('submit', SubmitType::class, [
            'label' => "Ajoutez commentaire",
            'attr' => [
                'class' => 'btn btn-primary btn-block form-control mb-3'
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
