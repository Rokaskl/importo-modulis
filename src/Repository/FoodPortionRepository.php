<?php

namespace App\Repository;

use App\Entity\FoodPortion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodPortion|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodPortion|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodPortion[]    findAll()
 * @method FoodPortion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodPortionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodPortion::class);
    }

    // /**
    //  * @return FoodPortion[] Returns an array of FoodPortion objects
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
    public function findOneBySomeField($value): ?FoodPortion
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
