<?php

namespace App\Repository;

use App\Entity\TrieSelection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrieSelection|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrieSelection|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrieSelection[]    findAll()
 * @method TrieSelection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrieSelectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrieSelection::class);
    }

    // /**
    //  * @return TrieSelection[] Returns an array of TrieSelection objects
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
    public function findOneBySomeField($value): ?TrieSelection
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
