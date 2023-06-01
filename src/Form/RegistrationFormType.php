<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre nom.']),
                    new Length(['max' => 20, 'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.'])
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre prénom.']),
                    new Length(['max' => 30, 'maxMessage' => 'Le prénom ne peut pas dépasser {{ limit }} caractères.'])
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre adresse email.']),
                    new Length(['max' => 30, 'maxMessage' => 'L\'email ne peut pas dépasser {{ limit }} caractères.']),
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre numéro de rue ainsi que le nom de la rue.']),
                    new Length(['max' => 50, 'maxMessage' => 'Votre adresse ne peut pas dépasser {{ limit }} caractères.']),
                ],
            ])
            ->add('codePostal', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre code postal.']),
                    new Length(['max' => 5, 'maxMessage' => 'Le prénom ne peut pas dépasser {{ limit }} caractères.']),
                    new Regex([
                        'pattern' => '/^[0-9]+$/i',
                        'message' => 'Le code postal ne peut contenir que des chiffres.',
                    ])
                    ]
                    ])
            ->add('ville', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre ville.']),
                    new Length(['max' => 30, 'maxMessage' => 'Le nom de votre ville ne peut pas dépasser {{ limit }} caractères.']),
                ],
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
            ])
            ->add('password', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type' => PasswordType::class,
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
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
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Confirmez votre mot de passe'],            
            ])
            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire",
                'attr' => [
                    'class' => 'btn btn-primary btn-block',
                ],
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
