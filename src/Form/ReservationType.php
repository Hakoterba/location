<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $timezone = new \DateTimeZone('Europe/Paris');
        $datetime = new \DateTime('', $timezone);

        $builder
            ->add('dateDebut', DateTimeType::class, [
                'label' => 'Date et heure de début de location',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control mt-3',
                ],
                'data' => $datetime,
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être égale ou postérieure à la date actuelle.',
                    ]),
                ],
            ])
            ->add('dateFin', DateTimeType::class, [
                'label' => 'Date et heure de fin de location',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control mt-3',
                ],
                'data' => $datetime,
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être égale ou postérieure à la date actuelle.',
                    ]),
                ],
            ])
            ->add('valider', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn btn-primary mt-3',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'constraints' => [
                new Callback([$this, 'validateDateRange']),
            ],
        ]);
    }

    public function validateDateRange($value, ExecutionContextInterface $context)
    {
        /** @var Reservation $reservation */
        $reservation = $context->getRoot()->getData();
    
        if ($reservation->getDateDebut() > $reservation->getDateFin()) {
            $context->buildViolation('La date de début ne peut pas être postérieure à la date de fin')
                ->atPath('dateDebut')
                ->addViolation();
        }
    
        if ($reservation->getDateFin() < $reservation->getDateDebut()) {
            $context->buildViolation('La date de fin ne peut pas être antérieure à la date de début')
                ->atPath('dateFin')
                ->addViolation();
        }
    }
}
