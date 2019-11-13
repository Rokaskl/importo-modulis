<?php

namespace App\Repository;

use App\Entity\MarketAcquisition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MarketAcquisition|null find($id, $lockMode = null, $lockVersion = null)
 * @method MarketAcquisition|null findOneBy(array $criteria, array $orderBy = null)
 * @method MarketAcquisition[]    findAll()
 * @method MarketAcquisition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarketAcquisitionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MarketAcquisition::class);
    }

    // /**
    //  * @return MarketAcquisition[] Returns an array of MarketAcquisition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MarketAcquisition
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
