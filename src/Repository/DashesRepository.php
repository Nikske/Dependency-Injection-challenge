<?php

namespace App\Repository;

use App\Entity\Dashes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dashes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dashes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dashes[]    findAll()
 * @method Dashes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DashesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dashes::class);
    }

    // /**
    //  * @return Dashes[] Returns an array of Dashes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dashes
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
