<?php

namespace App\Repository;

use App\Entity\LabMethodNutrient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LabMethodNutrient|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabMethodNutrient|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabMethodNutrient[]    findAll()
 * @method LabMethodNutrient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabMethodNutrientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LabMethodNutrient::class);
    }

    // /**
    //  * @return LabMethodNutrient[] Returns an array of LabMethodNutrient objects
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
    public function findOneBySomeField($value): ?LabMethodNutrient
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
