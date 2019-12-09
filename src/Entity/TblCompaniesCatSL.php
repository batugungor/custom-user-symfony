<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesCatSL
 *
 * @ORM\Table(name="tbl_companies_cat_s_l")
 * @ORM\Entity
 */
class TblCompaniesCatSL
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_s_l_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesCatSLId;

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
     * @ORM\Column(name="link_order", type="integer", nullable=false)
     */
    private $linkOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_text", type="text", length=65535, nullable=true)
     */
    private $linkText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_brand_title", type="string", length=250, nullable=true)
     */
    private $subBrandTitle;

    /**
     * @var bool
     *
     * @ORM\Column(name="sub_brand_extra_show", type="boolean", nullable=false)
     */
    private $subBrandExtraShow = '0';

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

    public function getTblCompaniesCatSLId(): ?int
    {
        return $this->tblCompaniesCatSLId;
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

    public function getLinkOrder(): ?int
    {
        return $this->linkOrder;
    }

    public function setLinkOrder(int $linkOrder): self
    {
        $this->linkOrder = $linkOrder;

        return $this;
    }

    public function getLinkText(): ?string
    {
        return $this->linkText;
    }

    public function setLinkText(?string $linkText): self
    {
        $this->linkText = $linkText;

        return $this;
    }

    public function getSubBrandTitle(): ?string
    {
        return $this->subBrandTitle;
    }

    public function setSubBrandTitle(?string $subBrandTitle): self
    {
        $this->subBrandTitle = $subBrandTitle;

        return $this;
    }

    public function getSubBrandExtraShow(): ?bool
    {
        return $this->subBrandExtraShow;
    }

    public function setSubBrandExtraShow(bool $subBrandExtraShow): self
    {
        $this->subBrandExtraShow = $subBrandExtraShow;

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


}
