<?php

namespace App\Repository;

use App\Entity\Capitalise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Capitalise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Capitalise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Capitalise[]    findAll()
 * @method Capitalise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CapitaliseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Capitalise::class);
    }

    // /**
    //  * @return Capitalise[] Returns an array of Capitalise objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Capitalise
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
