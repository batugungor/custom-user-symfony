<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblStartpageLinks
 *
 * @ORM\Table(name="tbl_startpage_links")
 * @ORM\Entity
 */
class TblStartpageLinks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_startpage_links_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblStartpageLinksId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_startpage_blocks_id", type="integer", nullable=false)
     */
    private $tblStartpageBlocksId;

    /**
     * @var string
     *
     * @ORM\Column(name="link_name", type="string", length=255, nullable=false)
     */
    private $linkName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_title", type="string", length=255, nullable=true)
     */
    private $linkTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_description", type="text", length=65535, nullable=true)
     */
    private $linkDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_image", type="string", length=250, nullable=true)
     */
    private $linkImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_image_old", type="string", length=250, nullable=true)
     */
    private $linkImageOld;

    /**
     * @var string
     *
     * @ORM\Column(name="link_link", type="string", length=255, nullable=false)
     */
    private $linkLink;

    /**
     * @var bool
     *
     * @ORM\Column(name="link_slide_out", type="boolean", nullable=false, options={"default"="1"})
     */
    private $linkSlideOut = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="link_order", type="boolean", nullable=false, options={"default"="1"})
     */
    private $linkOrder = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="link_iframe", type="boolean", nullable=false, options={"default"="1"})
     */
    private $linkIframe = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="link_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $linkActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=255, nullable=true)
     */
    private $seoUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_keywords", type="string", length=200, nullable=true)
     */
    private $seoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_description", type="string", length=200, nullable=true)
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

    public function getTblStartpageLinksId(): ?int
    {
        return $this->tblStartpageLinksId;
    }

    public function getTblStartpageBlocksId(): ?int
    {
        return $this->tblStartpageBlocksId;
    }

    public function setTblStartpageBlocksId(int $tblStartpageBlocksId): self
    {
        $this->tblStartpageBlocksId = $tblStartpageBlocksId;

        return $this;
    }

    public function getLinkName(): ?string
    {
        return $this->linkName;
    }

    public function setLinkName(string $linkName): self
    {
        $this->linkName = $linkName;

        return $this;
    }

    public function getLinkTitle(): ?string
    {
        return $this->linkTitle;
    }

    public function setLinkTitle(?string $linkTitle): self
    {
        $this->linkTitle = $linkTitle;

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

    public function getLinkImage(): ?string
    {
        return $this->linkImage;
    }

    public function setLinkImage(?string $linkImage): self
    {
        $this->linkImage = $linkImage;

        return $this;
    }

    public function getLinkImageOld(): ?string
    {
        return $this->linkImageOld;
    }

    public function setLinkImageOld(?string $linkImageOld): self
    {
        $this->linkImageOld = $linkImageOld;

        return $this;
    }

    public function getLinkLink(): ?string
    {
        return $this->linkLink;
    }

    public function setLinkLink(string $linkLink): self
    {
        $this->linkLink = $linkLink;

        return $this;
    }

    public function getLinkSlideOut(): ?bool
    {
        return $this->linkSlideOut;
    }

    public function setLinkSlideOut(bool $linkSlideOut): self
    {
        $this->linkSlideOut = $linkSlideOut;

        return $this;
    }

    public function getLinkOrder(): ?bool
    {
        return $this->linkOrder;
    }

    public function setLinkOrder(bool $linkOrder): self
    {
        $this->linkOrder = $linkOrder;

        return $this;
    }

    public function getLinkIframe(): ?bool
    {
        return $this->linkIframe;
    }

    public function setLinkIframe(bool $linkIframe): self
    {
        $this->linkIframe = $linkIframe;

        return $this;
    }

    public function getLinkActive(): ?bool
    {
        return $this->linkActive;
    }

    public function setLinkActive(bool $linkActive): self
    {
        $this->linkActive = $linkActive;

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


}
