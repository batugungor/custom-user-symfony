<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesCustomers
 *
 * @ORM\Table(name="tbl_companies_customers")
 * @ORM\Entity
 */
class TblCompaniesCustomers
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_customers_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesCustomersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_id", type="integer", nullable=true)
     */
    private $tblAppsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="push_name", type="string", length=100, nullable=true)
     */
    private $pushName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_countries_id", type="integer", nullable=true)
     */
    private $tblSystemCountriesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customers_id", type="string", length=45, nullable=true)
     */
    private $customersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_logo", type="string", length=250, nullable=true)
     */
    private $customerLogo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_service_code", type="string", length=100, nullable=true)
     */
    private $customerServiceCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_group_code", type="string", length=100, nullable=true)
     */
    private $customerGroupCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="customer_dateofbirth", type="date", nullable=true)
     */
    private $customerDateofbirth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_city_birth", type="string", length=255, nullable=true)
     */
    private $customerCityBirth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_gender", type="string", length=45, nullable=true)
     */
    private $customerGender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_name", type="string", length=255, nullable=true)
     */
    private $customerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_initials", type="string", length=45, nullable=true)
     */
    private $customerInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_firstname", type="string", length=255, nullable=true)
     */
    private $customerFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_infix", type="string", length=45, nullable=true)
     */
    private $customerInfix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_lastname", type="string", length=255, nullable=true)
     */
    private $customerLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_address", type="string", length=255, nullable=true)
     */
    private $customerAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_housenr", type="string", length=45, nullable=true)
     */
    private $customerHousenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_zipcode", type="string", length=45, nullable=true)
     */
    private $customerZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_city", type="string", length=255, nullable=true)
     */
    private $customerCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_province", type="string", length=100, nullable=true)
     */
    private $customerProvince;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_country", type="string", length=255, nullable=true)
     */
    private $customerCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_phonenr", type="string", length=45, nullable=true)
     */
    private $customerPhonenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_mobilenr", type="string", length=45, nullable=true)
     */
    private $customerMobilenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_email", type="string", length=255, nullable=true)
     */
    private $customerEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_website", type="string", length=250, nullable=true)
     */
    private $customerWebsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_cocnr", type="string", length=255, nullable=true)
     */
    private $customerCocnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_taxnr", type="string", length=255, nullable=true)
     */
    private $customerTaxnr;

    /**
     * @var bool
     *
     * @ORM\Column(name="customer_newsletter", type="boolean", nullable=false, options={"default"="1"})
     */
    private $customerNewsletter = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="customer_sepa", type="boolean", nullable=true)
     */
    private $customerSepa = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_iban", type="string", length=45, nullable=true)
     */
    private $customerIban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_bic", type="string", length=45, nullable=true)
     */
    private $customerBic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_iban_name", type="string", length=45, nullable=true)
     */
    private $customerIbanName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="customer_date_start", type="date", nullable=true)
     */
    private $customerDateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="customer_date_end", type="date", nullable=true)
     */
    private $customerDateEnd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_import_amount", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $customerImportAmount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="customer_newsletters", type="boolean", nullable=true, options={"default"="1"})
     */
    private $customerNewsletters = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="customer_approved", type="boolean", nullable=true, options={"default"="1"})
     */
    private $customerApproved = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="customer_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $customerActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_username", type="string", length=45, nullable=true)
     */
    private $customerUsername;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_password", type="string", length=45, nullable=true)
     */
    private $customerPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_password_normal", type="string", length=255, nullable=true)
     */
    private $customerPasswordNormal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_lat", type="string", length=50, nullable=true)
     */
    private $customerLat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_long", type="string", length=50, nullable=true)
     */
    private $customerLong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_md5", type="string", length=32, nullable=true)
     */
    private $customerMd5;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="customer_created", type="datetime", nullable=true)
     */
    private $customerCreated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_created_ip", type="string", length=100, nullable=true)
     */
    private $customerCreatedIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_created_browser", type="string", length=250, nullable=true)
     */
    private $customerCreatedBrowser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="customer_approved_date", type="datetime", nullable=true)
     */
    private $customerApprovedDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="customer_unsubscribe_date", type="datetime", nullable=true)
     */
    private $customerUnsubscribeDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_autograph", type="text", length=65535, nullable=true)
     */
    private $customerAutograph;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apps_groups", type="string", length=45, nullable=true)
     */
    private $appsGroups;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="customer_old", type="boolean", nullable=true)
     */
    private $customerOld = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_memo", type="text", length=65535, nullable=true)
     */
    private $customerMemo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_facebook", type="string", length=250, nullable=true)
     */
    private $customerFacebook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_twitter", type="string", length=100, nullable=true)
     */
    private $customerTwitter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_linkedin", type="string", length=250, nullable=true)
     */
    private $customerLinkedin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_googleplus", type="string", length=250, nullable=true)
     */
    private $customerGoogleplus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_youtube", type="string", length=250, nullable=true)
     */
    private $customerYoutube;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_pinterest", type="string", length=250, nullable=true)
     */
    private $customerPinterest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_instagram", type="string", length=250, nullable=true)
     */
    private $customerInstagram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_soundcloud", type="string", length=250, nullable=true)
     */
    private $customerSoundcloud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_picasa", type="string", length=250, nullable=true)
     */
    private $customerPicasa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_flickr", type="string", length=250, nullable=true)
     */
    private $customerFlickr;

    public function getTblCompaniesCustomersId(): ?int
    {
        return $this->tblCompaniesCustomersId;
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

    public function getTblAppsId(): ?int
    {
        return $this->tblAppsId;
    }

    public function setTblAppsId(?int $tblAppsId): self
    {
        $this->tblAppsId = $tblAppsId;

        return $this;
    }

    public function getPushName(): ?string
    {
        return $this->pushName;
    }

    public function setPushName(?string $pushName): self
    {
        $this->pushName = $pushName;

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

    public function getCustomersId(): ?string
    {
        return $this->customersId;
    }

    public function setCustomersId(?string $customersId): self
    {
        $this->customersId = $customersId;

        return $this;
    }

    public function getCustomerLogo(): ?string
    {
        return $this->customerLogo;
    }

    public function setCustomerLogo(?string $customerLogo): self
    {
        $this->customerLogo = $customerLogo;

        return $this;
    }

    public function getCustomerServiceCode(): ?string
    {
        return $this->customerServiceCode;
    }

    public function setCustomerServiceCode(?string $customerServiceCode): self
    {
        $this->customerServiceCode = $customerServiceCode;

        return $this;
    }

    public function getCustomerGroupCode(): ?string
    {
        return $this->customerGroupCode;
    }

    public function setCustomerGroupCode(?string $customerGroupCode): self
    {
        $this->customerGroupCode = $customerGroupCode;

        return $this;
    }

    public function getCustomerDateofbirth(): ?\DateTimeInterface
    {
        return $this->customerDateofbirth;
    }

    public function setCustomerDateofbirth(?\DateTimeInterface $customerDateofbirth): self
    {
        $this->customerDateofbirth = $customerDateofbirth;

        return $this;
    }

    public function getCustomerCityBirth(): ?string
    {
        return $this->customerCityBirth;
    }

    public function setCustomerCityBirth(?string $customerCityBirth): self
    {
        $this->customerCityBirth = $customerCityBirth;

        return $this;
    }

    public function getCustomerGender(): ?string
    {
        return $this->customerGender;
    }

    public function setCustomerGender(?string $customerGender): self
    {
        $this->customerGender = $customerGender;

        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;

        return $this;
    }

    public function getCustomerInitials(): ?string
    {
        return $this->customerInitials;
    }

    public function setCustomerInitials(?string $customerInitials): self
    {
        $this->customerInitials = $customerInitials;

        return $this;
    }

    public function getCustomerFirstname(): ?string
    {
        return $this->customerFirstname;
    }

    public function setCustomerFirstname(?string $customerFirstname): self
    {
        $this->customerFirstname = $customerFirstname;

        return $this;
    }

    public function getCustomerInfix(): ?string
    {
        return $this->customerInfix;
    }

    public function setCustomerInfix(?string $customerInfix): self
    {
        $this->customerInfix = $customerInfix;

        return $this;
    }

    public function getCustomerLastname(): ?string
    {
        return $this->customerLastname;
    }

    public function setCustomerLastname(?string $customerLastname): self
    {
        $this->customerLastname = $customerLastname;

        return $this;
    }

    public function getCustomerAddress(): ?string
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress(?string $customerAddress): self
    {
        $this->customerAddress = $customerAddress;

        return $this;
    }

    public function getCustomerHousenr(): ?string
    {
        return $this->customerHousenr;
    }

    public function setCustomerHousenr(?string $customerHousenr): self
    {
        $this->customerHousenr = $customerHousenr;

        return $this;
    }

    public function getCustomerZipcode(): ?string
    {
        return $this->customerZipcode;
    }

    public function setCustomerZipcode(?string $customerZipcode): self
    {
        $this->customerZipcode = $customerZipcode;

        return $this;
    }

    public function getCustomerCity(): ?string
    {
        return $this->customerCity;
    }

    public function setCustomerCity(?string $customerCity): self
    {
        $this->customerCity = $customerCity;

        return $this;
    }

    public function getCustomerProvince(): ?string
    {
        return $this->customerProvince;
    }

    public function setCustomerProvince(?string $customerProvince): self
    {
        $this->customerProvince = $customerProvince;

        return $this;
    }

    public function getCustomerCountry(): ?string
    {
        return $this->customerCountry;
    }

    public function setCustomerCountry(?string $customerCountry): self
    {
        $this->customerCountry = $customerCountry;

        return $this;
    }

    public function getCustomerPhonenr(): ?string
    {
        return $this->customerPhonenr;
    }

    public function setCustomerPhonenr(?string $customerPhonenr): self
    {
        $this->customerPhonenr = $customerPhonenr;

        return $this;
    }

    public function getCustomerMobilenr(): ?string
    {
        return $this->customerMobilenr;
    }

    public function setCustomerMobilenr(?string $customerMobilenr): self
    {
        $this->customerMobilenr = $customerMobilenr;

        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    public function getCustomerWebsite(): ?string
    {
        return $this->customerWebsite;
    }

    public function setCustomerWebsite(?string $customerWebsite): self
    {
        $this->customerWebsite = $customerWebsite;

        return $this;
    }

    public function getCustomerCocnr(): ?string
    {
        return $this->customerCocnr;
    }

    public function setCustomerCocnr(?string $customerCocnr): self
    {
        $this->customerCocnr = $customerCocnr;

        return $this;
    }

    public function getCustomerTaxnr(): ?string
    {
        return $this->customerTaxnr;
    }

    public function setCustomerTaxnr(?string $customerTaxnr): self
    {
        $this->customerTaxnr = $customerTaxnr;

        return $this;
    }

    public function getCustomerNewsletter(): ?bool
    {
        return $this->customerNewsletter;
    }

    public function setCustomerNewsletter(bool $customerNewsletter): self
    {
        $this->customerNewsletter = $customerNewsletter;

        return $this;
    }

    public function getCustomerSepa(): ?bool
    {
        return $this->customerSepa;
    }

    public function setCustomerSepa(?bool $customerSepa): self
    {
        $this->customerSepa = $customerSepa;

        return $this;
    }

    public function getCustomerIban(): ?string
    {
        return $this->customerIban;
    }

    public function setCustomerIban(?string $customerIban): self
    {
        $this->customerIban = $customerIban;

        return $this;
    }

    public function getCustomerBic(): ?string
    {
        return $this->customerBic;
    }

    public function setCustomerBic(?string $customerBic): self
    {
        $this->customerBic = $customerBic;

        return $this;
    }

    public function getCustomerIbanName(): ?string
    {
        return $this->customerIbanName;
    }

    public function setCustomerIbanName(?string $customerIbanName): self
    {
        $this->customerIbanName = $customerIbanName;

        return $this;
    }

    public function getCustomerDateStart(): ?\DateTimeInterface
    {
        return $this->customerDateStart;
    }

    public function setCustomerDateStart(?\DateTimeInterface $customerDateStart): self
    {
        $this->customerDateStart = $customerDateStart;

        return $this;
    }

    public function getCustomerDateEnd(): ?\DateTimeInterface
    {
        return $this->customerDateEnd;
    }

    public function setCustomerDateEnd(?\DateTimeInterface $customerDateEnd): self
    {
        $this->customerDateEnd = $customerDateEnd;

        return $this;
    }

    public function getCustomerImportAmount()
    {
        return $this->customerImportAmount;
    }

    public function setCustomerImportAmount($customerImportAmount): self
    {
        $this->customerImportAmount = $customerImportAmount;

        return $this;
    }

    public function getCustomerNewsletters(): ?bool
    {
        return $this->customerNewsletters;
    }

    public function setCustomerNewsletters(?bool $customerNewsletters): self
    {
        $this->customerNewsletters = $customerNewsletters;

        return $this;
    }

    public function getCustomerApproved(): ?bool
    {
        return $this->customerApproved;
    }

    public function setCustomerApproved(?bool $customerApproved): self
    {
        $this->customerApproved = $customerApproved;

        return $this;
    }

    public function getCustomerActive(): ?bool
    {
        return $this->customerActive;
    }

    public function setCustomerActive(?bool $customerActive): self
    {
        $this->customerActive = $customerActive;

        return $this;
    }

    public function getCustomerUsername(): ?string
    {
        return $this->customerUsername;
    }

    public function setCustomerUsername(?string $customerUsername): self
    {
        $this->customerUsername = $customerUsername;

        return $this;
    }

    public function getCustomerPassword(): ?string
    {
        return $this->customerPassword;
    }

    public function setCustomerPassword(?string $customerPassword): self
    {
        $this->customerPassword = $customerPassword;

        return $this;
    }

    public function getCustomerPasswordNormal(): ?string
    {
        return $this->customerPasswordNormal;
    }

    public function setCustomerPasswordNormal(?string $customerPasswordNormal): self
    {
        $this->customerPasswordNormal = $customerPasswordNormal;

        return $this;
    }

    public function getCustomerLat(): ?string
    {
        return $this->customerLat;
    }

    public function setCustomerLat(?string $customerLat): self
    {
        $this->customerLat = $customerLat;

        return $this;
    }

    public function getCustomerLong(): ?string
    {
        return $this->customerLong;
    }

    public function setCustomerLong(?string $customerLong): self
    {
        $this->customerLong = $customerLong;

        return $this;
    }

    public function getCustomerMd5(): ?string
    {
        return $this->customerMd5;
    }

    public function setCustomerMd5(?string $customerMd5): self
    {
        $this->customerMd5 = $customerMd5;

        return $this;
    }

    public function getCustomerCreated(): ?\DateTimeInterface
    {
        return $this->customerCreated;
    }

    public function setCustomerCreated(?\DateTimeInterface $customerCreated): self
    {
        $this->customerCreated = $customerCreated;

        return $this;
    }

    public function getCustomerCreatedIp(): ?string
    {
        return $this->customerCreatedIp;
    }

    public function setCustomerCreatedIp(?string $customerCreatedIp): self
    {
        $this->customerCreatedIp = $customerCreatedIp;

        return $this;
    }

    public function getCustomerCreatedBrowser(): ?string
    {
        return $this->customerCreatedBrowser;
    }

    public function setCustomerCreatedBrowser(?string $customerCreatedBrowser): self
    {
        $this->customerCreatedBrowser = $customerCreatedBrowser;

        return $this;
    }

    public function getCustomerApprovedDate(): ?\DateTimeInterface
    {
        return $this->customerApprovedDate;
    }

    public function setCustomerApprovedDate(?\DateTimeInterface $customerApprovedDate): self
    {
        $this->customerApprovedDate = $customerApprovedDate;

        return $this;
    }

    public function getCustomerUnsubscribeDate(): ?\DateTimeInterface
    {
        return $this->customerUnsubscribeDate;
    }

    public function setCustomerUnsubscribeDate(?\DateTimeInterface $customerUnsubscribeDate): self
    {
        $this->customerUnsubscribeDate = $customerUnsubscribeDate;

        return $this;
    }

    public function getCustomerAutograph(): ?string
    {
        return $this->customerAutograph;
    }

    public function setCustomerAutograph(?string $customerAutograph): self
    {
        $this->customerAutograph = $customerAutograph;

        return $this;
    }

    public function getAppsGroups(): ?string
    {
        return $this->appsGroups;
    }

    public function setAppsGroups(?string $appsGroups): self
    {
        $this->appsGroups = $appsGroups;

        return $this;
    }

    public function getCustomerOld(): ?bool
    {
        return $this->customerOld;
    }

    public function setCustomerOld(?bool $customerOld): self
    {
        $this->customerOld = $customerOld;

        return $this;
    }

    public function getCustomerMemo(): ?string
    {
        return $this->customerMemo;
    }

    public function setCustomerMemo(?string $customerMemo): self
    {
        $this->customerMemo = $customerMemo;

        return $this;
    }

    public function getCustomerFacebook(): ?string
    {
        return $this->customerFacebook;
    }

    public function setCustomerFacebook(?string $customerFacebook): self
    {
        $this->customerFacebook = $customerFacebook;

        return $this;
    }

    public function getCustomerTwitter(): ?string
    {
        return $this->customerTwitter;
    }

    public function setCustomerTwitter(?string $customerTwitter): self
    {
        $this->customerTwitter = $customerTwitter;

        return $this;
    }

    public function getCustomerLinkedin(): ?string
    {
        return $this->customerLinkedin;
    }

    public function setCustomerLinkedin(?string $customerLinkedin): self
    {
        $this->customerLinkedin = $customerLinkedin;

        return $this;
    }

    public function getCustomerGoogleplus(): ?string
    {
        return $this->customerGoogleplus;
    }

    public function setCustomerGoogleplus(?string $customerGoogleplus): self
    {
        $this->customerGoogleplus = $customerGoogleplus;

        return $this;
    }

    public function getCustomerYoutube(): ?string
    {
        return $this->customerYoutube;
    }

    public function setCustomerYoutube(?string $customerYoutube): self
    {
        $this->customerYoutube = $customerYoutube;

        return $this;
    }

    public function getCustomerPinterest(): ?string
    {
        return $this->customerPinterest;
    }

    public function setCustomerPinterest(?string $customerPinterest): self
    {
        $this->customerPinterest = $customerPinterest;

        return $this;
    }

    public function getCustomerInstagram(): ?string
    {
        return $this->customerInstagram;
    }

    public function setCustomerInstagram(?string $customerInstagram): self
    {
        $this->customerInstagram = $customerInstagram;

        return $this;
    }

    public function getCustomerSoundcloud(): ?string
    {
        return $this->customerSoundcloud;
    }

    public function setCustomerSoundcloud(?string $customerSoundcloud): self
    {
        $this->customerSoundcloud = $customerSoundcloud;

        return $this;
    }

    public function getCustomerPicasa(): ?string
    {
        return $this->customerPicasa;
    }

    public function setCustomerPicasa(?string $customerPicasa): self
    {
        $this->customerPicasa = $customerPicasa;

        return $this;
    }

    public function getCustomerFlickr(): ?string
    {
        return $this->customerFlickr;
    }

    public function setCustomerFlickr(?string $customerFlickr): self
    {
        $this->customerFlickr = $customerFlickr;

        return $this;
    }


}
