<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesL
 *
 * @ORM\Table(name="tbl_companies_l")
 * @ORM\Entity
 */
class TblCompaniesL
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
     * @ORM\Column(name="link_tbl_companies_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linkTblCompaniesId;

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function getLinkTblCompaniesId(): ?int
    {
        return $this->linkTblCompaniesId;
    }


}
