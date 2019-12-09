<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesCatBrands
 *
 * @ORM\Table(name="tbl_companies_cat_brands")
 * @ORM\Entity
 */
class TblCompaniesCatBrands
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_brands_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesCatBrandsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_name", type="string", length=255, nullable=true)
     */
    private $brandName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_image", type="string", length=250, nullable=true)
     */
    private $brandImage;

    /**
     * @var bool
     *
     * @ORM\Column(name="brand_approved", type="boolean", nullable=false, options={"default"="1"})
     */
    private $brandApproved = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="brand_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $brandActive = '1';

    public function getTblCompaniesCatBrandsId(): ?int
    {
        return $this->tblCompaniesCatBrandsId;
    }

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    public function getBrandImage(): ?string
    {
        return $this->brandImage;
    }

    public function setBrandImage(?string $brandImage): self
    {
        $this->brandImage = $brandImage;

        return $this;
    }

    public function getBrandApproved(): ?bool
    {
        return $this->brandApproved;
    }

    public function setBrandApproved(bool $brandApproved): self
    {
        $this->brandApproved = $brandApproved;

        return $this;
    }

    public function getBrandActive(): ?bool
    {
        return $this->brandActive;
    }

    public function setBrandActive(bool $brandActive): self
    {
        $this->brandActive = $brandActive;

        return $this;
    }


}
