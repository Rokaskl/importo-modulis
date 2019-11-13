<?php

namespace App\Repository;

use App\Entity\LabMethod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LabMethod|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabMethod|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabMethod[]    findAll()
 * @method LabMethod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabMethodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LabMethod::class);
    }

    // /**
    //  * @return LabMethod[] Returns an array of LabMethod objects
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
    public function findOneBySomeField($value): ?LabMethod
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
