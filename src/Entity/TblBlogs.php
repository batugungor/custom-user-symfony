<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBlogs
 *
 * @ORM\Table(name="tbl_blogs")
 * @ORM\Entity
 */
class TblBlogs
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_blogs_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblBlogsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_blogs_categories_id", type="integer", nullable=false)
     */
    private $tblBlogsCategoriesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_s_l_id", type="integer", nullable=true)
     */
    private $tblCompaniesSLId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_admins_id", type="integer", nullable=true)
     */
    private $tblSystemAdminsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=true)
     */
    private $tblCompaniesUsersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blog_image", type="string", length=250, nullable=true)
     */
    private $blogImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blog_name", type="string", length=250, nullable=true)
     */
    private $blogName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blog_city", type="string", length=250, nullable=true)
     */
    private $blogCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blog_email", type="string", length=250, nullable=true)
     */
    private $blogEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blog_title", type="string", length=255, nullable=true)
     */
    private $blogTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blog_content", type="text", length=65535, nullable=true)
     */
    private $blogContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blog_hashtag", type="string", length=100, nullable=true)
     */
    private $blogHashtag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blog_youtube_code", type="string", length=25, nullable=true)
     */
    private $blogYoutubeCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="blog_datetime", type="datetime", nullable=true)
     */
    private $blogDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="blog_datetime_until", type="datetime", nullable=true)
     */
    private $blogDatetimeUntil;

    /**
     * @var bool
     *
     * @ORM\Column(name="blog_visitors", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blogVisitors = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="blog_approved", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blogApproved = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="blog_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blogActive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="blog_views", type="integer", nullable=false)
     */
    private $blogViews = '0';

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
     * @var bool|null
     *
     * @ORM\Column(name="blog_sticky_app", type="boolean", nullable=true)
     */
    private $blogStickyApp = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="blog_sticky_website", type="boolean", nullable=true)
     */
    private $blogStickyWebsite = '0';

    public function getTblBlogsId(): ?int
    {
        return $this->tblBlogsId;
    }

    public function getTblBlogsCategoriesId(): ?int
    {
        return $this->tblBlogsCategoriesId;
    }

    public function setTblBlogsCategoriesId(int $tblBlogsCategoriesId): self
    {
        $this->tblBlogsCategoriesId = $tblBlogsCategoriesId;

        return $this;
    }

    public function getTblCompaniesSLId(): ?int
    {
        return $this->tblCompaniesSLId;
    }

    public function setTblCompaniesSLId(?int $tblCompaniesSLId): self
    {
        $this->tblCompaniesSLId = $tblCompaniesSLId;

        return $this;
    }

    public function getTblSystemAdminsId(): ?int
    {
        return $this->tblSystemAdminsId;
    }

    public function setTblSystemAdminsId(?int $tblSystemAdminsId): self
    {
        $this->tblSystemAdminsId = $tblSystemAdminsId;

        return $this;
    }

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(?int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getTblCompaniesUsersId(): ?int
    {
        return $this->tblCompaniesUsersId;
    }

    public function setTblCompaniesUsersId(?int $tblCompaniesUsersId): self
    {
        $this->tblCompaniesUsersId = $tblCompaniesUsersId;

        return $this;
    }

    public function getBlogImage(): ?string
    {
        return $this->blogImage;
    }

    public function setBlogImage(?string $blogImage): self
    {
        $this->blogImage = $blogImage;

        return $this;
    }

    public function getBlogName(): ?string
    {
        return $this->blogName;
    }

    public function setBlogName(?string $blogName): self
    {
        $this->blogName = $blogName;

        return $this;
    }

    public function getBlogCity(): ?string
    {
        return $this->blogCity;
    }

    public function setBlogCity(?string $blogCity): self
    {
        $this->blogCity = $blogCity;

        return $this;
    }

    public function getBlogEmail(): ?string
    {
        return $this->blogEmail;
    }

    public function setBlogEmail(?string $blogEmail): self
    {
        $this->blogEmail = $blogEmail;

        return $this;
    }

    public function getBlogTitle(): ?string
    {
        return $this->blogTitle;
    }

    public function setBlogTitle(?string $blogTitle): self
    {
        $this->blogTitle = $blogTitle;

        return $this;
    }

    public function getBlogContent(): ?string
    {
        return $this->blogContent;
    }

    public function setBlogContent(?string $blogContent): self
    {
        $this->blogContent = $blogContent;

        return $this;
    }

    public function getBlogHashtag(): ?string
    {
        return $this->blogHashtag;
    }

    public function setBlogHashtag(?string $blogHashtag): self
    {
        $this->blogHashtag = $blogHashtag;

        return $this;
    }

    public function getBlogYoutubeCode(): ?string
    {
        return $this->blogYoutubeCode;
    }

    public function setBlogYoutubeCode(?string $blogYoutubeCode): self
    {
        $this->blogYoutubeCode = $blogYoutubeCode;

        return $this;
    }

    public function getBlogDatetime(): ?\DateTimeInterface
    {
        return $this->blogDatetime;
    }

    public function setBlogDatetime(?\DateTimeInterface $blogDatetime): self
    {
        $this->blogDatetime = $blogDatetime;

        return $this;
    }

    public function getBlogDatetimeUntil(): ?\DateTimeInterface
    {
        return $this->blogDatetimeUntil;
    }

    public function setBlogDatetimeUntil(?\DateTimeInterface $blogDatetimeUntil): self
    {
        $this->blogDatetimeUntil = $blogDatetimeUntil;

        return $this;
    }

    public function getBlogVisitors(): ?bool
    {
        return $this->blogVisitors;
    }

    public function setBlogVisitors(bool $blogVisitors): self
    {
        $this->blogVisitors = $blogVisitors;

        return $this;
    }

    public function getBlogApproved(): ?bool
    {
        return $this->blogApproved;
    }

    public function setBlogApproved(bool $blogApproved): self
    {
        $this->blogApproved = $blogApproved;

        return $this;
    }

    public function getBlogActive(): ?bool
    {
        return $this->blogActive;
    }

    public function setBlogActive(bool $blogActive): self
    {
        $this->blogActive = $blogActive;

        return $this;
    }

    public function getBlogViews(): ?int
    {
        return $this->blogViews;
    }

    public function setBlogViews(int $blogViews): self
    {
        $this->blogViews = $blogViews;

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

    public function getBlogStickyApp(): ?bool
    {
        return $this->blogStickyApp;
    }

    public function setBlogStickyApp(?bool $blogStickyApp): self
    {
        $this->blogStickyApp = $blogStickyApp;

        return $this;
    }

    public function getBlogStickyWebsite(): ?bool
    {
        return $this->blogStickyWebsite;
    }

    public function setBlogStickyWebsite(?bool $blogStickyWebsite): self
    {
        $this->blogStickyWebsite = $blogStickyWebsite;

        return $this;
    }


}
