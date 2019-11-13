<?php

namespace App\Repository;

use App\Entity\FoodUpdateLogEntry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodUpdateLogEntry|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodUpdateLogEntry|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodUpdateLogEntry[]    findAll()
 * @method FoodUpdateLogEntry[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodUpdateLogEntryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodUpdateLogEntry::class);
    }

    // /**
    //  * @return FoodUpdateLogEntry[] Returns an array of FoodUpdateLogEntry objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FoodUpdateLogEntry
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
