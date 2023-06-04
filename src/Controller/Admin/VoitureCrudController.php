<?php

namespace App\Controller\Admin;

use App\Entity\Voiture;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VoitureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Voiture::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
            yield TextField::new('modele');
            yield TextField::new('marque');
            yield TextField::new('annee');
            yield IntegerField::new('prixJournalier');
            yield BooleanField::new('disponibilite');
            yield TextField::new('carburant');
            yield TextField::new('kms');
            yield TextField::new('immatriculation');
            yield ImageField::new('image')
                ->setBasePath('public/images/')
                ->setUploadDir('public/images/')
                ->setUploadedFileNamePattern('Car.[randomhash].[extension]');;
            yield TextEditorField::new('description');
    }
}
