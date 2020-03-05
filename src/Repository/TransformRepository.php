<?php

namespace App\Repository;

use App\Entity\Transform;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Transform|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transform|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transform[]    findAll()
 * @method Transform[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransformRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transform::class);
    }

    // /**
    //  * @return Transform[] Returns an array of Transform objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Transform
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
