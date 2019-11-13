<?php

namespace App\Repository;

use App\Entity\FoodProteinConversionFactor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodProteinConversionFactor|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodProteinConversionFactor|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodProteinConversionFactor[]    findAll()
 * @method FoodProteinConversionFactor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodProteinConversionFactorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodProteinConversionFactor::class);
    }

    // /**
    //  * @return FoodProteinConversionFactor[] Returns an array of FoodProteinConversionFactor objects
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
    public function findOneBySomeField($value): ?FoodProteinConversionFactor
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
