<?php

namespace App\Repository;

use App\Entity\InputFood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InputFood|null find($id, $lockMode = null, $lockVersion = null)
 * @method InputFood|null findOneBy(array $criteria, array $orderBy = null)
 * @method InputFood[]    findAll()
 * @method InputFood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InputFoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InputFood::class);
    }

    // /**
    //  * @return InputFood[] Returns an array of InputFood objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InputFood
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
