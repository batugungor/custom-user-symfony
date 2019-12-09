<?php

namespace App\Repository;

use App\Entity\TblCompaniesServicesContracts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TblCompaniesServicesContracts|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblCompaniesServicesContracts|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblCompaniesServicesContracts[]    findAll()
 * @method TblCompaniesServicesContracts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblCompaniesServicesContractsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TblCompaniesServicesContracts::class);
    }

    /**
     * @return int
     * @throws NonUniqueResultException
     */
    public function getNextOrderNr()
    {
        return ($this->createQueryBuilder('t')
            ->select('t.contractOrdernr')
            ->orderBy('t.contractOrdernr', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()['contractOrdernr'] + 1);
    }

    /*
    public function findOneBySomeField($value): ?TblCompaniesServicesContracts
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
