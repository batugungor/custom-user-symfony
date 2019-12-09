<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesCustomersProfilesLink
 *
 * @ORM\Table(name="tbl_companies_customers_profiles_link")
 * @ORM\Entity
 */
class TblCompaniesCustomersProfilesLink
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_customers_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblCompaniesCustomersId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_customers_profiles_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblCompaniesCustomersProfilesId;

    public function getTblCompaniesCustomersId(): ?int
    {
        return $this->tblCompaniesCustomersId;
    }

    public function getTblCompaniesCustomersProfilesId(): ?int
    {
        return $this->tblCompaniesCustomersProfilesId;
    }


}
