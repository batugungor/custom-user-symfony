<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesBL
 *
 * @ORM\Table(name="tbl_companies_b_l")
 * @ORM\Entity
 */
class TblCompaniesBL
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_b_l_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesBLId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=false)
     */
    private $tblCompaniesCatId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_sub_id", type="integer", nullable=false)
     */
    private $tblCompaniesCatSubId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_brands_id", type="integer", nullable=false)
     */
    private $tblCompaniesCatBrandsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=250, nullable=true)
     */
    private $seoUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_keywords", type="string", length=250, nullable=true)
     */
    private $seoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_description", type="string", length=250, nullable=true)
     */
    private $seoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_browser_title", type="string", length=250, nullable=true)
     */
    private $seoBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_h1_title", type="string", length=250, nullable=true)
     */
    private $seoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_anchor_title", type="string", length=250, nullable=true)
     */
    private $seoAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $seoBreadcrumbTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_content", type="text", length=65535, nullable=true)
     */
    private $brandContent;

    public function getTblCompaniesBLId(): ?int
    {
        return $this->tblCompaniesBLId;
    }

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getTblCompaniesCatSubId(): ?int
    {
        return $this->tblCompaniesCatSubId;
    }

    public function setTblCompaniesCatSubId(int $tblCompaniesCatSubId): self
    {
        $this->tblCompaniesCatSubId = $tblCompaniesCatSubId;

        return $this;
    }

    public function getTblCompaniesCatBrandsId(): ?int
    {
        return $this->tblCompaniesCatBrandsId;
    }

    public function setTblCompaniesCatBrandsId(int $tblCompaniesCatBrandsId): self
    {
        $this->tblCompaniesCatBrandsId = $tblCompaniesCatBrandsId;

        return $this;
    }

    public function getSeoUrl(): ?string
    {
        return $this->seoUrl;
    }

    public function setSeoUrl(?string $seoUrl): self
    {
        $this->seoUrl = $seoUrl;

        return $this;
    }

    public function getSeoKeywords(): ?string
    {
        return $this->seoKeywords;
    }

    public function setSeoKeywords(?string $seoKeywords): self
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    public function getSeoDescription(): ?string
    {
        return $this->seoDescription;
    }

    public function setSeoDescription(?string $seoDescription): self
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    public function getSeoBrowserTitle(): ?string
    {
        return $this->seoBrowserTitle;
    }

    public function setSeoBrowserTitle(?string $seoBrowserTitle): self
    {
        $this->seoBrowserTitle = $seoBrowserTitle;

        return $this;
    }

    public function getSeoH1Title(): ?string
    {
        return $this->seoH1Title;
    }

    public function setSeoH1Title(?string $seoH1Title): self
    {
        $this->seoH1Title = $seoH1Title;

        return $this;
    }

    public function getSeoAnchorTitle(): ?string
    {
        return $this->seoAnchorTitle;
    }

    public function setSeoAnchorTitle(?string $seoAnchorTitle): self
    {
        $this->seoAnchorTitle = $seoAnchorTitle;

        return $this;
    }

    public function getSeoBreadcrumbTitle(): ?string
    {
        return $this->seoBreadcrumbTitle;
    }

    public function setSeoBreadcrumbTitle(?string $seoBreadcrumbTitle): self
    {
        $this->seoBreadcrumbTitle = $seoBreadcrumbTitle;

        return $this;
    }

    public function getBrandContent(): ?string
    {
        return $this->brandContent;
    }

    public function setBrandContent(?string $brandContent): self
    {
        $this->brandContent = $brandContent;

        return $this;
    }


}
