<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesPages
 *
 * @ORM\Table(name="tbl_companies_pages")
 * @ORM\Entity
 */
class TblCompaniesPages
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_pages_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesPagesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="page_title", type="string", length=200, nullable=true)
     */
    private $pageTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="page_content", type="text", length=65535, nullable=true)
     */
    private $pageContent;

    /**
     * @var bool
     *
     * @ORM\Column(name="page_insurance", type="boolean", nullable=false)
     */
    private $pageInsurance = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="page_vacancy", type="boolean", nullable=false)
     */
    private $pageVacancy = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="page_title_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $pageTitleShow = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="page_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $pageActive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="page_order", type="integer", nullable=false)
     */
    private $pageOrder;

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

    public function getTblCompaniesPagesId(): ?int
    {
        return $this->tblCompaniesPagesId;
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

    public function getPageTitle(): ?string
    {
        return $this->pageTitle;
    }

    public function setPageTitle(?string $pageTitle): self
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    public function getPageContent(): ?string
    {
        return $this->pageContent;
    }

    public function setPageContent(?string $pageContent): self
    {
        $this->pageContent = $pageContent;

        return $this;
    }

    public function getPageInsurance(): ?bool
    {
        return $this->pageInsurance;
    }

    public function setPageInsurance(bool $pageInsurance): self
    {
        $this->pageInsurance = $pageInsurance;

        return $this;
    }

    public function getPageVacancy(): ?bool
    {
        return $this->pageVacancy;
    }

    public function setPageVacancy(bool $pageVacancy): self
    {
        $this->pageVacancy = $pageVacancy;

        return $this;
    }

    public function getPageTitleShow(): ?bool
    {
        return $this->pageTitleShow;
    }

    public function setPageTitleShow(bool $pageTitleShow): self
    {
        $this->pageTitleShow = $pageTitleShow;

        return $this;
    }

    public function getPageActive(): ?bool
    {
        return $this->pageActive;
    }

    public function setPageActive(bool $pageActive): self
    {
        $this->pageActive = $pageActive;

        return $this;
    }

    public function getPageOrder(): ?int
    {
        return $this->pageOrder;
    }

    public function setPageOrder(int $pageOrder): self
    {
        $this->pageOrder = $pageOrder;

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
