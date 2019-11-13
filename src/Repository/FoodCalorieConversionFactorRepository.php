<?php

namespace App\Repository;

use App\Entity\FoodCalorieConversionFactor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodCalorieConversionFactor|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodCalorieConversionFactor|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodCalorieConversionFactor[]    findAll()
 * @method FoodCalorieConversionFactor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodCalorieConversionFactorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodCalorieConversionFactor::class);
    }

    // /**
    //  * @return FoodCalorieConversionFactor[] Returns an array of FoodCalorieConversionFactor objects
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
    public function findOneBySomeField($value): ?FoodCalorieConversionFactor
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
