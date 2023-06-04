<?php

namespace App\Controller;

use App\Entity\Voiture;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoitureController extends AbstractController
{
    #[Route('/voitures', name: 'app_voiture')]
    public function index(EntityManagerInterface $em): Response
    {
        $liste = $em->getRepository(Voiture::class)->findAll();
        return $this->render('voiture/index.html.twig', [
            'liste' => $liste,
            'controller_name' => 'VoitureController'
        ]);
    }

    #[Route('voitures/{id}', name: 'voiture_show')]
    public function show(Voiture $voiture)
    {
        return $this->render('voiture/show.html.twig', [
            'voiture' => $voiture
        ]);
    }
}
