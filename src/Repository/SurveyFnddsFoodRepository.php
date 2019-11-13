<?php

namespace App\Repository;

use App\Entity\SurveyFnddsFood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SurveyFnddsFood|null find($id, $lockMode = null, $lockVersion = null)
 * @method SurveyFnddsFood|null findOneBy(array $criteria, array $orderBy = null)
 * @method SurveyFnddsFood[]    findAll()
 * @method SurveyFnddsFood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurveyFnddsFoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SurveyFnddsFood::class);
    }

    // /**
    //  * @return SurveyFnddsFood[] Returns an array of SurveyFnddsFood objects
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
    public function findOneBySomeField($value): ?SurveyFnddsFood
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
