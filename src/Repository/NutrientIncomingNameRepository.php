<?php

namespace App\Repository;

use App\Entity\NutrientIncomingName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NutrientIncomingName|null find($id, $lockMode = null, $lockVersion = null)
 * @method NutrientIncomingName|null findOneBy(array $criteria, array $orderBy = null)
 * @method NutrientIncomingName[]    findAll()
 * @method NutrientIncomingName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NutrientIncomingNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NutrientIncomingName::class);
    }

    // /**
    //  * @return NutrientIncomingName[] Returns an array of NutrientIncomingName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NutrientIncomingName
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
