<?php

namespace App\DataFixtures;

use App\Entity\Voiture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $marque = ['Audi','Alfa Romeo','BMW','Citroën','Peugeot','Renault','Dacia','Alpina','Lotus','Maserati','Nissan','Opel'];
        $modele = ['Modèle Sport','Modèle familial','Modèle classique','Modèle course'];
        $carburant = ['essence','électrique'];
        $description = "Ceci est une description de voiture.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis placerat lacus, vel cursus elit. Nunc ultricies lorem nec leo maximus, in condimentum est pulvinar. Etiam efficitur fermentum augue, eu faucibus libero bibendum sagittis. Fusce nec eleifend elit. Etiam consectetur mi tempus, rhoncus mi vel, semper ligula. Aliquam vel felis id dui efficitur aliquet. Maecenas non gravida est.";

        function genererPlaqueImm() {
            $departementNbr = rand(1, 99);
            $departementNbr = str_pad($departementNbr, 2, '0', STR_PAD_LEFT);
            
            $lettre1 = chr(rand(65, 90));
            $lettre2 = chr(rand(65, 90));
            
            $digits = rand(100, 999);
            
            return $departementNbr . '-' . $lettre1 . $lettre2 . '-' . $digits;
        }
        // git add
        for ($i=0; $i < count($marque); $i++) { 
            $voiture = new Voiture();
            $voiture->setModele($modele[rand(0,3)])
                    ->setMarque($marque[$i])
                    ->setAnnee(rand(2000,2023))
                    ->setKms(rand(50000,250000))
                    ->setPrixJournalier(rand(0, 250))
                    ->setDisponibilite(rand(0,1))
                    ->setCarburant($carburant[rand(0, 1)])
                    ->setDescription($description)
                    ->setImmatriculation(genererPlaqueImm());
            $manager->persist($voiture);
        }
        //git push
        $manager->flush();
    }
}
