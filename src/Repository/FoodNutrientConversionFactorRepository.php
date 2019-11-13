<?php

namespace App\Repository;

use App\Entity\FoodNutrientConversionFactor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodNutrientConversionFactor|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodNutrientConversionFactor|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodNutrientConversionFactor[]    findAll()
 * @method FoodNutrientConversionFactor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodNutrientConversionFactorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodNutrientConversionFactor::class);
    }

    // /**
    //  * @return FoodNutrientConversionFactor[] Returns an array of FoodNutrientConversionFactor objects
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
    public function findOneBySomeField($value): ?FoodNutrientConversionFactor
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
