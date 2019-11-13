<?php

namespace App\Repository;

use App\Entity\FoodAttribute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodAttribute|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodAttribute|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodAttribute[]    findAll()
 * @method FoodAttribute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodAttributeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodAttribute::class);
    }

    // /**
    //  * @return FoodAttribute[] Returns an array of FoodAttribute objects
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
    public function findOneBySomeField($value): ?FoodAttribute
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
