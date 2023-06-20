<?php

namespace App\Controller;

use DateTime;
use App\Entity\Voiture;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
    public function show(Voiture $voiture, Request $request, EntityManagerInterface $em, int $id)
    {
        $user = $this->getUser();
        $voiture = $em->getRepository(Voiture::class)->find($id);
        $listComment = $em->getRepository(Commentaire::class)->findBy(
            ['voiture' => $voiture],
            ['id' => 'DESC']
        );
        $date = new DateTime();
        $form = $this->createForm(CommentaireType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $commentaire = new Commentaire();
            $contenu = $form->get('contenu')->getData();
            $note = $form->get('note')->getData();
            $commentaire->setContenu($contenu)
                    ->setNote($note)    
                    ->setUser($user)
                    ->setCreatedAt($date)
                    ->setVoiture($voiture);
            $em->persist($commentaire);
            $em->flush();

            return new RedirectResponse($this->generateUrl('voiture_show', ['id' => $id]));
        } 

        return $this->render('voiture/show.html.twig', [
            'voiture' => $voiture,
            'commentaireForm' => $form->createView(),
            'commentaires' => $listComment
        ]);
    }
}
