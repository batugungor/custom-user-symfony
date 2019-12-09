<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBlogsCategories
 *
 * @ORM\Table(name="tbl_blogs_categories")
 * @ORM\Entity
 */
class TblBlogsCategories
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_blogs_categories_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblBlogsCategoriesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_blogs_categories_id", type="integer", nullable=true)
     */
    private $upperTblBlogsCategoriesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_name", type="string", length=250, nullable=true)
     */
    private $categoryName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_image", type="string", length=250, nullable=true)
     */
    private $categoryImage;

    /**
     * @var bool
     *
     * @ORM\Column(name="category_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $categoryActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_visitors", type="boolean", nullable=false, options={"default"="1"})
     */
    private $categoryVisitors = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="category_show_index", type="boolean", nullable=true, options={"default"="1"})
     */
    private $categoryShowIndex = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="category_allow_companies", type="boolean", nullable=true, options={"default"="1"})
     */
    private $categoryAllowCompanies = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="category_order", type="integer", nullable=false, options={"default"="1"})
     */
    private $categoryOrder = '1';

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

    public function getTblBlogsCategoriesId(): ?int
    {
        return $this->tblBlogsCategoriesId;
    }

    public function getUpperTblBlogsCategoriesId(): ?int
    {
        return $this->upperTblBlogsCategoriesId;
    }

    public function setUpperTblBlogsCategoriesId(?int $upperTblBlogsCategoriesId): self
    {
        $this->upperTblBlogsCategoriesId = $upperTblBlogsCategoriesId;

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

    public function getCategoryImage(): ?string
    {
        return $this->categoryImage;
    }

    public function setCategoryImage(?string $categoryImage): self
    {
        $this->categoryImage = $categoryImage;

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

    public function getCategoryVisitors(): ?bool
    {
        return $this->categoryVisitors;
    }

    public function setCategoryVisitors(bool $categoryVisitors): self
    {
        $this->categoryVisitors = $categoryVisitors;

        return $this;
    }

    public function getCategoryShowIndex(): ?bool
    {
        return $this->categoryShowIndex;
    }

    public function setCategoryShowIndex(?bool $categoryShowIndex): self
    {
        $this->categoryShowIndex = $categoryShowIndex;

        return $this;
    }

    public function getCategoryAllowCompanies(): ?bool
    {
        return $this->categoryAllowCompanies;
    }

    public function setCategoryAllowCompanies(?bool $categoryAllowCompanies): self
    {
        $this->categoryAllowCompanies = $categoryAllowCompanies;

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
