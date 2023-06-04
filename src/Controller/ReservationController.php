<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Voiture;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Ramsey\Uuid\Uuid;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Uid\Uuid as SymfonyUuid;

class ReservationController extends AbstractController
{
    #[Route('voitures/{id}/reservation', name: 'app_reservation')]
    public function index(EntityManagerInterface $em, Request $request, int $id): Response
    {
        $voiture = $em->find(Voiture::class, $id);
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        $uuid = Uuid::uuid4();
        $uuid = SymfonyUuid::fromString($uuid->toString());
        $user = $this->getUser();

        
        if ($form->isSubmitted() && $form->isValid()) {
            $prixJournalier = $voiture->getPrixJournalier();
            $dateDebut = $form->get('dateDebut')->getData();
            $dateFin = $form->get('dateFin')->getData();
            $interval = $dateDebut->diff($dateFin);
            $nombreJours = $interval->days;
            $prixTotal = $prixJournalier * $nombreJours;

            $reservation->setUser($user)
                ->setVoiture($voiture)
                ->setNumeroReservation($uuid)
                ->setDateDebut($form->get('dateDebut')->getData())
                ->setDateFin($form->get('dateFin')->getData())
                ->setPrix($prixTotal);

            $em->persist($reservation);
            $em->flush();
    
            return $this->render('reservation/show.html.twig', [
                'reservation' => $reservation,
            ]);
        }
        
        return $this->render('reservation/index.html.twig', [
            'voiture' => $voiture,
            'formReservation' => $form->createView(),
            'controller_name' => 'ReservationController'
        ]);
    }

    #[Route('/{id}/reservation', name: 'user_reservation')]
    public function show(EntityManagerInterface $em, int $id)
    {
        $user = $this->getUser();
        $reservation = $em->getRepository(Reservation::class)->findBy(['user' => $user]);

        return $this->render('reservation/list.html.twig', [
            'reservations' => $reservation
        ]);
    }
}
