<?php

namespace App\Repository;

use App\Entity\SubSampleResult;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SubSampleResult|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubSampleResult|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubSampleResult[]    findAll()
 * @method SubSampleResult[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubSampleResultRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubSampleResult::class);
    }

    // /**
    //  * @return SubSampleResult[] Returns an array of SubSampleResult objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubSampleResult
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
