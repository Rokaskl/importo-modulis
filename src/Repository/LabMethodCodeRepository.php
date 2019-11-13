<?php

namespace App\Repository;

use App\Entity\LabMethodCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LabMethodCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabMethodCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabMethodCode[]    findAll()
 * @method LabMethodCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabMethodCodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LabMethodCode::class);
    }

    // /**
    //  * @return LabMethodCode[] Returns an array of LabMethodCode objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LabMethodCode
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
