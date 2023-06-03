<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UpdateUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre numéro de rue ainsi que le nom de la rue.']),
                    new Length(['max' => 50, 'maxMessage' => 'Votre adresse ne peut pas dépasser {{ limit }} caractères.']),
                ],
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control mb-3']
            ])
            ->add('codePostal', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre code postal.']),
                    new Length(['max' => 5, 'maxMessage' => 'Le code postal ne peut pas dépasser {{ limit }} caractères.']),
                    new Regex([
                        'pattern' => '/^[0-9]+$/i',
                        'message' => 'Le code postal ne peut contenir que des chiffres.',
                    ])
                ],
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control mb-3']
            ])
            ->add('ville', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre ville.']),
                    new Length(['max' => 30, 'maxMessage' => 'Le nom de votre ville ne peut pas dépasser {{ limit }} caractères.']),
                ],
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control mb-3']
            ])
            ->add('numeroPermis', TextType::class, [
                'label' => 'Numéro de permis',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre numéro de permis.']),
                    new Length(['max' => 15, 'maxMessage' => 'Le numéro de votre permis ne peut pas dépasser {{ limit }} caractères.']),
                    new Regex([
                        'pattern' => '/^[A-Za-z0-9]+$/i',
                        'message' => 'Le numéro de permis ne peut contenir que des chiffres ou des lettres.',
                    ])
                ],
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control mb-3']
            ])
            ->add('password', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type' => PasswordType::class,
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Votre mot de passe doit contenir {{ limit }} caractères minimum',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                    new Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/',
                        'message' => 'Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et doit avoir une longueur minimale de 8 caractères.',
                    ])
                ],
                'first_options'  => [
                    'label' => 'Mot de passe',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control mb-3']
                ],
                'second_options' => [
                    'label' => 'Confirmez votre mot de passe',
                    'label_attr' => ['class' => 'form-label'],
                    'attr' => ['class' => 'form-control mb-3']
                ],            
            ])
            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire",
                'attr' => [
                    'class' => 'btn btn-primary btn-block form-control mb-3'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
