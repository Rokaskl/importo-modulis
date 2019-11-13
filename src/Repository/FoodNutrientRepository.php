<?php

namespace App\Repository;

use App\Entity\FoodNutrient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodNutrient|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodNutrient|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodNutrient[]    findAll()
 * @method FoodNutrient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodNutrientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodNutrient::class);
    }

    // /**
    //  * @return FoodNutrient[] Returns an array of FoodNutrient objects
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
    public function findOneBySomeField($value): ?FoodNutrient
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
