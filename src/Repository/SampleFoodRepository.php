<?php

namespace App\Repository;

use App\Entity\SampleFood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SampleFood|null find($id, $lockMode = null, $lockVersion = null)
 * @method SampleFood|null findOneBy(array $criteria, array $orderBy = null)
 * @method SampleFood[]    findAll()
 * @method SampleFood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SampleFoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SampleFood::class);
    }

    // /**
    //  * @return SampleFood[] Returns an array of SampleFood objects
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
    public function findOneBySomeField($value): ?SampleFood
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
