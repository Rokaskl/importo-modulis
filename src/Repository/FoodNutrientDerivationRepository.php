<?php

namespace App\Repository;

use App\Entity\FoodNutrientDerivation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodNutrientDerivation|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodNutrientDerivation|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodNutrientDerivation[]    findAll()
 * @method FoodNutrientDerivation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodNutrientDerivationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodNutrientDerivation::class);
    }

    // /**
    //  * @return FoodNutrientDerivation[] Returns an array of FoodNutrientDerivation objects
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
    public function findOneBySomeField($value): ?FoodNutrientDerivation
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
