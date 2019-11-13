<?php

namespace App\Repository;

use App\Entity\FoodAttributeType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoodAttributeType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoodAttributeType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoodAttributeType[]    findAll()
 * @method FoodAttributeType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoodAttributeTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoodAttributeType::class);
    }

    // /**
    //  * @return FoodAttributeType[] Returns an array of FoodAttributeType objects
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
    public function findOneBySomeField($value): ?FoodAttributeType
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
