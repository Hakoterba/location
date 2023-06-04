<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\UpdateUserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    #[Route('/{id}/modification', name: 'user_update')]
    public function update(EntityManagerInterface $em, Request $request, UserPasswordHasherInterface $userPasswordHasher, User $user): Response
    {
        $form = $this->createForm(UpdateUserType::class);
        $form->handleRequest($request);
        $currentUser = $user;

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            if ($data->getPassword()) {
                $currentPassword = trim($data->getPassword());
                if (strlen($currentPassword) > 0) {
                    if ($data->getPassword() !== $currentUser->getPassword()) {
                        $currentUser->setPassword($userPasswordHasher->hashPassword($currentUser,$data->getPassword()));
                    }
                }
            }
            else {
                $currentUser->setPassword($userPasswordHasher->hashPassword($currentUser,$currentUser->getPassword()));
            }
            $em->persist($currentUser);
            $em->flush();
            $validation = "Profil mis à jour.";
            return $this->render('user/update.html.twig', [
                'updateForm' => $form->createView(),
                'validation' => $validation
            ]);
        }
        
        return $this->render('user/update.html.twig', [
            'updateForm' => $form->createView(),
            'validation' => false
        ]);
    }
}
