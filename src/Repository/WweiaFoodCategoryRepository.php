<?php

namespace App\Repository;

use App\Entity\WweiaFoodCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method WweiaFoodCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method WweiaFoodCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method WweiaFoodCategory[]    findAll()
 * @method WweiaFoodCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WweiaFoodCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WweiaFoodCategory::class);
    }

    // /**
    //  * @return WweiaFoodCategory[] Returns an array of WweiaFoodCategory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WweiaFoodCategory
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
