<?php

namespace App\Repository;

use App\Entity\Almacenes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Almacenes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Almacenes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Almacenes[]    findAll()
 * @method Almacenes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlmacenesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Almacenes::class);
    }

    // /**
    //  * @return Almacenes[] Returns an array of Almacenes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Almacenes
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
