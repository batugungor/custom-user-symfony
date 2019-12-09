<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemCompanies
 *
 * @ORM\Table(name="tbl_system_companies")
 * @ORM\Entity
 */
class TblSystemCompanies
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_companies_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_countries_id", type="integer", nullable=true)
     */
    private $tblSystemCountriesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_logo", type="string", length=255, nullable=true)
     */
    private $companyLogo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $companyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_address", type="string", length=255, nullable=true)
     */
    private $companyAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_zipcode", type="string", length=20, nullable=true)
     */
    private $companyZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_city", type="string", length=255, nullable=true)
     */
    private $companyCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_province", type="string", length=255, nullable=true)
     */
    private $companyProvince;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_country", type="string", length=255, nullable=true)
     */
    private $companyCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_tel", type="string", length=250, nullable=true)
     */
    private $companyTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_fax", type="string", length=250, nullable=true)
     */
    private $companyFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_email", type="string", length=255, nullable=true)
     */
    private $companyEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_email_vacancies", type="string", length=255, nullable=true)
     */
    private $companyEmailVacancies;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_email_invoice", type="string", length=255, nullable=true)
     */
    private $companyEmailInvoice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_website", type="string", length=255, nullable=true)
     */
    private $companyWebsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_cocnr", type="string", length=255, nullable=true)
     */
    private $companyCocnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_taxnr", type="string", length=255, nullable=true)
     */
    private $companyTaxnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_facebook", type="string", length=250, nullable=true)
     */
    private $companyFacebook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_twitter", type="string", length=100, nullable=true)
     */
    private $companyTwitter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_linkedin", type="string", length=250, nullable=true)
     */
    private $companyLinkedin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_googleplus", type="string", length=250, nullable=true)
     */
    private $companyGoogleplus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_youtube", type="string", length=250, nullable=true)
     */
    private $companyYoutube;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_blocked_message", type="text", length=65535, nullable=true)
     */
    private $companyBlockedMessage;

    /**
     * @var bool
     *
     * @ORM\Column(name="company_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $companyActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_lat", type="string", length=50, nullable=true)
     */
    private $companyLat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_long", type="string", length=50, nullable=true)
     */
    private $companyLong;

    public function getTblSystemCompaniesId(): ?int
    {
        return $this->tblSystemCompaniesId;
    }

    public function getTblSystemCountriesId(): ?int
    {
        return $this->tblSystemCountriesId;
    }

    public function setTblSystemCountriesId(?int $tblSystemCountriesId): self
    {
        $this->tblSystemCountriesId = $tblSystemCountriesId;

        return $this;
    }

    public function getCompanyLogo(): ?string
    {
        return $this->companyLogo;
    }

    public function setCompanyLogo(?string $companyLogo): self
    {
        $this->companyLogo = $companyLogo;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyAddress(): ?string
    {
        return $this->companyAddress;
    }

    public function setCompanyAddress(?string $companyAddress): self
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    public function getCompanyZipcode(): ?string
    {
        return $this->companyZipcode;
    }

    public function setCompanyZipcode(?string $companyZipcode): self
    {
        $this->companyZipcode = $companyZipcode;

        return $this;
    }

    public function getCompanyCity(): ?string
    {
        return $this->companyCity;
    }

    public function setCompanyCity(?string $companyCity): self
    {
        $this->companyCity = $companyCity;

        return $this;
    }

    public function getCompanyProvince(): ?string
    {
        return $this->companyProvince;
    }

    public function setCompanyProvince(?string $companyProvince): self
    {
        $this->companyProvince = $companyProvince;

        return $this;
    }

    public function getCompanyCountry(): ?string
    {
        return $this->companyCountry;
    }

    public function setCompanyCountry(?string $companyCountry): self
    {
        $this->companyCountry = $companyCountry;

        return $this;
    }

    public function getCompanyTel(): ?string
    {
        return $this->companyTel;
    }

    public function setCompanyTel(?string $companyTel): self
    {
        $this->companyTel = $companyTel;

        return $this;
    }

    public function getCompanyFax(): ?string
    {
        return $this->companyFax;
    }

    public function setCompanyFax(?string $companyFax): self
    {
        $this->companyFax = $companyFax;

        return $this;
    }

    public function getCompanyEmail(): ?string
    {
        return $this->companyEmail;
    }

    public function setCompanyEmail(?string $companyEmail): self
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    public function getCompanyEmailVacancies(): ?string
    {
        return $this->companyEmailVacancies;
    }

    public function setCompanyEmailVacancies(?string $companyEmailVacancies): self
    {
        $this->companyEmailVacancies = $companyEmailVacancies;

        return $this;
    }

    public function getCompanyEmailInvoice(): ?string
    {
        return $this->companyEmailInvoice;
    }

    public function setCompanyEmailInvoice(?string $companyEmailInvoice): self
    {
        $this->companyEmailInvoice = $companyEmailInvoice;

        return $this;
    }

    public function getCompanyWebsite(): ?string
    {
        return $this->companyWebsite;
    }

    public function setCompanyWebsite(?string $companyWebsite): self
    {
        $this->companyWebsite = $companyWebsite;

        return $this;
    }

    public function getCompanyCocnr(): ?string
    {
        return $this->companyCocnr;
    }

    public function setCompanyCocnr(?string $companyCocnr): self
    {
        $this->companyCocnr = $companyCocnr;

        return $this;
    }

    public function getCompanyTaxnr(): ?string
    {
        return $this->companyTaxnr;
    }

    public function setCompanyTaxnr(?string $companyTaxnr): self
    {
        $this->companyTaxnr = $companyTaxnr;

        return $this;
    }

    public function getCompanyFacebook(): ?string
    {
        return $this->companyFacebook;
    }

    public function setCompanyFacebook(?string $companyFacebook): self
    {
        $this->companyFacebook = $companyFacebook;

        return $this;
    }

    public function getCompanyTwitter(): ?string
    {
        return $this->companyTwitter;
    }

    public function setCompanyTwitter(?string $companyTwitter): self
    {
        $this->companyTwitter = $companyTwitter;

        return $this;
    }

    public function getCompanyLinkedin(): ?string
    {
        return $this->companyLinkedin;
    }

    public function setCompanyLinkedin(?string $companyLinkedin): self
    {
        $this->companyLinkedin = $companyLinkedin;

        return $this;
    }

    public function getCompanyGoogleplus(): ?string
    {
        return $this->companyGoogleplus;
    }

    public function setCompanyGoogleplus(?string $companyGoogleplus): self
    {
        $this->companyGoogleplus = $companyGoogleplus;

        return $this;
    }

    public function getCompanyYoutube(): ?string
    {
        return $this->companyYoutube;
    }

    public function setCompanyYoutube(?string $companyYoutube): self
    {
        $this->companyYoutube = $companyYoutube;

        return $this;
    }

    public function getCompanyBlockedMessage(): ?string
    {
        return $this->companyBlockedMessage;
    }

    public function setCompanyBlockedMessage(?string $companyBlockedMessage): self
    {
        $this->companyBlockedMessage = $companyBlockedMessage;

        return $this;
    }

    public function getCompanyActive(): ?bool
    {
        return $this->companyActive;
    }

    public function setCompanyActive(bool $companyActive): self
    {
        $this->companyActive = $companyActive;

        return $this;
    }

    public function getCompanyLat(): ?string
    {
        return $this->companyLat;
    }

    public function setCompanyLat(?string $companyLat): self
    {
        $this->companyLat = $companyLat;

        return $this;
    }

    public function getCompanyLong(): ?string
    {
        return $this->companyLong;
    }

    public function setCompanyLong(?string $companyLong): self
    {
        $this->companyLong = $companyLong;

        return $this;
    }


}
