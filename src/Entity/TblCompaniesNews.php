<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesNews
 *
 * @ORM\Table(name="tbl_companies_news")
 * @ORM\Entity
 */
class TblCompaniesNews
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_news_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesNewsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_news_tags_id", type="integer", nullable=false)
     */
    private $tblCompaniesNewsTagsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=false)
     */
    private $tblCompaniesUsersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_languages_id", type="integer", nullable=true)
     */
    private $tblSystemLanguagesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="news_name", type="string", length=255, nullable=true)
     */
    private $newsName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="news_title", type="string", length=255, nullable=true)
     */
    private $newsTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="news_smallcontent", type="text", length=65535, nullable=true)
     */
    private $newsSmallcontent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="news_content", type="text", length=65535, nullable=true)
     */
    private $newsContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="news_url", type="string", length=255, nullable=true)
     */
    private $newsUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="news_image", type="string", length=255, nullable=true)
     */
    private $newsImage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="news_date", type="date", nullable=true)
     */
    private $newsDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="news_date_until", type="date", nullable=true)
     */
    private $newsDateUntil;

    /**
     * @var bool
     *
     * @ORM\Column(name="news_visitors", type="boolean", nullable=false)
     */
    private $newsVisitors = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="news_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $newsActive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="news_views", type="integer", nullable=false)
     */
    private $newsViews;

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
     * @var int
     *
     * @ORM\Column(name="seo_words", type="integer", nullable=false)
     */
    private $seoWords = '0';

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

    public function getTblCompaniesNewsId(): ?int
    {
        return $this->tblCompaniesNewsId;
    }

    public function getTblCompaniesNewsTagsId(): ?int
    {
        return $this->tblCompaniesNewsTagsId;
    }

    public function setTblCompaniesNewsTagsId(int $tblCompaniesNewsTagsId): self
    {
        $this->tblCompaniesNewsTagsId = $tblCompaniesNewsTagsId;

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

    public function setTblCompaniesUsersId(int $tblCompaniesUsersId): self
    {
        $this->tblCompaniesUsersId = $tblCompaniesUsersId;

        return $this;
    }

    public function getTblSystemLanguagesId(): ?int
    {
        return $this->tblSystemLanguagesId;
    }

    public function setTblSystemLanguagesId(?int $tblSystemLanguagesId): self
    {
        $this->tblSystemLanguagesId = $tblSystemLanguagesId;

        return $this;
    }

    public function getNewsName(): ?string
    {
        return $this->newsName;
    }

    public function setNewsName(?string $newsName): self
    {
        $this->newsName = $newsName;

        return $this;
    }

    public function getNewsTitle(): ?string
    {
        return $this->newsTitle;
    }

    public function setNewsTitle(?string $newsTitle): self
    {
        $this->newsTitle = $newsTitle;

        return $this;
    }

    public function getNewsSmallcontent(): ?string
    {
        return $this->newsSmallcontent;
    }

    public function setNewsSmallcontent(?string $newsSmallcontent): self
    {
        $this->newsSmallcontent = $newsSmallcontent;

        return $this;
    }

    public function getNewsContent(): ?string
    {
        return $this->newsContent;
    }

    public function setNewsContent(?string $newsContent): self
    {
        $this->newsContent = $newsContent;

        return $this;
    }

    public function getNewsUrl(): ?string
    {
        return $this->newsUrl;
    }

    public function setNewsUrl(?string $newsUrl): self
    {
        $this->newsUrl = $newsUrl;

        return $this;
    }

    public function getNewsImage(): ?string
    {
        return $this->newsImage;
    }

    public function setNewsImage(?string $newsImage): self
    {
        $this->newsImage = $newsImage;

        return $this;
    }

    public function getNewsDate(): ?\DateTimeInterface
    {
        return $this->newsDate;
    }

    public function setNewsDate(?\DateTimeInterface $newsDate): self
    {
        $this->newsDate = $newsDate;

        return $this;
    }

    public function getNewsDateUntil(): ?\DateTimeInterface
    {
        return $this->newsDateUntil;
    }

    public function setNewsDateUntil(?\DateTimeInterface $newsDateUntil): self
    {
        $this->newsDateUntil = $newsDateUntil;

        return $this;
    }

    public function getNewsVisitors(): ?bool
    {
        return $this->newsVisitors;
    }

    public function setNewsVisitors(bool $newsVisitors): self
    {
        $this->newsVisitors = $newsVisitors;

        return $this;
    }

    public function getNewsActive(): ?bool
    {
        return $this->newsActive;
    }

    public function setNewsActive(bool $newsActive): self
    {
        $this->newsActive = $newsActive;

        return $this;
    }

    public function getNewsViews(): ?int
    {
        return $this->newsViews;
    }

    public function setNewsViews(int $newsViews): self
    {
        $this->newsViews = $newsViews;

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

    public function getSeoWords(): ?int
    {
        return $this->seoWords;
    }

    public function setSeoWords(int $seoWords): self
    {
        $this->seoWords = $seoWords;

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
