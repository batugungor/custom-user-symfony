<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesOffers
 *
 * @ORM\Table(name="tbl_companies_offers")
 * @ORM\Entity
 */
class TblCompaniesOffers
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_offers_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesOffersId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_sub_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatSubId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=false)
     */
    private $tblCompaniesUsersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offer_teaser_image", type="string", length=250, nullable=true)
     */
    private $offerTeaserImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offer_teaser_description", type="string", length=300, nullable=true)
     */
    private $offerTeaserDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offer_title", type="string", length=250, nullable=true)
     */
    private $offerTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offer_description", type="text", length=65535, nullable=true)
     */
    private $offerDescription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="offer_date", type="datetime", nullable=true)
     */
    private $offerDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="offer_date_until", type="datetime", nullable=true)
     */
    private $offerDateUntil;

    /**
     * @var int
     *
     * @ORM\Column(name="offer_days", type="integer", nullable=false, options={"default"="30"})
     */
    private $offerDays = '30';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="offer_valid_until", type="datetime", nullable=true)
     */
    private $offerValidUntil;

    /**
     * @var int
     *
     * @ORM\Column(name="offer_amount", type="integer", nullable=false)
     */
    private $offerAmount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="offer_views", type="integer", nullable=false)
     */
    private $offerViews = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="offer_visitors", type="boolean", nullable=false, options={"default"="1"})
     */
    private $offerVisitors = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="offer_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $offerActive = '1';

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

    public function getTblCompaniesOffersId(): ?int
    {
        return $this->tblCompaniesOffersId;
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

    public function getTblCompaniesCatSubId(): ?int
    {
        return $this->tblCompaniesCatSubId;
    }

    public function setTblCompaniesCatSubId(?int $tblCompaniesCatSubId): self
    {
        $this->tblCompaniesCatSubId = $tblCompaniesCatSubId;

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

    public function getOfferTeaserImage(): ?string
    {
        return $this->offerTeaserImage;
    }

    public function setOfferTeaserImage(?string $offerTeaserImage): self
    {
        $this->offerTeaserImage = $offerTeaserImage;

        return $this;
    }

    public function getOfferTeaserDescription(): ?string
    {
        return $this->offerTeaserDescription;
    }

    public function setOfferTeaserDescription(?string $offerTeaserDescription): self
    {
        $this->offerTeaserDescription = $offerTeaserDescription;

        return $this;
    }

    public function getOfferTitle(): ?string
    {
        return $this->offerTitle;
    }

    public function setOfferTitle(?string $offerTitle): self
    {
        $this->offerTitle = $offerTitle;

        return $this;
    }

    public function getOfferDescription(): ?string
    {
        return $this->offerDescription;
    }

    public function setOfferDescription(?string $offerDescription): self
    {
        $this->offerDescription = $offerDescription;

        return $this;
    }

    public function getOfferDate(): ?\DateTimeInterface
    {
        return $this->offerDate;
    }

    public function setOfferDate(?\DateTimeInterface $offerDate): self
    {
        $this->offerDate = $offerDate;

        return $this;
    }

    public function getOfferDateUntil(): ?\DateTimeInterface
    {
        return $this->offerDateUntil;
    }

    public function setOfferDateUntil(?\DateTimeInterface $offerDateUntil): self
    {
        $this->offerDateUntil = $offerDateUntil;

        return $this;
    }

    public function getOfferDays(): ?int
    {
        return $this->offerDays;
    }

    public function setOfferDays(int $offerDays): self
    {
        $this->offerDays = $offerDays;

        return $this;
    }

    public function getOfferValidUntil(): ?\DateTimeInterface
    {
        return $this->offerValidUntil;
    }

    public function setOfferValidUntil(?\DateTimeInterface $offerValidUntil): self
    {
        $this->offerValidUntil = $offerValidUntil;

        return $this;
    }

    public function getOfferAmount(): ?int
    {
        return $this->offerAmount;
    }

    public function setOfferAmount(int $offerAmount): self
    {
        $this->offerAmount = $offerAmount;

        return $this;
    }

    public function getOfferViews(): ?int
    {
        return $this->offerViews;
    }

    public function setOfferViews(int $offerViews): self
    {
        $this->offerViews = $offerViews;

        return $this;
    }

    public function getOfferVisitors(): ?bool
    {
        return $this->offerVisitors;
    }

    public function setOfferVisitors(bool $offerVisitors): self
    {
        $this->offerVisitors = $offerVisitors;

        return $this;
    }

    public function getOfferActive(): ?bool
    {
        return $this->offerActive;
    }

    public function setOfferActive(bool $offerActive): self
    {
        $this->offerActive = $offerActive;

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


}
