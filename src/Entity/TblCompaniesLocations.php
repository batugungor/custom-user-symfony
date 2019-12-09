<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesLocations
 *
 * @ORM\Table(name="tbl_companies_locations")
 * @ORM\Entity
 */
class TblCompaniesLocations
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_locations_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesLocationsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tbl_system_countries_id", type="string", length=45, nullable=true)
     */
    private $tblSystemCountriesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_code", type="string", length=45, nullable=true)
     */
    private $locationCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_name", type="string", length=145, nullable=true)
     */
    private $locationName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_address", type="string", length=145, nullable=true)
     */
    private $locationAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_zipcode", type="string", length=20, nullable=true)
     */
    private $locationZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_city", type="string", length=255, nullable=true)
     */
    private $locationCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_province", type="string", length=255, nullable=true)
     */
    private $locationProvince;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_country", type="string", length=255, nullable=true)
     */
    private $locationCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_tel", type="string", length=250, nullable=true)
     */
    private $locationTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_mobile", type="string", length=250, nullable=true)
     */
    private $locationMobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_fax", type="string", length=250, nullable=true)
     */
    private $locationFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_email", type="string", length=255, nullable=true)
     */
    private $locationEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_website", type="string", length=255, nullable=true)
     */
    private $locationWebsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_lat", type="string", length=50, nullable=true)
     */
    private $locationLat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_long", type="string", length=50, nullable=true)
     */
    private $locationLong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_memo", type="text", length=65535, nullable=true)
     */
    private $locationMemo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_streetview_url", type="string", length=250, nullable=true)
     */
    private $locationStreetviewUrl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="location_show_google360", type="boolean", nullable=true, options={"default"="1"})
     */
    private $locationShowGoogle360 = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_google360_url", type="string", length=250, nullable=true)
     */
    private $locationGoogle360Url;

    /**
     * @var bool
     *
     * @ORM\Column(name="location_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $locationActive = '1';

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

    public function getTblCompaniesLocationsId(): ?int
    {
        return $this->tblCompaniesLocationsId;
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

    public function getTblSystemCountriesId(): ?string
    {
        return $this->tblSystemCountriesId;
    }

    public function setTblSystemCountriesId(?string $tblSystemCountriesId): self
    {
        $this->tblSystemCountriesId = $tblSystemCountriesId;

        return $this;
    }

    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    public function setLocationCode(?string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    public function getLocationName(): ?string
    {
        return $this->locationName;
    }

    public function setLocationName(?string $locationName): self
    {
        $this->locationName = $locationName;

        return $this;
    }

    public function getLocationAddress(): ?string
    {
        return $this->locationAddress;
    }

    public function setLocationAddress(?string $locationAddress): self
    {
        $this->locationAddress = $locationAddress;

        return $this;
    }

    public function getLocationZipcode(): ?string
    {
        return $this->locationZipcode;
    }

    public function setLocationZipcode(?string $locationZipcode): self
    {
        $this->locationZipcode = $locationZipcode;

        return $this;
    }

    public function getLocationCity(): ?string
    {
        return $this->locationCity;
    }

    public function setLocationCity(?string $locationCity): self
    {
        $this->locationCity = $locationCity;

        return $this;
    }

    public function getLocationProvince(): ?string
    {
        return $this->locationProvince;
    }

    public function setLocationProvince(?string $locationProvince): self
    {
        $this->locationProvince = $locationProvince;

        return $this;
    }

    public function getLocationCountry(): ?string
    {
        return $this->locationCountry;
    }

    public function setLocationCountry(?string $locationCountry): self
    {
        $this->locationCountry = $locationCountry;

        return $this;
    }

    public function getLocationTel(): ?string
    {
        return $this->locationTel;
    }

    public function setLocationTel(?string $locationTel): self
    {
        $this->locationTel = $locationTel;

        return $this;
    }

    public function getLocationMobile(): ?string
    {
        return $this->locationMobile;
    }

    public function setLocationMobile(?string $locationMobile): self
    {
        $this->locationMobile = $locationMobile;

        return $this;
    }

    public function getLocationFax(): ?string
    {
        return $this->locationFax;
    }

    public function setLocationFax(?string $locationFax): self
    {
        $this->locationFax = $locationFax;

        return $this;
    }

    public function getLocationEmail(): ?string
    {
        return $this->locationEmail;
    }

    public function setLocationEmail(?string $locationEmail): self
    {
        $this->locationEmail = $locationEmail;

        return $this;
    }

    public function getLocationWebsite(): ?string
    {
        return $this->locationWebsite;
    }

    public function setLocationWebsite(?string $locationWebsite): self
    {
        $this->locationWebsite = $locationWebsite;

        return $this;
    }

    public function getLocationLat(): ?string
    {
        return $this->locationLat;
    }

    public function setLocationLat(?string $locationLat): self
    {
        $this->locationLat = $locationLat;

        return $this;
    }

    public function getLocationLong(): ?string
    {
        return $this->locationLong;
    }

    public function setLocationLong(?string $locationLong): self
    {
        $this->locationLong = $locationLong;

        return $this;
    }

    public function getLocationMemo(): ?string
    {
        return $this->locationMemo;
    }

    public function setLocationMemo(?string $locationMemo): self
    {
        $this->locationMemo = $locationMemo;

        return $this;
    }

    public function getLocationStreetviewUrl(): ?string
    {
        return $this->locationStreetviewUrl;
    }

    public function setLocationStreetviewUrl(?string $locationStreetviewUrl): self
    {
        $this->locationStreetviewUrl = $locationStreetviewUrl;

        return $this;
    }

    public function getLocationShowGoogle360(): ?bool
    {
        return $this->locationShowGoogle360;
    }

    public function setLocationShowGoogle360(?bool $locationShowGoogle360): self
    {
        $this->locationShowGoogle360 = $locationShowGoogle360;

        return $this;
    }

    public function getLocationGoogle360Url(): ?string
    {
        return $this->locationGoogle360Url;
    }

    public function setLocationGoogle360Url(?string $locationGoogle360Url): self
    {
        $this->locationGoogle360Url = $locationGoogle360Url;

        return $this;
    }

    public function getLocationActive(): ?bool
    {
        return $this->locationActive;
    }

    public function setLocationActive(bool $locationActive): self
    {
        $this->locationActive = $locationActive;

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
