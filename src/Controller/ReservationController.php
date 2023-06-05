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
    #[Route('/voitures/{id}/reservation', name: 'app_reservation')]
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
            
            if ($voiture->getDisponibilite()) {
                
            }

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
        $reservationFutur = $em->getRepository(Reservation::class)->findByDateFutur($user);
        $reservationPasse = $em->getRepository(Reservation::class)->findByDatePasse($user);
        $reservationEnCours = $em->getRepository(Reservation::class)->findByDateEnCours($user);

        return $this->render('reservation/list.html.twig', [
            'reservationFutur' => $reservationFutur,
            'reservationPasse' => $reservationPasse,
            'reservationEnCours' => $reservationEnCours
        ]);
    }

    #[Route('/{id}/reservation/delete/{idReservation}', name: 'reservation_delete')]
    public function delete(EntityManagerInterface $em, int $id, int $idReservation): Response
    {
        $existingReservation = $em->getRepository(Reservation::class)->find($idReservation);
        
        if (!$existingReservation) {
            throw $this->createNotFoundException('La réservation spécifiée n\'existe pas.');
        }
        
        $em->remove($existingReservation);
        $em->flush();

        $this->addFlash('success', 'La réservation a été supprimée avec succès.');
        return $this->redirectToRoute('user_reservation', ['id' => $id]);
    }
}
