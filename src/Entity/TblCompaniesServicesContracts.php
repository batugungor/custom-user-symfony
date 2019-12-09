<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesServicesContracts
 *
 * @ORM\Table(name="tbl_companies_services_contracts")
 * @ORM\Entity
 */
class TblCompaniesServicesContracts
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_services_contracts_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesServicesContractsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_services_id", type="integer", nullable=false)
     */
    private $tblCompaniesServicesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_services_discounts_id", type="integer", nullable=true)
     */
    private $tblCompaniesServicesDiscountsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_locations_id", type="integer", nullable=true)
     */
    private $tblCompaniesLocationsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_customers_id", type="integer", nullable=true)
     */
    private $tblCompaniesCustomersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_ordernr", type="integer", nullable=true)
     */
    private $contractOrdernr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_name", type="string", length=250, nullable=true)
     */
    private $contractName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="contract_date", type="datetime", nullable=true)
     */
    private $contractDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_price", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $contractPrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_pricetax", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $contractPricetax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_tax", type="integer", nullable=true)
     */
    private $contractTax;

    /**
     * @var bool
     *
     * @ORM\Column(name="contract_payed", type="boolean", nullable=false)
     */
    private $contractPayed = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="contract_until", type="datetime", nullable=true)
     */
    private $contractUntil;

    /**
     * @var bool
     *
     * @ORM\Column(name="contract_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $contractActive = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_months", type="integer", nullable=true)
     */
    private $contractMonths;

    /**
     * @var bool
     *
     * @ORM\Column(name="contract_reminder", type="boolean", nullable=false)
     */
    private $contractReminder = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_title", type="string", length=255, nullable=true)
     */
    private $discountTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_price", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $discountPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discount_percentage", type="integer", nullable=true)
     */
    private $discountPercentage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_price_startup", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $discountPriceStartup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discount_percentage_startup", type="integer", nullable=true)
     */
    private $discountPercentageStartup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_id", type="string", length=100, nullable=true)
     */
    private $transactionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="response_id", type="integer", nullable=true)
     */
    private $responseId;

    /**
     * @var string
     *
     * @ORM\Column(name="response_status", type="string", length=250, nullable=false)
     */
    private $responseStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="response_status_nl", type="string", length=250, nullable=false)
     */
    private $responseStatusNl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="response_check", type="date", nullable=true)
     */
    private $responseCheck;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_transactionid", type="string", length=255, nullable=true)
     */
    private $responseTransactionid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_amount", type="string", length=255, nullable=true)
     */
    private $responseAmount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_currency", type="string", length=255, nullable=true)
     */
    private $responseCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_payed", type="string", length=255, nullable=true)
     */
    private $responsePayed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_custname", type="string", length=255, nullable=true)
     */
    private $responseCustname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_custaccount", type="string", length=255, nullable=true)
     */
    private $responseCustaccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_custcity", type="string", length=255, nullable=true)
     */
    private $responseCustcity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_memo", type="text", length=65535, nullable=true)
     */
    private $contractMemo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_amount_per_period", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $contractAmountPerPeriod = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_period_in_months", type="integer", nullable=true, options={"default"="1"})
     */
    private $contractPeriodInMonths = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_contract_in_months", type="integer", nullable=true, options={"default"="12"})
     */
    private $contractContractInMonths = '12';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="contract_terminate_within_contract", type="boolean", nullable=true, options={"default"="1"})
     */
    private $contractTerminateWithinContract = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_notice_period_in_months", type="integer", nullable=true, options={"default"="1"})
     */
    private $contractNoticePeriodInMonths = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_extend_in_months", type="integer", nullable=true, options={"default"="12"})
     */
    private $contractExtendInMonths = '12';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_startup_amount", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $contractStartupAmount = '0.00';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="contract_pay_in_once", type="boolean", nullable=true, options={"default"="1"})
     */
    private $contractPayInOnce = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_pay_in_once_discount", type="integer", nullable=true, options={"default"="10"})
     */
    private $contractPayInOnceDiscount = '10';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="contract_terminated", type="boolean", nullable=true)
     */
    private $contractTerminated = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="contract_terminated_date", type="datetime", nullable=true)
     */
    private $contractTerminatedDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_payment_day", type="integer", nullable=true, options={"default"="1"})
     */
    private $contractPaymentDay = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="contract_payment_day_nextmonth", type="boolean", nullable=true)
     */
    private $contractPaymentDayNextmonth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_reversal_fee", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $contractReversalFee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_signature", type="string", length=2000, nullable=true)
     */
    private $contractSignature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_email", type="string", length=150, nullable=true)
     */
    private $contractEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_iban", type="string", length=150, nullable=true)
     */
    private $contractIban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_iban_name", type="string", length=250, nullable=true)
     */
    private $contractIbanName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_credits", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $contractCredits = '0.00';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="contract_approved", type="boolean", nullable=true)
     */
    private $contractApproved = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contract_md5", type="string", length=32, nullable=true)
     */
    private $contractMd5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="paypro_installment_id", type="integer", nullable=true)
     */
    private $payproInstallmentId;

    public function getTblCompaniesServicesContractsId(): ?int
    {
        return $this->tblCompaniesServicesContractsId;
    }

    public function getTblCompaniesServicesId(): ?int
    {
        return $this->tblCompaniesServicesId;
    }

    public function setTblCompaniesServicesId(int $tblCompaniesServicesId): self
    {
        $this->tblCompaniesServicesId = $tblCompaniesServicesId;

        return $this;
    }

    public function getTblCompaniesServicesDiscountsId(): ?int
    {
        return $this->tblCompaniesServicesDiscountsId;
    }

    public function setTblCompaniesServicesDiscountsId(?int $tblCompaniesServicesDiscountsId): self
    {
        $this->tblCompaniesServicesDiscountsId = $tblCompaniesServicesDiscountsId;

        return $this;
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

    public function getTblCompaniesLocationsId(): ?int
    {
        return $this->tblCompaniesLocationsId;
    }

    public function setTblCompaniesLocationsId(?int $tblCompaniesLocationsId): self
    {
        $this->tblCompaniesLocationsId = $tblCompaniesLocationsId;

        return $this;
    }

    public function getTblCompaniesCustomersId(): ?int
    {
        return $this->tblCompaniesCustomersId;
    }

    public function setTblCompaniesCustomersId(?int $tblCompaniesCustomersId): self
    {
        $this->tblCompaniesCustomersId = $tblCompaniesCustomersId;

        return $this;
    }

    public function getContractOrdernr(): ?int
    {
        return $this->contractOrdernr;
    }

    public function setContractOrdernr(?int $contractOrdernr): self
    {
        $this->contractOrdernr = $contractOrdernr;

        return $this;
    }

    public function getContractName(): ?string
    {
        return $this->contractName;
    }

    public function setContractName(?string $contractName): self
    {
        $this->contractName = $contractName;

        return $this;
    }

    public function getContractDate(): ?\DateTimeInterface
    {
        return $this->contractDate;
    }

    public function setContractDate(?\DateTimeInterface $contractDate): self
    {
        $this->contractDate = $contractDate;

        return $this;
    }

    public function getContractPrice()
    {
        return $this->contractPrice;
    }

    public function setContractPrice($contractPrice): self
    {
        $this->contractPrice = $contractPrice;

        return $this;
    }

    public function getContractPricetax()
    {
        return $this->contractPricetax;
    }

    public function setContractPricetax($contractPricetax): self
    {
        $this->contractPricetax = $contractPricetax;

        return $this;
    }

    public function getContractTax(): ?int
    {
        return $this->contractTax;
    }

    public function setContractTax(?int $contractTax): self
    {
        $this->contractTax = $contractTax;

        return $this;
    }

    public function getContractPayed(): ?bool
    {
        return $this->contractPayed;
    }

    public function setContractPayed(bool $contractPayed): self
    {
        $this->contractPayed = $contractPayed;

        return $this;
    }

    public function getContractUntil(): ?\DateTimeInterface
    {
        return $this->contractUntil;
    }

    public function setContractUntil(?\DateTimeInterface $contractUntil): self
    {
        $this->contractUntil = $contractUntil;

        return $this;
    }

    public function getContractActive(): ?bool
    {
        return $this->contractActive;
    }

    public function setContractActive(bool $contractActive): self
    {
        $this->contractActive = $contractActive;

        return $this;
    }

    public function getContractMonths(): ?int
    {
        return $this->contractMonths;
    }

    public function setContractMonths(?int $contractMonths): self
    {
        $this->contractMonths = $contractMonths;

        return $this;
    }

    public function getContractReminder(): ?bool
    {
        return $this->contractReminder;
    }

    public function setContractReminder(bool $contractReminder): self
    {
        $this->contractReminder = $contractReminder;

        return $this;
    }

    public function getDiscountTitle(): ?string
    {
        return $this->discountTitle;
    }

    public function setDiscountTitle(?string $discountTitle): self
    {
        $this->discountTitle = $discountTitle;

        return $this;
    }

    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    public function setDiscountPrice($discountPrice): self
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }

    public function getDiscountPercentage(): ?int
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(?int $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    public function getDiscountPriceStartup()
    {
        return $this->discountPriceStartup;
    }

    public function setDiscountPriceStartup($discountPriceStartup): self
    {
        $this->discountPriceStartup = $discountPriceStartup;

        return $this;
    }

    public function getDiscountPercentageStartup(): ?int
    {
        return $this->discountPercentageStartup;
    }

    public function setDiscountPercentageStartup(?int $discountPercentageStartup): self
    {
        $this->discountPercentageStartup = $discountPercentageStartup;

        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getResponseId(): ?int
    {
        return $this->responseId;
    }

    public function setResponseId(?int $responseId): self
    {
        $this->responseId = $responseId;

        return $this;
    }

    public function getResponseStatus(): ?string
    {
        return $this->responseStatus;
    }

    public function setResponseStatus(string $responseStatus): self
    {
        $this->responseStatus = $responseStatus;

        return $this;
    }

    public function getResponseStatusNl(): ?string
    {
        return $this->responseStatusNl;
    }

    public function setResponseStatusNl(string $responseStatusNl): self
    {
        $this->responseStatusNl = $responseStatusNl;

        return $this;
    }

    public function getResponseCheck(): ?\DateTimeInterface
    {
        return $this->responseCheck;
    }

    public function setResponseCheck(?\DateTimeInterface $responseCheck): self
    {
        $this->responseCheck = $responseCheck;

        return $this;
    }

    public function getResponseTransactionid(): ?string
    {
        return $this->responseTransactionid;
    }

    public function setResponseTransactionid(?string $responseTransactionid): self
    {
        $this->responseTransactionid = $responseTransactionid;

        return $this;
    }

    public function getResponseAmount(): ?string
    {
        return $this->responseAmount;
    }

    public function setResponseAmount(?string $responseAmount): self
    {
        $this->responseAmount = $responseAmount;

        return $this;
    }

    public function getResponseCurrency(): ?string
    {
        return $this->responseCurrency;
    }

    public function setResponseCurrency(?string $responseCurrency): self
    {
        $this->responseCurrency = $responseCurrency;

        return $this;
    }

    public function getResponsePayed(): ?string
    {
        return $this->responsePayed;
    }

    public function setResponsePayed(?string $responsePayed): self
    {
        $this->responsePayed = $responsePayed;

        return $this;
    }

    public function getResponseCustname(): ?string
    {
        return $this->responseCustname;
    }

    public function setResponseCustname(?string $responseCustname): self
    {
        $this->responseCustname = $responseCustname;

        return $this;
    }

    public function getResponseCustaccount(): ?string
    {
        return $this->responseCustaccount;
    }

    public function setResponseCustaccount(?string $responseCustaccount): self
    {
        $this->responseCustaccount = $responseCustaccount;

        return $this;
    }

    public function getResponseCustcity(): ?string
    {
        return $this->responseCustcity;
    }

    public function setResponseCustcity(?string $responseCustcity): self
    {
        $this->responseCustcity = $responseCustcity;

        return $this;
    }

    public function getContractMemo(): ?string
    {
        return $this->contractMemo;
    }

    public function setContractMemo(?string $contractMemo): self
    {
        $this->contractMemo = $contractMemo;

        return $this;
    }

    public function getContractAmountPerPeriod()
    {
        return $this->contractAmountPerPeriod;
    }

    public function setContractAmountPerPeriod($contractAmountPerPeriod): self
    {
        $this->contractAmountPerPeriod = $contractAmountPerPeriod;

        return $this;
    }

    public function getContractPeriodInMonths(): ?int
    {
        return $this->contractPeriodInMonths;
    }

    public function setContractPeriodInMonths(?int $contractPeriodInMonths): self
    {
        $this->contractPeriodInMonths = $contractPeriodInMonths;

        return $this;
    }

    public function getContractContractInMonths(): ?int
    {
        return $this->contractContractInMonths;
    }

    public function setContractContractInMonths(?int $contractContractInMonths): self
    {
        $this->contractContractInMonths = $contractContractInMonths;

        return $this;
    }

    public function getContractTerminateWithinContract(): ?bool
    {
        return $this->contractTerminateWithinContract;
    }

    public function setContractTerminateWithinContract(?bool $contractTerminateWithinContract): self
    {
        $this->contractTerminateWithinContract = $contractTerminateWithinContract;

        return $this;
    }

    public function getContractNoticePeriodInMonths(): ?int
    {
        return $this->contractNoticePeriodInMonths;
    }

    public function setContractNoticePeriodInMonths(?int $contractNoticePeriodInMonths): self
    {
        $this->contractNoticePeriodInMonths = $contractNoticePeriodInMonths;

        return $this;
    }

    public function getContractExtendInMonths(): ?int
    {
        return $this->contractExtendInMonths;
    }

    public function setContractExtendInMonths(?int $contractExtendInMonths): self
    {
        $this->contractExtendInMonths = $contractExtendInMonths;

        return $this;
    }

    public function getContractStartupAmount()
    {
        return $this->contractStartupAmount;
    }

    public function setContractStartupAmount($contractStartupAmount): self
    {
        $this->contractStartupAmount = $contractStartupAmount;

        return $this;
    }

    public function getContractPayInOnce(): ?bool
    {
        return $this->contractPayInOnce;
    }

    public function setContractPayInOnce(?bool $contractPayInOnce): self
    {
        $this->contractPayInOnce = $contractPayInOnce;

        return $this;
    }

    public function getContractPayInOnceDiscount(): ?int
    {
        return $this->contractPayInOnceDiscount;
    }

    public function setContractPayInOnceDiscount(?int $contractPayInOnceDiscount): self
    {
        $this->contractPayInOnceDiscount = $contractPayInOnceDiscount;

        return $this;
    }

    public function getContractTerminated(): ?bool
    {
        return $this->contractTerminated;
    }

    public function setContractTerminated(?bool $contractTerminated): self
    {
        $this->contractTerminated = $contractTerminated;

        return $this;
    }

    public function getContractTerminatedDate(): ?\DateTimeInterface
    {
        return $this->contractTerminatedDate;
    }

    public function setContractTerminatedDate(?\DateTimeInterface $contractTerminatedDate): self
    {
        $this->contractTerminatedDate = $contractTerminatedDate;

        return $this;
    }

    public function getContractPaymentDay(): ?int
    {
        return $this->contractPaymentDay;
    }

    public function setContractPaymentDay(?int $contractPaymentDay): self
    {
        $this->contractPaymentDay = $contractPaymentDay;

        return $this;
    }

    public function getContractPaymentDayNextmonth(): ?bool
    {
        return $this->contractPaymentDayNextmonth;
    }

    public function setContractPaymentDayNextmonth(?bool $contractPaymentDayNextmonth): self
    {
        $this->contractPaymentDayNextmonth = $contractPaymentDayNextmonth;

        return $this;
    }

    public function getContractReversalFee()
    {
        return $this->contractReversalFee;
    }

    public function setContractReversalFee($contractReversalFee): self
    {
        $this->contractReversalFee = $contractReversalFee;

        return $this;
    }

    public function getContractSignature(): ?string
    {
        return $this->contractSignature;
    }

    public function setContractSignature(?string $contractSignature): self
    {
        $this->contractSignature = $contractSignature;

        return $this;
    }

    public function getContractEmail(): ?string
    {
        return $this->contractEmail;
    }

    public function setContractEmail(?string $contractEmail): self
    {
        $this->contractEmail = $contractEmail;

        return $this;
    }

    public function getContractIban(): ?string
    {
        return $this->contractIban;
    }

    public function setContractIban(?string $contractIban): self
    {
        $this->contractIban = $contractIban;

        return $this;
    }

    public function getContractIbanName(): ?string
    {
        return $this->contractIbanName;
    }

    public function setContractIbanName(?string $contractIbanName): self
    {
        $this->contractIbanName = $contractIbanName;

        return $this;
    }

    public function getContractCredits()
    {
        return $this->contractCredits;
    }

    public function setContractCredits($contractCredits): self
    {
        $this->contractCredits = $contractCredits;

        return $this;
    }

    public function getContractApproved(): ?bool
    {
        return $this->contractApproved;
    }

    public function setContractApproved(?bool $contractApproved): self
    {
        $this->contractApproved = $contractApproved;

        return $this;
    }

    public function getContractMd5(): ?string
    {
        return $this->contractMd5;
    }

    public function setContractMd5(?string $contractMd5): self
    {
        $this->contractMd5 = $contractMd5;

        return $this;
    }

    public function getPayproInstallmentId(): ?int
    {
        return $this->payproInstallmentId;
    }

    public function setPayproInstallmentId(?int $payproInstallmentId): self
    {
        $this->payproInstallmentId = $payproInstallmentId;

        return $this;
    }


}
