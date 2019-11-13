<?php

namespace App\Repository;

use App\Entity\FoodNutrientSource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodNutrientSource|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodNutrientSource|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodNutrientSource[]    findAll()
 * @method FoodNutrientSource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodNutrientSourceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodNutrientSource::class);
    }

    // /**
    //  * @return FoodNutrientSource[] Returns an array of FoodNutrientSource objects
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
    public function findOneBySomeField($value): ?FoodNutrientSource
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
