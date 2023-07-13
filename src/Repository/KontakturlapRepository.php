<?php

namespace App\Repository;

use App\Entity\Kontakturlap;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Kontakturlap>
 *
 * @method Kontakturlap|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kontakturlap|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kontakturlap[]    findAll()
 * @method Kontakturlap[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KontakturlapRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kontakturlap::class);
    }

//    /**
//     * @return Kontakturlap[] Returns an array of Kontakturlap objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('k.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Kontakturlap
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
