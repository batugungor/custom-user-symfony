<?php

namespace App\Repository;

use App\Entity\TblCompanies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TblCompanies|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblCompanies|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblCompanies[]    findAll()
 * @method TblCompanies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblCompaniesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TblCompanies::class);
    }

    /**
     * @param $slug
     * @return TblCompanies Returns an array of TblCompanies objects
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getActiveServices($slug)
    {
        return $this->createQueryBuilder('t')
            ->addSelect('s')
            ->innerJoin('t.services', 's')
            ->andWhere('t.seoUrl = :slug')
            ->setParameter('slug', $slug)
            ->andWhere('t.companyActive = true')
            ->andWhere('s.serviceActive = true')
            ->orderBy('s.serviceName', 'ASC')
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param $slug
     * @return TblCompanies Returns an array of TblCompanies objects
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getActiveServicesById($id)
    {
        return $this->createQueryBuilder('t')
            ->addSelect('s')
            ->innerJoin('t.services', 's')
            ->andWhere('t.tblCompaniesId = :id')
            ->setParameter('id', $id)
            ->andWhere('t.companyActive = true')
            ->andWhere('s.serviceActive = true')
            ->orderBy('s.serviceName', 'ASC')
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param $slug
     * @return TblCompanies Returns an array of TblCompanies objects
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getByServices($slug, $service)
    {
        return $this->createQueryBuilder('t')
            ->addSelect('s')
            ->innerJoin('t.services', 's')
            ->andWhere('t.seoUrl = :slug')
            ->setParameter('slug', $slug)
            ->andWhere('t.companyActive = true')
            ->andWhere('s.serviceActive = true')
            ->andWhere('s.serviceId = :service')
            ->setParameter('service', $service)
            ->orderBy('s.serviceName', 'ASC')
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param $slug
     * @return TblCompanies Returns an array of TblCompanies objects
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getServicesById(int $id, $service)
    {
        return $this->createQueryBuilder('t')
            ->addSelect('s')
            ->innerJoin('t.services', 's')
            ->andWhere('t.tblCompaniesId = :id')
            ->setParameter('id', $id)
            ->andWhere('t.companyActive = true')
            ->andWhere('s.serviceActive = true')
            ->andWhere('s.serviceId = :service')
            ->setParameter('service', $service)
            ->orderBy('s.serviceName', 'ASC')
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param $slug
     * @return TblCompanies Returns an array of TblCompanies objects
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getCompanyByOrdernr(int $id, $order)
    {
        return $this->createQueryBuilder('t')
            ->innerJoin('t.services', 's')
            ->innerJoin('s.contracts', 'c')
            ->andWhere('t.tblCompaniesId = :id')
            ->setParameter('id', $id)
            ->andWhere('c.tblCompaniesServicesContractsId = :order')
            ->setParameter('order', $order)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /*
    public function findOneBySomeField($value): ?TblCompanies
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
