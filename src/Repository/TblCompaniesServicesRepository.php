<?php

namespace App\Repository;

use App\Entity\TblCompaniesServices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TblCompaniesServices|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblCompaniesServices|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblCompaniesServices[]    findAll()
 * @method TblCompaniesServices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblCompaniesServicesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TblCompaniesServices::class);
    }

    /**
     * @return TblCompaniesServices[] Returns an array of TblCompaniesServices objects
     */
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

    /*
    public function findOneBySomeField($value): ?TblCompaniesServices
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
