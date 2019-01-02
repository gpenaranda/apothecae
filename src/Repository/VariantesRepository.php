<?php

namespace App\Repository;

use App\Entity\Variantes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Variantes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Variantes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Variantes[]    findAll()
 * @method Variantes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VariantesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Variantes::class);
    }

    // /**
    //  * @return Variantes[] Returns an array of Variantes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Variantes
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
