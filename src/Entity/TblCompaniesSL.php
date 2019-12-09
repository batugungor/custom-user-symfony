<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesSL
 *
 * @ORM\Table(name="tbl_companies_s_l")
 * @ORM\Entity
 */
class TblCompaniesSL
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_s_l_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesSLId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_sub_id", type="integer", nullable=false)
     */
    private $tblCompaniesCatSubId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_text", type="text", length=65535, nullable=true)
     */
    private $subText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_brand_extra", type="text", length=65535, nullable=true)
     */
    private $subBrandExtra;

    /**
     * @var bool
     *
     * @ORM\Column(name="sub_emptyrow", type="boolean", nullable=false)
     */
    private $subEmptyrow = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sub_order", type="integer", nullable=false)
     */
    private $subOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="sub_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=255, nullable=true)
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="seo_keywords_date", type="datetime", nullable=true)
     */
    private $seoKeywordsDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="seo_description_date", type="datetime", nullable=true)
     */
    private $seoDescriptionDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_og_title", type="string", length=255, nullable=true)
     */
    private $seoOgTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_og_description", type="string", length=255, nullable=true)
     */
    private $seoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_app_text", type="text", length=65535, nullable=true)
     */
    private $subAppText;

    public function getTblCompaniesSLId(): ?int
    {
        return $this->tblCompaniesSLId;
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

    public function getTblCompaniesCatSubId(): ?int
    {
        return $this->tblCompaniesCatSubId;
    }

    public function setTblCompaniesCatSubId(int $tblCompaniesCatSubId): self
    {
        $this->tblCompaniesCatSubId = $tblCompaniesCatSubId;

        return $this;
    }

    public function getSubText(): ?string
    {
        return $this->subText;
    }

    public function setSubText(?string $subText): self
    {
        $this->subText = $subText;

        return $this;
    }

    public function getSubBrandExtra(): ?string
    {
        return $this->subBrandExtra;
    }

    public function setSubBrandExtra(?string $subBrandExtra): self
    {
        $this->subBrandExtra = $subBrandExtra;

        return $this;
    }

    public function getSubEmptyrow(): ?bool
    {
        return $this->subEmptyrow;
    }

    public function setSubEmptyrow(bool $subEmptyrow): self
    {
        $this->subEmptyrow = $subEmptyrow;

        return $this;
    }

    public function getSubOrder(): ?int
    {
        return $this->subOrder;
    }

    public function setSubOrder(int $subOrder): self
    {
        $this->subOrder = $subOrder;

        return $this;
    }

    public function getSubActive(): ?bool
    {
        return $this->subActive;
    }

    public function setSubActive(bool $subActive): self
    {
        $this->subActive = $subActive;

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

    public function getSeoKeywordsDate(): ?\DateTimeInterface
    {
        return $this->seoKeywordsDate;
    }

    public function setSeoKeywordsDate(?\DateTimeInterface $seoKeywordsDate): self
    {
        $this->seoKeywordsDate = $seoKeywordsDate;

        return $this;
    }

    public function getSeoDescriptionDate(): ?\DateTimeInterface
    {
        return $this->seoDescriptionDate;
    }

    public function setSeoDescriptionDate(?\DateTimeInterface $seoDescriptionDate): self
    {
        $this->seoDescriptionDate = $seoDescriptionDate;

        return $this;
    }

    public function getSeoOgTitle(): ?string
    {
        return $this->seoOgTitle;
    }

    public function setSeoOgTitle(?string $seoOgTitle): self
    {
        $this->seoOgTitle = $seoOgTitle;

        return $this;
    }

    public function getSeoOgDescription(): ?string
    {
        return $this->seoOgDescription;
    }

    public function setSeoOgDescription(?string $seoOgDescription): self
    {
        $this->seoOgDescription = $seoOgDescription;

        return $this;
    }

    public function getSubAppText(): ?string
    {
        return $this->subAppText;
    }

    public function setSubAppText(?string $subAppText): self
    {
        $this->subAppText = $subAppText;

        return $this;
    }


}
