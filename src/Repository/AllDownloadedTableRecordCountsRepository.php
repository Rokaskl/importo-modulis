<?php

namespace App\Repository;

use App\Entity\AllDownloadedTableRecordCounts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AllDownloadedTableRecordCounts|null find($id, $lockMode = null, $lockVersion = null)
 * @method AllDownloadedTableRecordCounts|null findOneBy(array $criteria, array $orderBy = null)
 * @method AllDownloadedTableRecordCounts[]    findAll()
 * @method AllDownloadedTableRecordCounts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllDownloadedTableRecordCountsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AllDownloadedTableRecordCounts::class);
    }

    // /**
    //  * @return AllDownloadedTableRecordCounts[] Returns an array of AllDownloadedTableRecordCounts objects
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
    public function findOneBySomeField($value): ?AllDownloadedTableRecordCounts
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
