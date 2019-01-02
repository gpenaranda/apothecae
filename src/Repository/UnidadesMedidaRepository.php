<?php

namespace App\Repository;

use App\Entity\UnidadesMedida;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UnidadesMedida|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnidadesMedida|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnidadesMedida[]    findAll()
 * @method UnidadesMedida[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnidadesMedidaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UnidadesMedida::class);
    }

    // /**
    //  * @return UnidadesMedida[] Returns an array of UnidadesMedida objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnidadesMedida
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
