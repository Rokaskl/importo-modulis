<?php

namespace App\Repository;

use App\Entity\AcquisitionSample;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AcquisitionSample|null find($id, $lockMode = null, $lockVersion = null)
 * @method AcquisitionSample|null findOneBy(array $criteria, array $orderBy = null)
 * @method AcquisitionSample[]    findAll()
 * @method AcquisitionSample[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcquisitionSampleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AcquisitionSample::class);
    }

    // /**
    //  * @return AcquisitionSample[] Returns an array of AcquisitionSample objects
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
    public function findOneBySomeField($value): ?AcquisitionSample
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
