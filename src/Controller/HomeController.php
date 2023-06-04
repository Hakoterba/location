<?php

namespace App\Controller;

use App\Entity\Voiture;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(EntityManagerInterface $em): Response
    {
        $listeVoiture = $em->getRepository(Voiture::class)->findByLast();

        return $this->render('home/index.html.twig', [
            'listeVoiture' => $listeVoiture,
            'controller_name' => 'HomeController'
        ]);
    }
}
