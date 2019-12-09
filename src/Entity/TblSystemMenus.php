<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemMenus
 *
 * @ORM\Table(name="tbl_system_menus")
 * @ORM\Entity
 */
class TblSystemMenus
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_menus_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemMenusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_system_menus_id", type="integer", nullable=true)
     */
    private $upperTblSystemMenusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_templates_id", type="integer", nullable=true)
     */
    private $tblSystemTemplatesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_templates_colorscheme_id", type="integer", nullable=true)
     */
    private $tblSystemTemplatesColorschemeId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_websites_id", type="integer", nullable=false)
     */
    private $tblSystemWebsitesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_modules_id", type="integer", nullable=true)
     */
    private $tblSystemModulesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_startpage_id", type="integer", nullable=true)
     */
    private $tblStartpageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="link_tbl_system_menus_id", type="integer", nullable=true)
     */
    private $linkTblSystemMenusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_name", type="string", length=255, nullable=true)
     */
    private $menuName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_icon", type="string", length=45, nullable=true)
     */
    private $menuIcon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_description", type="text", length=65535, nullable=true)
     */
    private $menuDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_url", type="string", length=255, nullable=true)
     */
    private $menuUrl;

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_new_window", type="boolean", nullable=false)
     */
    private $menuNewWindow = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="menu_order", type="integer", nullable=false, options={"default"="1"})
     */
    private $menuOrder = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_more", type="boolean", nullable=false)
     */
    private $menuMore = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_default", type="boolean", nullable=false)
     */
    private $menuDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_news", type="boolean", nullable=false)
     */
    private $menuNews = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_offers", type="boolean", nullable=false)
     */
    private $menuOffers = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $menuActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $menuShow = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_sp_sm", type="boolean", nullable=false, options={"default"="1"})
     */
    private $menuSpSm = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_listitem_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $menuListitemShow = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_listitem_url", type="string", length=200, nullable=true)
     */
    private $menuListitemUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_listitem_class", type="string", length=100, nullable=true)
     */
    private $menuListitemClass;

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_accordion", type="boolean", nullable=false)
     */
    private $menuAccordion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=255, nullable=true)
     */
    private $seoUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_keywords", type="string", length=255, nullable=true)
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

    /**
     * @var int
     *
     * @ORM\Column(name="seo_words", type="integer", nullable=false)
     */
    private $seoWords = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="menu_attention", type="boolean", nullable=true)
     */
    private $menuAttention = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="menu_attention_order", type="integer", nullable=true, options={"default"="1"})
     */
    private $menuAttentionOrder = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_attention_color", type="string", length=45, nullable=true)
     */
    private $menuAttentionColor;

    public function getTblSystemMenusId(): ?int
    {
        return $this->tblSystemMenusId;
    }

    public function getUpperTblSystemMenusId(): ?int
    {
        return $this->upperTblSystemMenusId;
    }

    public function setUpperTblSystemMenusId(?int $upperTblSystemMenusId): self
    {
        $this->upperTblSystemMenusId = $upperTblSystemMenusId;

        return $this;
    }

    public function getTblSystemTemplatesId(): ?int
    {
        return $this->tblSystemTemplatesId;
    }

    public function setTblSystemTemplatesId(?int $tblSystemTemplatesId): self
    {
        $this->tblSystemTemplatesId = $tblSystemTemplatesId;

        return $this;
    }

    public function getTblSystemTemplatesColorschemeId(): ?int
    {
        return $this->tblSystemTemplatesColorschemeId;
    }

    public function setTblSystemTemplatesColorschemeId(?int $tblSystemTemplatesColorschemeId): self
    {
        $this->tblSystemTemplatesColorschemeId = $tblSystemTemplatesColorschemeId;

        return $this;
    }

    public function getTblSystemWebsitesId(): ?int
    {
        return $this->tblSystemWebsitesId;
    }

    public function setTblSystemWebsitesId(int $tblSystemWebsitesId): self
    {
        $this->tblSystemWebsitesId = $tblSystemWebsitesId;

        return $this;
    }

    public function getTblSystemModulesId(): ?int
    {
        return $this->tblSystemModulesId;
    }

    public function setTblSystemModulesId(?int $tblSystemModulesId): self
    {
        $this->tblSystemModulesId = $tblSystemModulesId;

        return $this;
    }

    public function getTblStartpageId(): ?int
    {
        return $this->tblStartpageId;
    }

    public function setTblStartpageId(?int $tblStartpageId): self
    {
        $this->tblStartpageId = $tblStartpageId;

        return $this;
    }

    public function getLinkTblSystemMenusId(): ?int
    {
        return $this->linkTblSystemMenusId;
    }

    public function setLinkTblSystemMenusId(?int $linkTblSystemMenusId): self
    {
        $this->linkTblSystemMenusId = $linkTblSystemMenusId;

        return $this;
    }

    public function getMenuName(): ?string
    {
        return $this->menuName;
    }

    public function setMenuName(?string $menuName): self
    {
        $this->menuName = $menuName;

        return $this;
    }

    public function getMenuIcon(): ?string
    {
        return $this->menuIcon;
    }

    public function setMenuIcon(?string $menuIcon): self
    {
        $this->menuIcon = $menuIcon;

        return $this;
    }

    public function getMenuDescription(): ?string
    {
        return $this->menuDescription;
    }

    public function setMenuDescription(?string $menuDescription): self
    {
        $this->menuDescription = $menuDescription;

        return $this;
    }

    public function getMenuUrl(): ?string
    {
        return $this->menuUrl;
    }

    public function setMenuUrl(?string $menuUrl): self
    {
        $this->menuUrl = $menuUrl;

        return $this;
    }

    public function getMenuNewWindow(): ?bool
    {
        return $this->menuNewWindow;
    }

    public function setMenuNewWindow(bool $menuNewWindow): self
    {
        $this->menuNewWindow = $menuNewWindow;

        return $this;
    }

    public function getMenuOrder(): ?int
    {
        return $this->menuOrder;
    }

    public function setMenuOrder(int $menuOrder): self
    {
        $this->menuOrder = $menuOrder;

        return $this;
    }

    public function getMenuMore(): ?bool
    {
        return $this->menuMore;
    }

    public function setMenuMore(bool $menuMore): self
    {
        $this->menuMore = $menuMore;

        return $this;
    }

    public function getMenuDefault(): ?bool
    {
        return $this->menuDefault;
    }

    public function setMenuDefault(bool $menuDefault): self
    {
        $this->menuDefault = $menuDefault;

        return $this;
    }

    public function getMenuNews(): ?bool
    {
        return $this->menuNews;
    }

    public function setMenuNews(bool $menuNews): self
    {
        $this->menuNews = $menuNews;

        return $this;
    }

    public function getMenuOffers(): ?bool
    {
        return $this->menuOffers;
    }

    public function setMenuOffers(bool $menuOffers): self
    {
        $this->menuOffers = $menuOffers;

        return $this;
    }

    public function getMenuActive(): ?bool
    {
        return $this->menuActive;
    }

    public function setMenuActive(bool $menuActive): self
    {
        $this->menuActive = $menuActive;

        return $this;
    }

    public function getMenuShow(): ?bool
    {
        return $this->menuShow;
    }

    public function setMenuShow(bool $menuShow): self
    {
        $this->menuShow = $menuShow;

        return $this;
    }

    public function getMenuSpSm(): ?bool
    {
        return $this->menuSpSm;
    }

    public function setMenuSpSm(bool $menuSpSm): self
    {
        $this->menuSpSm = $menuSpSm;

        return $this;
    }

    public function getMenuListitemShow(): ?bool
    {
        return $this->menuListitemShow;
    }

    public function setMenuListitemShow(bool $menuListitemShow): self
    {
        $this->menuListitemShow = $menuListitemShow;

        return $this;
    }

    public function getMenuListitemUrl(): ?string
    {
        return $this->menuListitemUrl;
    }

    public function setMenuListitemUrl(?string $menuListitemUrl): self
    {
        $this->menuListitemUrl = $menuListitemUrl;

        return $this;
    }

    public function getMenuListitemClass(): ?string
    {
        return $this->menuListitemClass;
    }

    public function setMenuListitemClass(?string $menuListitemClass): self
    {
        $this->menuListitemClass = $menuListitemClass;

        return $this;
    }

    public function getMenuAccordion(): ?bool
    {
        return $this->menuAccordion;
    }

    public function setMenuAccordion(bool $menuAccordion): self
    {
        $this->menuAccordion = $menuAccordion;

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

    public function getSeoWords(): ?int
    {
        return $this->seoWords;
    }

    public function setSeoWords(int $seoWords): self
    {
        $this->seoWords = $seoWords;

        return $this;
    }

    public function getMenuAttention(): ?bool
    {
        return $this->menuAttention;
    }

    public function setMenuAttention(?bool $menuAttention): self
    {
        $this->menuAttention = $menuAttention;

        return $this;
    }

    public function getMenuAttentionOrder(): ?int
    {
        return $this->menuAttentionOrder;
    }

    public function setMenuAttentionOrder(?int $menuAttentionOrder): self
    {
        $this->menuAttentionOrder = $menuAttentionOrder;

        return $this;
    }

    public function getMenuAttentionColor(): ?string
    {
        return $this->menuAttentionColor;
    }

    public function setMenuAttentionColor(?string $menuAttentionColor): self
    {
        $this->menuAttentionColor = $menuAttentionColor;

        return $this;
    }


}
