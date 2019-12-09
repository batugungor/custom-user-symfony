<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesPL
 *
 * @ORM\Table(name="tbl_companies_p_l")
 * @ORM\Entity
 */
class TblCompaniesPL
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblCompaniesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_paymethods_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblCompaniesPaymethodsId;

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function getTblCompaniesPaymethodsId(): ?int
    {
        return $this->tblCompaniesPaymethodsId;
    }


}
