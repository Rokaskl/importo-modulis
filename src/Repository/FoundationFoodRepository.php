<?php

namespace App\Repository;

use App\Entity\FoundationFood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FoundationFood|null find($id, $lockMode = null, $lockVersion = null)
 * @method FoundationFood|null findOneBy(array $criteria, array $orderBy = null)
 * @method FoundationFood[]    findAll()
 * @method FoundationFood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoundationFoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FoundationFood::class);
    }

    // /**
    //  * @return FoundationFood[] Returns an array of FoundationFood objects
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
    public function findOneBySomeField($value): ?FoundationFood
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
