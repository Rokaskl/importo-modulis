<?php

namespace App\Repository;

use App\Entity\BrandedFood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BrandedFood|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrandedFood|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrandedFood[]    findAll()
 * @method BrandedFood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrandedFoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BrandedFood::class);
    }

    // /**
    //  * @return BrandedFood[] Returns an array of BrandedFood objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BrandedFood
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
