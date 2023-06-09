<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Reservation;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Reservation>
 *
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function save(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByDateFutur(User $user)
    {
        $dateActuelle = new \DateTime();

        return $this->createQueryBuilder('v')
            ->andWhere('v.dateDebut > :dateActuelle')
            ->andWhere('v.dateFin > :dateActuelle')
            ->andWhere('v.user = :user')
            ->setParameter('dateActuelle', $dateActuelle)
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    public function findByDatePasse(User $user)
    {
        $dateActuelle = new \DateTime();

        return $this->createQueryBuilder('v')
            ->andWhere('v.dateFin < :dateActuelle')
            ->andWhere('v.user = :user')
            ->setParameter('dateActuelle', $dateActuelle)
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    public function findByDateEnCours(User $user)
    {
        $dateActuelle = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        $dateActuelle->setTimezone(new \DateTimeZone('UTC')); // Convertir la date actuelle en UTC si nécessaire
    
        return $this->createQueryBuilder('v')
            ->andWhere('v.dateDebut < :dateActuelle')
            ->andWhere('v.dateFin > :dateActuelle')
            ->andWhere('v.user = :user')
            ->setParameter('dateActuelle', $dateActuelle)
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Reservation[] Returns an array of Reservation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reservation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
