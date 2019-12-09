<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesStartpage
 *
 * @ORM\Table(name="tbl_companies_startpage")
 * @ORM\Entity
 */
class TblCompaniesStartpage
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_startpage_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesStartpageId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var string
     *
     * @ORM\Column(name="startpage_name", type="string", length=255, nullable=false)
     */
    private $startpageName;

    /**
     * @var bool
     *
     * @ORM\Column(name="startpage_columns", type="boolean", nullable=false, options={"default"="3"})
     */
    private $startpageColumns = '3';

    /**
     * @var string|null
     *
     * @ORM\Column(name="startpage_color_bg", type="string", length=10, nullable=true)
     */
    private $startpageColorBg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startpage_color_border", type="string", length=10, nullable=true)
     */
    private $startpageColorBorder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startpage_color_title", type="string", length=10, nullable=true)
     */
    private $startpageColorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startpage_color_title_bg", type="string", length=10, nullable=true)
     */
    private $startpageColorTitleBg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startpage_color_title_link", type="string", length=10, nullable=true)
     */
    private $startpageColorTitleLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startpage_color_title_link_hover", type="string", length=10, nullable=true)
     */
    private $startpageColorTitleLinkHover;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startpage_color_link", type="string", length=10, nullable=true)
     */
    private $startpageColorLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="startpage_color_link_hover", type="string", length=10, nullable=true)
     */
    private $startpageColorLinkHover;

    /**
     * @var bool
     *
     * @ORM\Column(name="startpage_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $startpageActive = '1';

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
     * @ORM\Column(name="seo_h1_title", type="string", length=250, nullable=true)
     */
    private $seoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_browser_title", type="string", length=250, nullable=true)
     */
    private $seoBrowserTitle;

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
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deleted_date", type="datetime", nullable=true)
     */
    private $deletedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deleted_ip", type="string", length=255, nullable=true)
     */
    private $deletedIp;

    public function getTblCompaniesStartpageId(): ?int
    {
        return $this->tblCompaniesStartpageId;
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

    public function getStartpageName(): ?string
    {
        return $this->startpageName;
    }

    public function setStartpageName(string $startpageName): self
    {
        $this->startpageName = $startpageName;

        return $this;
    }

    public function getStartpageColumns(): ?bool
    {
        return $this->startpageColumns;
    }

    public function setStartpageColumns(bool $startpageColumns): self
    {
        $this->startpageColumns = $startpageColumns;

        return $this;
    }

    public function getStartpageColorBg(): ?string
    {
        return $this->startpageColorBg;
    }

    public function setStartpageColorBg(?string $startpageColorBg): self
    {
        $this->startpageColorBg = $startpageColorBg;

        return $this;
    }

    public function getStartpageColorBorder(): ?string
    {
        return $this->startpageColorBorder;
    }

    public function setStartpageColorBorder(?string $startpageColorBorder): self
    {
        $this->startpageColorBorder = $startpageColorBorder;

        return $this;
    }

    public function getStartpageColorTitle(): ?string
    {
        return $this->startpageColorTitle;
    }

    public function setStartpageColorTitle(?string $startpageColorTitle): self
    {
        $this->startpageColorTitle = $startpageColorTitle;

        return $this;
    }

    public function getStartpageColorTitleBg(): ?string
    {
        return $this->startpageColorTitleBg;
    }

    public function setStartpageColorTitleBg(?string $startpageColorTitleBg): self
    {
        $this->startpageColorTitleBg = $startpageColorTitleBg;

        return $this;
    }

    public function getStartpageColorTitleLink(): ?string
    {
        return $this->startpageColorTitleLink;
    }

    public function setStartpageColorTitleLink(?string $startpageColorTitleLink): self
    {
        $this->startpageColorTitleLink = $startpageColorTitleLink;

        return $this;
    }

    public function getStartpageColorTitleLinkHover(): ?string
    {
        return $this->startpageColorTitleLinkHover;
    }

    public function setStartpageColorTitleLinkHover(?string $startpageColorTitleLinkHover): self
    {
        $this->startpageColorTitleLinkHover = $startpageColorTitleLinkHover;

        return $this;
    }

    public function getStartpageColorLink(): ?string
    {
        return $this->startpageColorLink;
    }

    public function setStartpageColorLink(?string $startpageColorLink): self
    {
        $this->startpageColorLink = $startpageColorLink;

        return $this;
    }

    public function getStartpageColorLinkHover(): ?string
    {
        return $this->startpageColorLinkHover;
    }

    public function setStartpageColorLinkHover(?string $startpageColorLinkHover): self
    {
        $this->startpageColorLinkHover = $startpageColorLinkHover;

        return $this;
    }

    public function getStartpageActive(): ?bool
    {
        return $this->startpageActive;
    }

    public function setStartpageActive(bool $startpageActive): self
    {
        $this->startpageActive = $startpageActive;

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

    public function getSeoH1Title(): ?string
    {
        return $this->seoH1Title;
    }

    public function setSeoH1Title(?string $seoH1Title): self
    {
        $this->seoH1Title = $seoH1Title;

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

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getDeletedDate(): ?\DateTimeInterface
    {
        return $this->deletedDate;
    }

    public function setDeletedDate(?\DateTimeInterface $deletedDate): self
    {
        $this->deletedDate = $deletedDate;

        return $this;
    }

    public function getDeletedIp(): ?string
    {
        return $this->deletedIp;
    }

    public function setDeletedIp(?string $deletedIp): self
    {
        $this->deletedIp = $deletedIp;

        return $this;
    }


}
