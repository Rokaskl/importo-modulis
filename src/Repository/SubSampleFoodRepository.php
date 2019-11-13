<?php

namespace App\Repository;

use App\Entity\SubSampleFood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SubSampleFood|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubSampleFood|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubSampleFood[]    findAll()
 * @method SubSampleFood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubSampleFoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubSampleFood::class);
    }

    // /**
    //  * @return SubSampleFood[] Returns an array of SubSampleFood objects
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
    public function findOneBySomeField($value): ?SubSampleFood
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
