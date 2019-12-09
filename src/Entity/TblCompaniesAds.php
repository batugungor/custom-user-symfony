<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesAds
 *
 * @ORM\Table(name="tbl_companies_ads")
 * @ORM\Entity
 */
class TblCompaniesAds
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_ads_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesAdsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var int
     *
     * @ORM\Column(name="ad_name", type="integer", nullable=false)
     */
    private $adName;

    /**
     * @var int
     *
     * @ORM\Column(name="ad_location", type="integer", nullable=false)
     */
    private $adLocation;

    public function getTblCompaniesAdsId(): ?int
    {
        return $this->tblCompaniesAdsId;
    }

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(?int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(?int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getAdName(): ?int
    {
        return $this->adName;
    }

    public function setAdName(int $adName): self
    {
        $this->adName = $adName;

        return $this;
    }

    public function getAdLocation(): ?int
    {
        return $this->adLocation;
    }

    public function setAdLocation(int $adLocation): self
    {
        $this->adLocation = $adLocation;

        return $this;
    }


}
