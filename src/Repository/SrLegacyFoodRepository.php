<?php

namespace App\Repository;

use App\Entity\SrLegacyFood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SrLegacyFood|null find($id, $lockMode = null, $lockVersion = null)
 * @method SrLegacyFood|null findOneBy(array $criteria, array $orderBy = null)
 * @method SrLegacyFood[]    findAll()
 * @method SrLegacyFood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SrLegacyFoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SrLegacyFood::class);
    }

    // /**
    //  * @return SrLegacyFood[] Returns an array of SrLegacyFood objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SrLegacyFood
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
