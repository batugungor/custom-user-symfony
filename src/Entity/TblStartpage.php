<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblStartpage
 *
 * @ORM\Table(name="tbl_startpage")
 * @ORM\Entity
 */
class TblStartpage
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_startpage_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblStartpageId;

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
     * @ORM\Column(name="block_keywords", type="string", length=250, nullable=true)
     */
    private $blockKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_description", type="string", length=250, nullable=true)
     */
    private $blockDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_browser_title", type="string", length=250, nullable=true)
     */
    private $blockBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_h1_title", type="string", length=250, nullable=true)
     */
    private $blockH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_anchor_title", type="string", length=250, nullable=true)
     */
    private $blockAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $blockBreadcrumbTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_keywords", type="string", length=250, nullable=true)
     */
    private $linkKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_description", type="string", length=250, nullable=true)
     */
    private $linkDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_browser_title", type="string", length=250, nullable=true)
     */
    private $linkBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_h1_title", type="string", length=250, nullable=true)
     */
    private $linkH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_anchor_title", type="string", length=250, nullable=true)
     */
    private $linkAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_breadcrumb_title", type="string", length=250, nullable=true)
     */
    private $linkBreadcrumbTitle;

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

    public function getTblStartpageId(): ?int
    {
        return $this->tblStartpageId;
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

    public function getBlockKeywords(): ?string
    {
        return $this->blockKeywords;
    }

    public function setBlockKeywords(?string $blockKeywords): self
    {
        $this->blockKeywords = $blockKeywords;

        return $this;
    }

    public function getBlockDescription(): ?string
    {
        return $this->blockDescription;
    }

    public function setBlockDescription(?string $blockDescription): self
    {
        $this->blockDescription = $blockDescription;

        return $this;
    }

    public function getBlockBrowserTitle(): ?string
    {
        return $this->blockBrowserTitle;
    }

    public function setBlockBrowserTitle(?string $blockBrowserTitle): self
    {
        $this->blockBrowserTitle = $blockBrowserTitle;

        return $this;
    }

    public function getBlockH1Title(): ?string
    {
        return $this->blockH1Title;
    }

    public function setBlockH1Title(?string $blockH1Title): self
    {
        $this->blockH1Title = $blockH1Title;

        return $this;
    }

    public function getBlockAnchorTitle(): ?string
    {
        return $this->blockAnchorTitle;
    }

    public function setBlockAnchorTitle(?string $blockAnchorTitle): self
    {
        $this->blockAnchorTitle = $blockAnchorTitle;

        return $this;
    }

    public function getBlockBreadcrumbTitle(): ?string
    {
        return $this->blockBreadcrumbTitle;
    }

    public function setBlockBreadcrumbTitle(?string $blockBreadcrumbTitle): self
    {
        $this->blockBreadcrumbTitle = $blockBreadcrumbTitle;

        return $this;
    }

    public function getLinkKeywords(): ?string
    {
        return $this->linkKeywords;
    }

    public function setLinkKeywords(?string $linkKeywords): self
    {
        $this->linkKeywords = $linkKeywords;

        return $this;
    }

    public function getLinkDescription(): ?string
    {
        return $this->linkDescription;
    }

    public function setLinkDescription(?string $linkDescription): self
    {
        $this->linkDescription = $linkDescription;

        return $this;
    }

    public function getLinkBrowserTitle(): ?string
    {
        return $this->linkBrowserTitle;
    }

    public function setLinkBrowserTitle(?string $linkBrowserTitle): self
    {
        $this->linkBrowserTitle = $linkBrowserTitle;

        return $this;
    }

    public function getLinkH1Title(): ?string
    {
        return $this->linkH1Title;
    }

    public function setLinkH1Title(?string $linkH1Title): self
    {
        $this->linkH1Title = $linkH1Title;

        return $this;
    }

    public function getLinkAnchorTitle(): ?string
    {
        return $this->linkAnchorTitle;
    }

    public function setLinkAnchorTitle(?string $linkAnchorTitle): self
    {
        $this->linkAnchorTitle = $linkAnchorTitle;

        return $this;
    }

    public function getLinkBreadcrumbTitle(): ?string
    {
        return $this->linkBreadcrumbTitle;
    }

    public function setLinkBreadcrumbTitle(?string $linkBreadcrumbTitle): self
    {
        $this->linkBreadcrumbTitle = $linkBreadcrumbTitle;

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
