<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesCat
 *
 * @ORM\Table(name="tbl_companies_cat")
 * @ORM\Entity
 */
class TblCompaniesCat
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesCatId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_admin_color", type="string", length=45, nullable=true)
     */
    private $categoryAdminColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_name", type="string", length=255, nullable=true)
     */
    private $categoryName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_collaborations_text", type="string", length=250, nullable=true)
     */
    private $categoryCollaborationsText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_brand_title", type="string", length=250, nullable=true)
     */
    private $categoryBrandTitle;

    /**
     * @var bool
     *
     * @ORM\Column(name="category_show_search", type="boolean", nullable=false, options={"default"="1"})
     */
    private $categoryShowSearch = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_active", type="boolean", nullable=false)
     */
    private $categoryActive = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="category_order", type="integer", nullable=false)
     */
    private $categoryOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_startpage", type="boolean", nullable=false)
     */
    private $categoryStartpage = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_visitors", type="boolean", nullable=false)
     */
    private $categoryVisitors = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_visitors_search", type="boolean", nullable=false)
     */
    private $categoryVisitorsSearch = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_indexing", type="boolean", nullable=false, options={"default"="1"})
     */
    private $categoryIndexing = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_seourl_address", type="boolean", nullable=false, options={"default"="1"})
     */
    private $categorySeourlAddress = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_standard_text", type="text", length=65535, nullable=true)
     */
    private $categoryStandardText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_seo_text", type="text", length=65535, nullable=true)
     */
    private $categorySeoText;

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
     * @var string|null
     *
     * @ORM\Column(name="seo_og_description", type="string", length=255, nullable=true)
     */
    private $seoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_og_title", type="string", length=255, nullable=true)
     */
    private $seoOgTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_seo_keywords", type="string", length=250, nullable=true)
     */
    private $subSeoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_seo_description", type="string", length=250, nullable=true)
     */
    private $subSeoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_seo_browser_title", type="string", length=250, nullable=true)
     */
    private $subSeoBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_seo_h1_title", type="string", length=250, nullable=true)
     */
    private $subSeoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_seo_anchor_title", type="string", length=250, nullable=true)
     */
    private $subSeoAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_seo_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $subSeoBreadcrumbTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_seo_og_description", type="string", length=255, nullable=true)
     */
    private $subSeoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_seo_og_title", type="string", length=255, nullable=true)
     */
    private $subSeoOgTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_seo_keywords", type="string", length=250, nullable=true)
     */
    private $brandSeoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_seo_description", type="string", length=250, nullable=true)
     */
    private $brandSeoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_seo_browser_title", type="string", length=250, nullable=true)
     */
    private $brandSeoBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_seo_h1_title", type="string", length=250, nullable=true)
     */
    private $brandSeoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_seo_anchor_title", type="string", length=250, nullable=true)
     */
    private $brandSeoAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_seo_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $brandSeoBreadcrumbTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_seo_og_description", type="string", length=255, nullable=true)
     */
    private $brandSeoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_seo_og_title", type="string", length=255, nullable=true)
     */
    private $brandSeoOgTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_seo_keywords", type="string", length=250, nullable=true)
     */
    private $compSeoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_seo_description", type="string", length=250, nullable=true)
     */
    private $compSeoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_seo_browser_title", type="string", length=250, nullable=true)
     */
    private $compSeoBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_seo_h1_title", type="string", length=250, nullable=true)
     */
    private $compSeoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_seo_anchor_title", type="string", length=250, nullable=true)
     */
    private $compSeoAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_seo_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $compSeoBreadcrumbTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_seo_og_description", type="string", length=255, nullable=true)
     */
    private $compSeoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_seo_og_title", type="string", length=255, nullable=true)
     */
    private $compSeoOgTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_sub_seo_keywords", type="string", length=250, nullable=true)
     */
    private $compSubSeoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_sub_seo_description", type="string", length=250, nullable=true)
     */
    private $compSubSeoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_sub_seo_browser_title", type="string", length=250, nullable=true)
     */
    private $compSubSeoBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_sub_seo_h1_title", type="string", length=250, nullable=true)
     */
    private $compSubSeoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_sub_seo_anchor_title", type="string", length=250, nullable=true)
     */
    private $compSubSeoAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_sub_seo_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $compSubSeoBreadcrumbTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_sub_seo_og_description", type="string", length=255, nullable=true)
     */
    private $compSubSeoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_sub_seo_og_title", type="string", length=255, nullable=true)
     */
    private $compSubSeoOgTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_brand_seo_keywords", type="string", length=250, nullable=true)
     */
    private $compBrandSeoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_brand_seo_description", type="string", length=250, nullable=true)
     */
    private $compBrandSeoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_brand_seo_browser_title", type="string", length=250, nullable=true)
     */
    private $compBrandSeoBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_brand_seo_h1_title", type="string", length=250, nullable=true)
     */
    private $compBrandSeoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_brand_seo_anchor_title", type="string", length=250, nullable=true)
     */
    private $compBrandSeoAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_brand_seo_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $compBrandSeoBreadcrumbTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_brand_seo_og_description", type="string", length=255, nullable=true)
     */
    private $compBrandSeoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_brand_seo_og_title", type="string", length=255, nullable=true)
     */
    private $compBrandSeoOgTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_page_seo_keywords", type="string", length=250, nullable=true)
     */
    private $compPageSeoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_page_seo_description", type="string", length=250, nullable=true)
     */
    private $compPageSeoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_page_seo_browser_title", type="string", length=250, nullable=true)
     */
    private $compPageSeoBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_page_seo_h1_title", type="string", length=250, nullable=true)
     */
    private $compPageSeoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_page_seo_anchor_title", type="string", length=250, nullable=true)
     */
    private $compPageSeoAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_page_seo_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $compPageSeoBreadcrumbTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_page_seo_og_description", type="string", length=255, nullable=true)
     */
    private $compPageSeoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comp_page_seo_og_title", type="string", length=255, nullable=true)
     */
    private $compPageSeoOgTitle;

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

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function getCategoryAdminColor(): ?string
    {
        return $this->categoryAdminColor;
    }

    public function setCategoryAdminColor(?string $categoryAdminColor): self
    {
        $this->categoryAdminColor = $categoryAdminColor;

        return $this;
    }

    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    public function setCategoryName(?string $categoryName): self
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    public function getCategoryCollaborationsText(): ?string
    {
        return $this->categoryCollaborationsText;
    }

    public function setCategoryCollaborationsText(?string $categoryCollaborationsText): self
    {
        $this->categoryCollaborationsText = $categoryCollaborationsText;

        return $this;
    }

    public function getCategoryBrandTitle(): ?string
    {
        return $this->categoryBrandTitle;
    }

    public function setCategoryBrandTitle(?string $categoryBrandTitle): self
    {
        $this->categoryBrandTitle = $categoryBrandTitle;

        return $this;
    }

    public function getCategoryShowSearch(): ?bool
    {
        return $this->categoryShowSearch;
    }

    public function setCategoryShowSearch(bool $categoryShowSearch): self
    {
        $this->categoryShowSearch = $categoryShowSearch;

        return $this;
    }

    public function getCategoryActive(): ?bool
    {
        return $this->categoryActive;
    }

    public function setCategoryActive(bool $categoryActive): self
    {
        $this->categoryActive = $categoryActive;

        return $this;
    }

    public function getCategoryOrder(): ?int
    {
        return $this->categoryOrder;
    }

    public function setCategoryOrder(int $categoryOrder): self
    {
        $this->categoryOrder = $categoryOrder;

        return $this;
    }

    public function getCategoryStartpage(): ?bool
    {
        return $this->categoryStartpage;
    }

    public function setCategoryStartpage(bool $categoryStartpage): self
    {
        $this->categoryStartpage = $categoryStartpage;

        return $this;
    }

    public function getCategoryVisitors(): ?bool
    {
        return $this->categoryVisitors;
    }

    public function setCategoryVisitors(bool $categoryVisitors): self
    {
        $this->categoryVisitors = $categoryVisitors;

        return $this;
    }

    public function getCategoryVisitorsSearch(): ?bool
    {
        return $this->categoryVisitorsSearch;
    }

    public function setCategoryVisitorsSearch(bool $categoryVisitorsSearch): self
    {
        $this->categoryVisitorsSearch = $categoryVisitorsSearch;

        return $this;
    }

    public function getCategoryIndexing(): ?bool
    {
        return $this->categoryIndexing;
    }

    public function setCategoryIndexing(bool $categoryIndexing): self
    {
        $this->categoryIndexing = $categoryIndexing;

        return $this;
    }

    public function getCategorySeourlAddress(): ?bool
    {
        return $this->categorySeourlAddress;
    }

    public function setCategorySeourlAddress(bool $categorySeourlAddress): self
    {
        $this->categorySeourlAddress = $categorySeourlAddress;

        return $this;
    }

    public function getCategoryStandardText(): ?string
    {
        return $this->categoryStandardText;
    }

    public function setCategoryStandardText(?string $categoryStandardText): self
    {
        $this->categoryStandardText = $categoryStandardText;

        return $this;
    }

    public function getCategorySeoText(): ?string
    {
        return $this->categorySeoText;
    }

    public function setCategorySeoText(?string $categorySeoText): self
    {
        $this->categorySeoText = $categorySeoText;

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

    public function getSeoOgDescription(): ?string
    {
        return $this->seoOgDescription;
    }

    public function setSeoOgDescription(?string $seoOgDescription): self
    {
        $this->seoOgDescription = $seoOgDescription;

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

    public function getSubSeoKeywords(): ?string
    {
        return $this->subSeoKeywords;
    }

    public function setSubSeoKeywords(?string $subSeoKeywords): self
    {
        $this->subSeoKeywords = $subSeoKeywords;

        return $this;
    }

    public function getSubSeoDescription(): ?string
    {
        return $this->subSeoDescription;
    }

    public function setSubSeoDescription(?string $subSeoDescription): self
    {
        $this->subSeoDescription = $subSeoDescription;

        return $this;
    }

    public function getSubSeoBrowserTitle(): ?string
    {
        return $this->subSeoBrowserTitle;
    }

    public function setSubSeoBrowserTitle(?string $subSeoBrowserTitle): self
    {
        $this->subSeoBrowserTitle = $subSeoBrowserTitle;

        return $this;
    }

    public function getSubSeoH1Title(): ?string
    {
        return $this->subSeoH1Title;
    }

    public function setSubSeoH1Title(?string $subSeoH1Title): self
    {
        $this->subSeoH1Title = $subSeoH1Title;

        return $this;
    }

    public function getSubSeoAnchorTitle(): ?string
    {
        return $this->subSeoAnchorTitle;
    }

    public function setSubSeoAnchorTitle(?string $subSeoAnchorTitle): self
    {
        $this->subSeoAnchorTitle = $subSeoAnchorTitle;

        return $this;
    }

    public function getSubSeoBreadcrumbTitle(): ?string
    {
        return $this->subSeoBreadcrumbTitle;
    }

    public function setSubSeoBreadcrumbTitle(?string $subSeoBreadcrumbTitle): self
    {
        $this->subSeoBreadcrumbTitle = $subSeoBreadcrumbTitle;

        return $this;
    }

    public function getSubSeoOgDescription(): ?string
    {
        return $this->subSeoOgDescription;
    }

    public function setSubSeoOgDescription(?string $subSeoOgDescription): self
    {
        $this->subSeoOgDescription = $subSeoOgDescription;

        return $this;
    }

    public function getSubSeoOgTitle(): ?string
    {
        return $this->subSeoOgTitle;
    }

    public function setSubSeoOgTitle(?string $subSeoOgTitle): self
    {
        $this->subSeoOgTitle = $subSeoOgTitle;

        return $this;
    }

    public function getBrandSeoKeywords(): ?string
    {
        return $this->brandSeoKeywords;
    }

    public function setBrandSeoKeywords(?string $brandSeoKeywords): self
    {
        $this->brandSeoKeywords = $brandSeoKeywords;

        return $this;
    }

    public function getBrandSeoDescription(): ?string
    {
        return $this->brandSeoDescription;
    }

    public function setBrandSeoDescription(?string $brandSeoDescription): self
    {
        $this->brandSeoDescription = $brandSeoDescription;

        return $this;
    }

    public function getBrandSeoBrowserTitle(): ?string
    {
        return $this->brandSeoBrowserTitle;
    }

    public function setBrandSeoBrowserTitle(?string $brandSeoBrowserTitle): self
    {
        $this->brandSeoBrowserTitle = $brandSeoBrowserTitle;

        return $this;
    }

    public function getBrandSeoH1Title(): ?string
    {
        return $this->brandSeoH1Title;
    }

    public function setBrandSeoH1Title(?string $brandSeoH1Title): self
    {
        $this->brandSeoH1Title = $brandSeoH1Title;

        return $this;
    }

    public function getBrandSeoAnchorTitle(): ?string
    {
        return $this->brandSeoAnchorTitle;
    }

    public function setBrandSeoAnchorTitle(?string $brandSeoAnchorTitle): self
    {
        $this->brandSeoAnchorTitle = $brandSeoAnchorTitle;

        return $this;
    }

    public function getBrandSeoBreadcrumbTitle(): ?string
    {
        return $this->brandSeoBreadcrumbTitle;
    }

    public function setBrandSeoBreadcrumbTitle(?string $brandSeoBreadcrumbTitle): self
    {
        $this->brandSeoBreadcrumbTitle = $brandSeoBreadcrumbTitle;

        return $this;
    }

    public function getBrandSeoOgDescription(): ?string
    {
        return $this->brandSeoOgDescription;
    }

    public function setBrandSeoOgDescription(?string $brandSeoOgDescription): self
    {
        $this->brandSeoOgDescription = $brandSeoOgDescription;

        return $this;
    }

    public function getBrandSeoOgTitle(): ?string
    {
        return $this->brandSeoOgTitle;
    }

    public function setBrandSeoOgTitle(?string $brandSeoOgTitle): self
    {
        $this->brandSeoOgTitle = $brandSeoOgTitle;

        return $this;
    }

    public function getCompSeoKeywords(): ?string
    {
        return $this->compSeoKeywords;
    }

    public function setCompSeoKeywords(?string $compSeoKeywords): self
    {
        $this->compSeoKeywords = $compSeoKeywords;

        return $this;
    }

    public function getCompSeoDescription(): ?string
    {
        return $this->compSeoDescription;
    }

    public function setCompSeoDescription(?string $compSeoDescription): self
    {
        $this->compSeoDescription = $compSeoDescription;

        return $this;
    }

    public function getCompSeoBrowserTitle(): ?string
    {
        return $this->compSeoBrowserTitle;
    }

    public function setCompSeoBrowserTitle(?string $compSeoBrowserTitle): self
    {
        $this->compSeoBrowserTitle = $compSeoBrowserTitle;

        return $this;
    }

    public function getCompSeoH1Title(): ?string
    {
        return $this->compSeoH1Title;
    }

    public function setCompSeoH1Title(?string $compSeoH1Title): self
    {
        $this->compSeoH1Title = $compSeoH1Title;

        return $this;
    }

    public function getCompSeoAnchorTitle(): ?string
    {
        return $this->compSeoAnchorTitle;
    }

    public function setCompSeoAnchorTitle(?string $compSeoAnchorTitle): self
    {
        $this->compSeoAnchorTitle = $compSeoAnchorTitle;

        return $this;
    }

    public function getCompSeoBreadcrumbTitle(): ?string
    {
        return $this->compSeoBreadcrumbTitle;
    }

    public function setCompSeoBreadcrumbTitle(?string $compSeoBreadcrumbTitle): self
    {
        $this->compSeoBreadcrumbTitle = $compSeoBreadcrumbTitle;

        return $this;
    }

    public function getCompSeoOgDescription(): ?string
    {
        return $this->compSeoOgDescription;
    }

    public function setCompSeoOgDescription(?string $compSeoOgDescription): self
    {
        $this->compSeoOgDescription = $compSeoOgDescription;

        return $this;
    }

    public function getCompSeoOgTitle(): ?string
    {
        return $this->compSeoOgTitle;
    }

    public function setCompSeoOgTitle(?string $compSeoOgTitle): self
    {
        $this->compSeoOgTitle = $compSeoOgTitle;

        return $this;
    }

    public function getCompSubSeoKeywords(): ?string
    {
        return $this->compSubSeoKeywords;
    }

    public function setCompSubSeoKeywords(?string $compSubSeoKeywords): self
    {
        $this->compSubSeoKeywords = $compSubSeoKeywords;

        return $this;
    }

    public function getCompSubSeoDescription(): ?string
    {
        return $this->compSubSeoDescription;
    }

    public function setCompSubSeoDescription(?string $compSubSeoDescription): self
    {
        $this->compSubSeoDescription = $compSubSeoDescription;

        return $this;
    }

    public function getCompSubSeoBrowserTitle(): ?string
    {
        return $this->compSubSeoBrowserTitle;
    }

    public function setCompSubSeoBrowserTitle(?string $compSubSeoBrowserTitle): self
    {
        $this->compSubSeoBrowserTitle = $compSubSeoBrowserTitle;

        return $this;
    }

    public function getCompSubSeoH1Title(): ?string
    {
        return $this->compSubSeoH1Title;
    }

    public function setCompSubSeoH1Title(?string $compSubSeoH1Title): self
    {
        $this->compSubSeoH1Title = $compSubSeoH1Title;

        return $this;
    }

    public function getCompSubSeoAnchorTitle(): ?string
    {
        return $this->compSubSeoAnchorTitle;
    }

    public function setCompSubSeoAnchorTitle(?string $compSubSeoAnchorTitle): self
    {
        $this->compSubSeoAnchorTitle = $compSubSeoAnchorTitle;

        return $this;
    }

    public function getCompSubSeoBreadcrumbTitle(): ?string
    {
        return $this->compSubSeoBreadcrumbTitle;
    }

    public function setCompSubSeoBreadcrumbTitle(?string $compSubSeoBreadcrumbTitle): self
    {
        $this->compSubSeoBreadcrumbTitle = $compSubSeoBreadcrumbTitle;

        return $this;
    }

    public function getCompSubSeoOgDescription(): ?string
    {
        return $this->compSubSeoOgDescription;
    }

    public function setCompSubSeoOgDescription(?string $compSubSeoOgDescription): self
    {
        $this->compSubSeoOgDescription = $compSubSeoOgDescription;

        return $this;
    }

    public function getCompSubSeoOgTitle(): ?string
    {
        return $this->compSubSeoOgTitle;
    }

    public function setCompSubSeoOgTitle(?string $compSubSeoOgTitle): self
    {
        $this->compSubSeoOgTitle = $compSubSeoOgTitle;

        return $this;
    }

    public function getCompBrandSeoKeywords(): ?string
    {
        return $this->compBrandSeoKeywords;
    }

    public function setCompBrandSeoKeywords(?string $compBrandSeoKeywords): self
    {
        $this->compBrandSeoKeywords = $compBrandSeoKeywords;

        return $this;
    }

    public function getCompBrandSeoDescription(): ?string
    {
        return $this->compBrandSeoDescription;
    }

    public function setCompBrandSeoDescription(?string $compBrandSeoDescription): self
    {
        $this->compBrandSeoDescription = $compBrandSeoDescription;

        return $this;
    }

    public function getCompBrandSeoBrowserTitle(): ?string
    {
        return $this->compBrandSeoBrowserTitle;
    }

    public function setCompBrandSeoBrowserTitle(?string $compBrandSeoBrowserTitle): self
    {
        $this->compBrandSeoBrowserTitle = $compBrandSeoBrowserTitle;

        return $this;
    }

    public function getCompBrandSeoH1Title(): ?string
    {
        return $this->compBrandSeoH1Title;
    }

    public function setCompBrandSeoH1Title(?string $compBrandSeoH1Title): self
    {
        $this->compBrandSeoH1Title = $compBrandSeoH1Title;

        return $this;
    }

    public function getCompBrandSeoAnchorTitle(): ?string
    {
        return $this->compBrandSeoAnchorTitle;
    }

    public function setCompBrandSeoAnchorTitle(?string $compBrandSeoAnchorTitle): self
    {
        $this->compBrandSeoAnchorTitle = $compBrandSeoAnchorTitle;

        return $this;
    }

    public function getCompBrandSeoBreadcrumbTitle(): ?string
    {
        return $this->compBrandSeoBreadcrumbTitle;
    }

    public function setCompBrandSeoBreadcrumbTitle(?string $compBrandSeoBreadcrumbTitle): self
    {
        $this->compBrandSeoBreadcrumbTitle = $compBrandSeoBreadcrumbTitle;

        return $this;
    }

    public function getCompBrandSeoOgDescription(): ?string
    {
        return $this->compBrandSeoOgDescription;
    }

    public function setCompBrandSeoOgDescription(?string $compBrandSeoOgDescription): self
    {
        $this->compBrandSeoOgDescription = $compBrandSeoOgDescription;

        return $this;
    }

    public function getCompBrandSeoOgTitle(): ?string
    {
        return $this->compBrandSeoOgTitle;
    }

    public function setCompBrandSeoOgTitle(?string $compBrandSeoOgTitle): self
    {
        $this->compBrandSeoOgTitle = $compBrandSeoOgTitle;

        return $this;
    }

    public function getCompPageSeoKeywords(): ?string
    {
        return $this->compPageSeoKeywords;
    }

    public function setCompPageSeoKeywords(?string $compPageSeoKeywords): self
    {
        $this->compPageSeoKeywords = $compPageSeoKeywords;

        return $this;
    }

    public function getCompPageSeoDescription(): ?string
    {
        return $this->compPageSeoDescription;
    }

    public function setCompPageSeoDescription(?string $compPageSeoDescription): self
    {
        $this->compPageSeoDescription = $compPageSeoDescription;

        return $this;
    }

    public function getCompPageSeoBrowserTitle(): ?string
    {
        return $this->compPageSeoBrowserTitle;
    }

    public function setCompPageSeoBrowserTitle(?string $compPageSeoBrowserTitle): self
    {
        $this->compPageSeoBrowserTitle = $compPageSeoBrowserTitle;

        return $this;
    }

    public function getCompPageSeoH1Title(): ?string
    {
        return $this->compPageSeoH1Title;
    }

    public function setCompPageSeoH1Title(?string $compPageSeoH1Title): self
    {
        $this->compPageSeoH1Title = $compPageSeoH1Title;

        return $this;
    }

    public function getCompPageSeoAnchorTitle(): ?string
    {
        return $this->compPageSeoAnchorTitle;
    }

    public function setCompPageSeoAnchorTitle(?string $compPageSeoAnchorTitle): self
    {
        $this->compPageSeoAnchorTitle = $compPageSeoAnchorTitle;

        return $this;
    }

    public function getCompPageSeoBreadcrumbTitle(): ?string
    {
        return $this->compPageSeoBreadcrumbTitle;
    }

    public function setCompPageSeoBreadcrumbTitle(?string $compPageSeoBreadcrumbTitle): self
    {
        $this->compPageSeoBreadcrumbTitle = $compPageSeoBreadcrumbTitle;

        return $this;
    }

    public function getCompPageSeoOgDescription(): ?string
    {
        return $this->compPageSeoOgDescription;
    }

    public function setCompPageSeoOgDescription(?string $compPageSeoOgDescription): self
    {
        $this->compPageSeoOgDescription = $compPageSeoOgDescription;

        return $this;
    }

    public function getCompPageSeoOgTitle(): ?string
    {
        return $this->compPageSeoOgTitle;
    }

    public function setCompPageSeoOgTitle(?string $compPageSeoOgTitle): self
    {
        $this->compPageSeoOgTitle = $compPageSeoOgTitle;

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


}
