<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompanies
 *
 * @ORM\Table(name="tbl_companies")
 * @ORM\Entity
 */
class TblCompanies
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=false)
     */
    private $tblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_companies_id", type="integer", nullable=true)
     */
    private $upperTblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_countries_id", type="integer", nullable=true)
     */
    private $tblSystemCountriesId;

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
     * @var bool
     *
     * @ORM\Column(name="company_classification", type="boolean", nullable=false)
     */
    private $companyClassification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_logo", type="string", length=255, nullable=true)
     */
    private $companyLogo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_logo_old", type="string", length=255, nullable=true)
     */
    private $companyLogoOld;

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
     * @ORM\Column(name="company_mobile", type="string", length=250, nullable=true)
     */
    private $companyMobile;

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
     * @ORM\Column(name="company_iban", type="string", length=50, nullable=true)
     */
    private $companyIban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_iban_name", type="string", length=100, nullable=true)
     */
    private $companyIbanName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_bic", type="string", length=45, nullable=true)
     */
    private $companyBic;

    /**
     * @var bool
     *
     * @ORM\Column(name="company_facebook_liked", type="boolean", nullable=false)
     */
    private $companyFacebookLiked = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_whatsapp", type="string", length=45, nullable=true)
     */
    private $companyWhatsapp;

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
     * @ORM\Column(name="company_pinterest", type="string", length=250, nullable=true)
     */
    private $companyPinterest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_instagram", type="string", length=250, nullable=true)
     */
    private $companyInstagram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_soundcloud", type="string", length=250, nullable=true)
     */
    private $companySoundcloud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_picasa", type="string", length=250, nullable=true)
     */
    private $companyPicasa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_flickr", type="string", length=250, nullable=true)
     */
    private $companyFlickr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_homepage", type="text", length=65535, nullable=true)
     */
    private $companyHomepage;

    /**
     * @var bool
     *
     * @ORM\Column(name="company_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $companyActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="company_approved", type="boolean", nullable=false)
     */
    private $companyApproved = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="company_newsletter", type="boolean", nullable=false, options={"default"="1"})
     */
    private $companyNewsletter = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_sepa", type="boolean", nullable=true)
     */
    private $companySepa = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="company_optitrade", type="boolean", nullable=false)
     */
    private $companyOptitrade = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="company_cvzo", type="boolean", nullable=false)
     */
    private $companyCvzo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="company_declare", type="boolean", nullable=false)
     */
    private $companyDeclare = '0';

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

    /**
     * @var bool
     *
     * @ORM\Column(name="company_free", type="boolean", nullable=false)
     */
    private $companyFree = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="company_free_until", type="datetime", nullable=true)
     */
    private $companyFreeUntil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_memo", type="text", length=65535, nullable=true)
     */
    private $companyMemo;

    /**
     * @var bool
     *
     * @ORM\Column(name="company_show_streetview", type="boolean", nullable=false, options={"default"="1"})
     */
    private $companyShowStreetview = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="blog_approved", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blogApproved = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="blog_guest", type="boolean", nullable=false)
     */
    private $blogGuest = '0';

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
     * @ORM\Column(name="company_bluebuster", type="boolean", nullable=true)
     */
    private $companyBluebuster = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_fields_sql", type="string", length=2500, nullable=true)
     */
    private $importFieldsSql;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_fields_excel", type="string", length=2500, nullable=true)
     */
    private $importFieldsExcel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_paypro_id", type="string", length=45, nullable=true)
     */
    private $companyPayproId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_sheet", type="string", length=45, nullable=true)
     */
    private $importSheet;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_show_contactform", type="boolean", nullable=true, options={"default"="1"})
     */
    private $companyShowContactform = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_streetview_url", type="string", length=250, nullable=true)
     */
    private $companyStreetviewUrl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_show_google360", type="boolean", nullable=true, options={"default"="1"})
     */
    private $companyShowGoogle360 = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_google360_url", type="string", length=250, nullable=true)
     */
    private $companyGoogle360Url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_brilonline_account", type="string", length=250, nullable=true)
     */
    private $companyBrilonlineAccount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_brilonline_morestores", type="boolean", nullable=true)
     */
    private $companyBrilonlineMorestores = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_jeunesse", type="string", length=150, nullable=true)
     */
    private $companyJeunesse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_oriflame", type="string", length=150, nullable=true)
     */
    private $companyOriflame;

    /**
     * @var int|null
     *
     * @ORM\Column(name="company_oriflame_maxpw", type="integer", nullable=true)
     */
    private $companyOriflameMaxpw;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_polls_emails", type="boolean", nullable=true, options={"default"="1"})
     */
    private $companyPollsEmails = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_discount", type="boolean", nullable=true)
     */
    private $companyDiscount = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_discount_text", type="string", length=150, nullable=true)
     */
    private $companyDiscountText;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="company_discount_until", type="datetime", nullable=true)
     */
    private $companyDiscountUntil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_appybee", type="string", length=32, nullable=true)
     */
    private $companyAppybee;

    /**
     * @var bool
     *
     * @ORM\Column(name="company_profile_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $companyProfileShow = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="company_profile_index", type="boolean", nullable=false, options={"default"="1"})
     */
    private $companyProfileIndex = '1';

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getUpperTblCompaniesId(): ?int
    {
        return $this->upperTblCompaniesId;
    }

    public function setUpperTblCompaniesId(?int $upperTblCompaniesId): self
    {
        $this->upperTblCompaniesId = $upperTblCompaniesId;

        return $this;
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

    public function getCompanyClassification(): ?bool
    {
        return $this->companyClassification;
    }

    public function setCompanyClassification(bool $companyClassification): self
    {
        $this->companyClassification = $companyClassification;

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

    public function getCompanyLogoOld(): ?string
    {
        return $this->companyLogoOld;
    }

    public function setCompanyLogoOld(?string $companyLogoOld): self
    {
        $this->companyLogoOld = $companyLogoOld;

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

    public function getCompanyMobile(): ?string
    {
        return $this->companyMobile;
    }

    public function setCompanyMobile(?string $companyMobile): self
    {
        $this->companyMobile = $companyMobile;

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

    public function getCompanyIban(): ?string
    {
        return $this->companyIban;
    }

    public function setCompanyIban(?string $companyIban): self
    {
        $this->companyIban = $companyIban;

        return $this;
    }

    public function getCompanyIbanName(): ?string
    {
        return $this->companyIbanName;
    }

    public function setCompanyIbanName(?string $companyIbanName): self
    {
        $this->companyIbanName = $companyIbanName;

        return $this;
    }

    public function getCompanyBic(): ?string
    {
        return $this->companyBic;
    }

    public function setCompanyBic(?string $companyBic): self
    {
        $this->companyBic = $companyBic;

        return $this;
    }

    public function getCompanyFacebookLiked(): ?bool
    {
        return $this->companyFacebookLiked;
    }

    public function setCompanyFacebookLiked(bool $companyFacebookLiked): self
    {
        $this->companyFacebookLiked = $companyFacebookLiked;

        return $this;
    }

    public function getCompanyWhatsapp(): ?string
    {
        return $this->companyWhatsapp;
    }

    public function setCompanyWhatsapp(?string $companyWhatsapp): self
    {
        $this->companyWhatsapp = $companyWhatsapp;

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

    public function getCompanyPinterest(): ?string
    {
        return $this->companyPinterest;
    }

    public function setCompanyPinterest(?string $companyPinterest): self
    {
        $this->companyPinterest = $companyPinterest;

        return $this;
    }

    public function getCompanyInstagram(): ?string
    {
        return $this->companyInstagram;
    }

    public function setCompanyInstagram(?string $companyInstagram): self
    {
        $this->companyInstagram = $companyInstagram;

        return $this;
    }

    public function getCompanySoundcloud(): ?string
    {
        return $this->companySoundcloud;
    }

    public function setCompanySoundcloud(?string $companySoundcloud): self
    {
        $this->companySoundcloud = $companySoundcloud;

        return $this;
    }

    public function getCompanyPicasa(): ?string
    {
        return $this->companyPicasa;
    }

    public function setCompanyPicasa(?string $companyPicasa): self
    {
        $this->companyPicasa = $companyPicasa;

        return $this;
    }

    public function getCompanyFlickr(): ?string
    {
        return $this->companyFlickr;
    }

    public function setCompanyFlickr(?string $companyFlickr): self
    {
        $this->companyFlickr = $companyFlickr;

        return $this;
    }

    public function getCompanyHomepage(): ?string
    {
        return $this->companyHomepage;
    }

    public function setCompanyHomepage(?string $companyHomepage): self
    {
        $this->companyHomepage = $companyHomepage;

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

    public function getCompanyApproved(): ?bool
    {
        return $this->companyApproved;
    }

    public function setCompanyApproved(bool $companyApproved): self
    {
        $this->companyApproved = $companyApproved;

        return $this;
    }

    public function getCompanyNewsletter(): ?bool
    {
        return $this->companyNewsletter;
    }

    public function setCompanyNewsletter(bool $companyNewsletter): self
    {
        $this->companyNewsletter = $companyNewsletter;

        return $this;
    }

    public function getCompanySepa(): ?bool
    {
        return $this->companySepa;
    }

    public function setCompanySepa(?bool $companySepa): self
    {
        $this->companySepa = $companySepa;

        return $this;
    }

    public function getCompanyOptitrade(): ?bool
    {
        return $this->companyOptitrade;
    }

    public function setCompanyOptitrade(bool $companyOptitrade): self
    {
        $this->companyOptitrade = $companyOptitrade;

        return $this;
    }

    public function getCompanyCvzo(): ?bool
    {
        return $this->companyCvzo;
    }

    public function setCompanyCvzo(bool $companyCvzo): self
    {
        $this->companyCvzo = $companyCvzo;

        return $this;
    }

    public function getCompanyDeclare(): ?bool
    {
        return $this->companyDeclare;
    }

    public function setCompanyDeclare(bool $companyDeclare): self
    {
        $this->companyDeclare = $companyDeclare;

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

    public function getCompanyFree(): ?bool
    {
        return $this->companyFree;
    }

    public function setCompanyFree(bool $companyFree): self
    {
        $this->companyFree = $companyFree;

        return $this;
    }

    public function getCompanyFreeUntil(): ?\DateTimeInterface
    {
        return $this->companyFreeUntil;
    }

    public function setCompanyFreeUntil(?\DateTimeInterface $companyFreeUntil): self
    {
        $this->companyFreeUntil = $companyFreeUntil;

        return $this;
    }

    public function getCompanyMemo(): ?string
    {
        return $this->companyMemo;
    }

    public function setCompanyMemo(?string $companyMemo): self
    {
        $this->companyMemo = $companyMemo;

        return $this;
    }

    public function getCompanyShowStreetview(): ?bool
    {
        return $this->companyShowStreetview;
    }

    public function setCompanyShowStreetview(bool $companyShowStreetview): self
    {
        $this->companyShowStreetview = $companyShowStreetview;

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

    public function getBlogGuest(): ?bool
    {
        return $this->blogGuest;
    }

    public function setBlogGuest(bool $blogGuest): self
    {
        $this->blogGuest = $blogGuest;

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

    public function getCompanyBluebuster(): ?bool
    {
        return $this->companyBluebuster;
    }

    public function setCompanyBluebuster(?bool $companyBluebuster): self
    {
        $this->companyBluebuster = $companyBluebuster;

        return $this;
    }

    public function getImportFieldsSql(): ?string
    {
        return $this->importFieldsSql;
    }

    public function setImportFieldsSql(?string $importFieldsSql): self
    {
        $this->importFieldsSql = $importFieldsSql;

        return $this;
    }

    public function getImportFieldsExcel(): ?string
    {
        return $this->importFieldsExcel;
    }

    public function setImportFieldsExcel(?string $importFieldsExcel): self
    {
        $this->importFieldsExcel = $importFieldsExcel;

        return $this;
    }

    public function getCompanyPayproId(): ?string
    {
        return $this->companyPayproId;
    }

    public function setCompanyPayproId(?string $companyPayproId): self
    {
        $this->companyPayproId = $companyPayproId;

        return $this;
    }

    public function getImportSheet(): ?string
    {
        return $this->importSheet;
    }

    public function setImportSheet(?string $importSheet): self
    {
        $this->importSheet = $importSheet;

        return $this;
    }

    public function getCompanyShowContactform(): ?bool
    {
        return $this->companyShowContactform;
    }

    public function setCompanyShowContactform(?bool $companyShowContactform): self
    {
        $this->companyShowContactform = $companyShowContactform;

        return $this;
    }

    public function getCompanyStreetviewUrl(): ?string
    {
        return $this->companyStreetviewUrl;
    }

    public function setCompanyStreetviewUrl(?string $companyStreetviewUrl): self
    {
        $this->companyStreetviewUrl = $companyStreetviewUrl;

        return $this;
    }

    public function getCompanyShowGoogle360(): ?bool
    {
        return $this->companyShowGoogle360;
    }

    public function setCompanyShowGoogle360(?bool $companyShowGoogle360): self
    {
        $this->companyShowGoogle360 = $companyShowGoogle360;

        return $this;
    }

    public function getCompanyGoogle360Url(): ?string
    {
        return $this->companyGoogle360Url;
    }

    public function setCompanyGoogle360Url(?string $companyGoogle360Url): self
    {
        $this->companyGoogle360Url = $companyGoogle360Url;

        return $this;
    }

    public function getCompanyBrilonlineAccount(): ?string
    {
        return $this->companyBrilonlineAccount;
    }

    public function setCompanyBrilonlineAccount(?string $companyBrilonlineAccount): self
    {
        $this->companyBrilonlineAccount = $companyBrilonlineAccount;

        return $this;
    }

    public function getCompanyBrilonlineMorestores(): ?bool
    {
        return $this->companyBrilonlineMorestores;
    }

    public function setCompanyBrilonlineMorestores(?bool $companyBrilonlineMorestores): self
    {
        $this->companyBrilonlineMorestores = $companyBrilonlineMorestores;

        return $this;
    }

    public function getCompanyJeunesse(): ?string
    {
        return $this->companyJeunesse;
    }

    public function setCompanyJeunesse(?string $companyJeunesse): self
    {
        $this->companyJeunesse = $companyJeunesse;

        return $this;
    }

    public function getCompanyOriflame(): ?string
    {
        return $this->companyOriflame;
    }

    public function setCompanyOriflame(?string $companyOriflame): self
    {
        $this->companyOriflame = $companyOriflame;

        return $this;
    }

    public function getCompanyOriflameMaxpw(): ?int
    {
        return $this->companyOriflameMaxpw;
    }

    public function setCompanyOriflameMaxpw(?int $companyOriflameMaxpw): self
    {
        $this->companyOriflameMaxpw = $companyOriflameMaxpw;

        return $this;
    }

    public function getCompanyPollsEmails(): ?bool
    {
        return $this->companyPollsEmails;
    }

    public function setCompanyPollsEmails(?bool $companyPollsEmails): self
    {
        $this->companyPollsEmails = $companyPollsEmails;

        return $this;
    }

    public function getCompanyDiscount(): ?bool
    {
        return $this->companyDiscount;
    }

    public function setCompanyDiscount(?bool $companyDiscount): self
    {
        $this->companyDiscount = $companyDiscount;

        return $this;
    }

    public function getCompanyDiscountText(): ?string
    {
        return $this->companyDiscountText;
    }

    public function setCompanyDiscountText(?string $companyDiscountText): self
    {
        $this->companyDiscountText = $companyDiscountText;

        return $this;
    }

    public function getCompanyDiscountUntil(): ?\DateTimeInterface
    {
        return $this->companyDiscountUntil;
    }

    public function setCompanyDiscountUntil(?\DateTimeInterface $companyDiscountUntil): self
    {
        $this->companyDiscountUntil = $companyDiscountUntil;

        return $this;
    }

    public function getCompanyAppybee(): ?string
    {
        return $this->companyAppybee;
    }

    public function setCompanyAppybee(?string $companyAppybee): self
    {
        $this->companyAppybee = $companyAppybee;

        return $this;
    }

    public function getCompanyProfileShow(): ?bool
    {
        return $this->companyProfileShow;
    }

    public function setCompanyProfileShow(bool $companyProfileShow): self
    {
        $this->companyProfileShow = $companyProfileShow;

        return $this;
    }

    public function getCompanyProfileIndex(): ?bool
    {
        return $this->companyProfileIndex;
    }

    public function setCompanyProfileIndex(bool $companyProfileIndex): self
    {
        $this->companyProfileIndex = $companyProfileIndex;

        return $this;
    }


}
