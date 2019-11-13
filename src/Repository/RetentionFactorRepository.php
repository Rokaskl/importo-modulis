<?php

namespace App\Repository;

use App\Entity\RetentionFactor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RetentionFactor|null find($id, $lockMode = null, $lockVersion = null)
 * @method RetentionFactor|null findOneBy(array $criteria, array $orderBy = null)
 * @method RetentionFactor[]    findAll()
 * @method RetentionFactor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RetentionFactorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RetentionFactor::class);
    }

    // /**
    //  * @return RetentionFactor[] Returns an array of RetentionFactor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RetentionFactor
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
