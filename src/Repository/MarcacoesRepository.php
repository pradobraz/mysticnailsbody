<?php

namespace App\Repository;

use App\Entity\Marcacoes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Marcacoes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Marcacoes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Marcacoes[]    findAll()
 * @method Marcacoes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarcacoesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Marcacoes::class);
    }

    // /**
    //  * @return Marcacoes[] Returns an array of Marcacoes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Marcacoes
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
