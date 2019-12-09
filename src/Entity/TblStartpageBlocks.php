<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblStartpageBlocks
 *
 * @ORM\Table(name="tbl_startpage_blocks")
 * @ORM\Entity
 */
class TblStartpageBlocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_startpage_blocks_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblStartpageBlocksId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_startpage_id", type="integer", nullable=false)
     */
    private $tblStartpageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_menus_id", type="integer", nullable=true)
     */
    private $tblSystemMenusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_sub_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatSubId;

    /**
     * @var string
     *
     * @ORM\Column(name="block_name", type="string", length=255, nullable=false)
     */
    private $blockName;

    /**
     * @var bool
     *
     * @ORM\Column(name="block_name_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockNameShow = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_link", type="string", length=255, nullable=true)
     */
    private $blockLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_description", type="text", length=65535, nullable=true)
     */
    private $blockDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_image", type="string", length=255, nullable=true)
     */
    private $blockImage;

    /**
     * @var bool
     *
     * @ORM\Column(name="block_image_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockImageShow = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_column", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockColumn = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_order", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockOrder = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_social_media", type="boolean", nullable=false)
     */
    private $blockSocialMedia = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_facebook", type="boolean", nullable=false)
     */
    private $blockFacebook = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_twitter", type="boolean", nullable=false)
     */
    private $blockTwitter = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_linkedin", type="boolean", nullable=false)
     */
    private $blockLinkedin = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_googleplus", type="boolean", nullable=false)
     */
    private $blockGoogleplus = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_youtube", type="boolean", nullable=false)
     */
    private $blockYoutube = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_link_external", type="boolean", nullable=false)
     */
    private $blockLinkExternal = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=250, nullable=true)
     */
    private $seoUrl;

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
     * @ORM\Column(name="seo_keywords", type="string", length=250, nullable=true)
     */
    private $seoKeywords;

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

    public function getTblStartpageBlocksId(): ?int
    {
        return $this->tblStartpageBlocksId;
    }

    public function getTblStartpageId(): ?int
    {
        return $this->tblStartpageId;
    }

    public function setTblStartpageId(int $tblStartpageId): self
    {
        $this->tblStartpageId = $tblStartpageId;

        return $this;
    }

    public function getTblSystemMenusId(): ?int
    {
        return $this->tblSystemMenusId;
    }

    public function setTblSystemMenusId(?int $tblSystemMenusId): self
    {
        $this->tblSystemMenusId = $tblSystemMenusId;

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

    public function getTblCompaniesCatSubId(): ?int
    {
        return $this->tblCompaniesCatSubId;
    }

    public function setTblCompaniesCatSubId(?int $tblCompaniesCatSubId): self
    {
        $this->tblCompaniesCatSubId = $tblCompaniesCatSubId;

        return $this;
    }

    public function getBlockName(): ?string
    {
        return $this->blockName;
    }

    public function setBlockName(string $blockName): self
    {
        $this->blockName = $blockName;

        return $this;
    }

    public function getBlockNameShow(): ?bool
    {
        return $this->blockNameShow;
    }

    public function setBlockNameShow(bool $blockNameShow): self
    {
        $this->blockNameShow = $blockNameShow;

        return $this;
    }

    public function getBlockLink(): ?string
    {
        return $this->blockLink;
    }

    public function setBlockLink(?string $blockLink): self
    {
        $this->blockLink = $blockLink;

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

    public function getBlockImage(): ?string
    {
        return $this->blockImage;
    }

    public function setBlockImage(?string $blockImage): self
    {
        $this->blockImage = $blockImage;

        return $this;
    }

    public function getBlockImageShow(): ?bool
    {
        return $this->blockImageShow;
    }

    public function setBlockImageShow(bool $blockImageShow): self
    {
        $this->blockImageShow = $blockImageShow;

        return $this;
    }

    public function getBlockColumn(): ?bool
    {
        return $this->blockColumn;
    }

    public function setBlockColumn(bool $blockColumn): self
    {
        $this->blockColumn = $blockColumn;

        return $this;
    }

    public function getBlockOrder(): ?bool
    {
        return $this->blockOrder;
    }

    public function setBlockOrder(bool $blockOrder): self
    {
        $this->blockOrder = $blockOrder;

        return $this;
    }

    public function getBlockActive(): ?bool
    {
        return $this->blockActive;
    }

    public function setBlockActive(bool $blockActive): self
    {
        $this->blockActive = $blockActive;

        return $this;
    }

    public function getBlockSocialMedia(): ?bool
    {
        return $this->blockSocialMedia;
    }

    public function setBlockSocialMedia(bool $blockSocialMedia): self
    {
        $this->blockSocialMedia = $blockSocialMedia;

        return $this;
    }

    public function getBlockFacebook(): ?bool
    {
        return $this->blockFacebook;
    }

    public function setBlockFacebook(bool $blockFacebook): self
    {
        $this->blockFacebook = $blockFacebook;

        return $this;
    }

    public function getBlockTwitter(): ?bool
    {
        return $this->blockTwitter;
    }

    public function setBlockTwitter(bool $blockTwitter): self
    {
        $this->blockTwitter = $blockTwitter;

        return $this;
    }

    public function getBlockLinkedin(): ?bool
    {
        return $this->blockLinkedin;
    }

    public function setBlockLinkedin(bool $blockLinkedin): self
    {
        $this->blockLinkedin = $blockLinkedin;

        return $this;
    }

    public function getBlockGoogleplus(): ?bool
    {
        return $this->blockGoogleplus;
    }

    public function setBlockGoogleplus(bool $blockGoogleplus): self
    {
        $this->blockGoogleplus = $blockGoogleplus;

        return $this;
    }

    public function getBlockYoutube(): ?bool
    {
        return $this->blockYoutube;
    }

    public function setBlockYoutube(bool $blockYoutube): self
    {
        $this->blockYoutube = $blockYoutube;

        return $this;
    }

    public function getBlockLinkExternal(): ?bool
    {
        return $this->blockLinkExternal;
    }

    public function setBlockLinkExternal(bool $blockLinkExternal): self
    {
        $this->blockLinkExternal = $blockLinkExternal;

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

    public function getSeoKeywords(): ?string
    {
        return $this->seoKeywords;
    }

    public function setSeoKeywords(?string $seoKeywords): self
    {
        $this->seoKeywords = $seoKeywords;

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
