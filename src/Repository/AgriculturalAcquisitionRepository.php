<?php

namespace App\Repository;

use App\Entity\AgriculturalAcquisition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AgriculturalAcquisition|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgriculturalAcquisition|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgriculturalAcquisition[]    findAll()
 * @method AgriculturalAcquisition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgriculturalAcquisitionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgriculturalAcquisition::class);
    }

    // /**
    //  * @return AgriculturalAcquisition[] Returns an array of AgriculturalAcquisition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgriculturalAcquisition
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
