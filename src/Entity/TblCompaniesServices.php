<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesServices
 *
 * @ORM\Table(name="tbl_companies_services")
 * @ORM\Entity
 */
class TblCompaniesServices
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_services_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesServicesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_name", type="string", length=250, nullable=true)
     */
    private $serviceName = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_description", type="text", length=65535, nullable=true)
     */
    private $serviceDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="service_description_payment", type="string", length=100, nullable=false)
     */
    private $serviceDescriptionPayment = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_terms", type="text", length=65535, nullable=true)
     */
    private $serviceTerms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_memo", type="text", length=65535, nullable=true)
     */
    private $serviceMemo;

    /**
     * @var string
     *
     * @ORM\Column(name="service_price", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $servicePrice = '0.00';

    /**
     * @var int
     *
     * @ORM\Column(name="service_months", type="integer", nullable=false, options={"default"="12"})
     */
    private $serviceMonths = '12';

    /**
     * @var bool
     *
     * @ORM\Column(name="service_months_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $serviceMonthsShow = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="service_from", type="datetime", nullable=true)
     */
    private $serviceFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="service_until", type="datetime", nullable=true)
     */
    private $serviceUntil;

    /**
     * @var int
     *
     * @ORM\Column(name="service_reminder_days", type="integer", nullable=false, options={"default"="30"})
     */
    private $serviceReminderDays = '30';

    /**
     * @var bool
     *
     * @ORM\Column(name="service_default", type="boolean", nullable=false)
     */
    private $serviceDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="service_attention", type="boolean", nullable=false)
     */
    private $serviceAttention = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="service_showcrosses", type="boolean", nullable=false, options={"default"="1"})
     */
    private $serviceShowcrosses = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_alert_title", type="string", length=250, nullable=true)
     */
    private $serviceAlertTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_alert_message", type="text", length=65535, nullable=true)
     */
    private $serviceAlertMessage;

    /**
     * @var bool
     *
     * @ORM\Column(name="service_alert_sticky", type="boolean", nullable=false)
     */
    private $serviceAlertSticky = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="service_alert_life", type="integer", nullable=false, options={"default"="10"})
     */
    private $serviceAlertLife = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="service_alert_vertical", type="string", length=100, nullable=false, options={"default"="right"})
     */
    private $serviceAlertVertical = 'right';

    /**
     * @var string
     *
     * @ORM\Column(name="service_alert_horizontal", type="string", length=100, nullable=false, options={"default"="bottom"})
     */
    private $serviceAlertHorizontal = 'bottom';

    /**
     * @var bool
     *
     * @ORM\Column(name="service_alert_active", type="boolean", nullable=false)
     */
    private $serviceAlertActive = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="service_profile", type="boolean", nullable=false, options={"default"="1"})
     */
    private $serviceProfile = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="service_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $serviceActive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="service_order", type="integer", nullable=false, options={"default"="1"})
     */
    private $serviceOrder = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="service_tax", type="integer", nullable=false, options={"default"="21"})
     */
    private $serviceTax = '21';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_amount_per_period", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $serviceAmountPerPeriod = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="service_period_in_months", type="integer", nullable=true, options={"default"="1"})
     */
    private $servicePeriodInMonths = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="service_contract_in_months", type="integer", nullable=true, options={"default"="12"})
     */
    private $serviceContractInMonths = '12';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="service_terminate_within_contract", type="boolean", nullable=true, options={"default"="1"})
     */
    private $serviceTerminateWithinContract = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="service_notice_period_in_months", type="integer", nullable=true, options={"default"="1"})
     */
    private $serviceNoticePeriodInMonths = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="service_extend_in_months", type="integer", nullable=true, options={"default"="12"})
     */
    private $serviceExtendInMonths = '12';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_startup_amount", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $serviceStartupAmount = '0.00';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="service_pay_in_once", type="boolean", nullable=true, options={"default"="1"})
     */
    private $servicePayInOnce = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="service_pay_in_once_discount", type="integer", nullable=true, options={"default"="10"})
     */
    private $servicePayInOnceDiscount = '10';

    /**
     * @var int|null
     *
     * @ORM\Column(name="service_payment_day", type="integer", nullable=true, options={"default"="1"})
     */
    private $servicePaymentDay = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="service_payment_day_nextmonth", type="boolean", nullable=true)
     */
    private $servicePaymentDayNextmonth = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_reversal_fee", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $serviceReversalFee = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_bailiff_fee", type="decimal", precision=6, scale=2, nullable=true, options={"default"="48.40"})
     */
    private $serviceBailiffFee = '48.40';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_id", type="string", length=45, nullable=true)
     */
    private $serviceId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="service_sent_invoice", type="boolean", nullable=true)
     */
    private $serviceSentInvoice = '0';

    public function getTblCompaniesServicesId(): ?int
    {
        return $this->tblCompaniesServicesId;
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

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(?string $serviceName): self
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    public function getServiceDescription(): ?string
    {
        return $this->serviceDescription;
    }

    public function setServiceDescription(?string $serviceDescription): self
    {
        $this->serviceDescription = $serviceDescription;

        return $this;
    }

    public function getServiceDescriptionPayment(): ?string
    {
        return $this->serviceDescriptionPayment;
    }

    public function setServiceDescriptionPayment(string $serviceDescriptionPayment): self
    {
        $this->serviceDescriptionPayment = $serviceDescriptionPayment;

        return $this;
    }

    public function getServiceTerms(): ?string
    {
        return $this->serviceTerms;
    }

    public function setServiceTerms(?string $serviceTerms): self
    {
        $this->serviceTerms = $serviceTerms;

        return $this;
    }

    public function getServiceMemo(): ?string
    {
        return $this->serviceMemo;
    }

    public function setServiceMemo(?string $serviceMemo): self
    {
        $this->serviceMemo = $serviceMemo;

        return $this;
    }

    public function getServicePrice()
    {
        return $this->servicePrice;
    }

    public function setServicePrice($servicePrice): self
    {
        $this->servicePrice = $servicePrice;

        return $this;
    }

    public function getServiceMonths(): ?int
    {
        return $this->serviceMonths;
    }

    public function setServiceMonths(int $serviceMonths): self
    {
        $this->serviceMonths = $serviceMonths;

        return $this;
    }

    public function getServiceMonthsShow(): ?bool
    {
        return $this->serviceMonthsShow;
    }

    public function setServiceMonthsShow(bool $serviceMonthsShow): self
    {
        $this->serviceMonthsShow = $serviceMonthsShow;

        return $this;
    }

    public function getServiceFrom(): ?\DateTimeInterface
    {
        return $this->serviceFrom;
    }

    public function setServiceFrom(?\DateTimeInterface $serviceFrom): self
    {
        $this->serviceFrom = $serviceFrom;

        return $this;
    }

    public function getServiceUntil(): ?\DateTimeInterface
    {
        return $this->serviceUntil;
    }

    public function setServiceUntil(?\DateTimeInterface $serviceUntil): self
    {
        $this->serviceUntil = $serviceUntil;

        return $this;
    }

    public function getServiceReminderDays(): ?int
    {
        return $this->serviceReminderDays;
    }

    public function setServiceReminderDays(int $serviceReminderDays): self
    {
        $this->serviceReminderDays = $serviceReminderDays;

        return $this;
    }

    public function getServiceDefault(): ?bool
    {
        return $this->serviceDefault;
    }

    public function setServiceDefault(bool $serviceDefault): self
    {
        $this->serviceDefault = $serviceDefault;

        return $this;
    }

    public function getServiceAttention(): ?bool
    {
        return $this->serviceAttention;
    }

    public function setServiceAttention(bool $serviceAttention): self
    {
        $this->serviceAttention = $serviceAttention;

        return $this;
    }

    public function getServiceShowcrosses(): ?bool
    {
        return $this->serviceShowcrosses;
    }

    public function setServiceShowcrosses(bool $serviceShowcrosses): self
    {
        $this->serviceShowcrosses = $serviceShowcrosses;

        return $this;
    }

    public function getServiceAlertTitle(): ?string
    {
        return $this->serviceAlertTitle;
    }

    public function setServiceAlertTitle(?string $serviceAlertTitle): self
    {
        $this->serviceAlertTitle = $serviceAlertTitle;

        return $this;
    }

    public function getServiceAlertMessage(): ?string
    {
        return $this->serviceAlertMessage;
    }

    public function setServiceAlertMessage(?string $serviceAlertMessage): self
    {
        $this->serviceAlertMessage = $serviceAlertMessage;

        return $this;
    }

    public function getServiceAlertSticky(): ?bool
    {
        return $this->serviceAlertSticky;
    }

    public function setServiceAlertSticky(bool $serviceAlertSticky): self
    {
        $this->serviceAlertSticky = $serviceAlertSticky;

        return $this;
    }

    public function getServiceAlertLife(): ?int
    {
        return $this->serviceAlertLife;
    }

    public function setServiceAlertLife(int $serviceAlertLife): self
    {
        $this->serviceAlertLife = $serviceAlertLife;

        return $this;
    }

    public function getServiceAlertVertical(): ?string
    {
        return $this->serviceAlertVertical;
    }

    public function setServiceAlertVertical(string $serviceAlertVertical): self
    {
        $this->serviceAlertVertical = $serviceAlertVertical;

        return $this;
    }

    public function getServiceAlertHorizontal(): ?string
    {
        return $this->serviceAlertHorizontal;
    }

    public function setServiceAlertHorizontal(string $serviceAlertHorizontal): self
    {
        $this->serviceAlertHorizontal = $serviceAlertHorizontal;

        return $this;
    }

    public function getServiceAlertActive(): ?bool
    {
        return $this->serviceAlertActive;
    }

    public function setServiceAlertActive(bool $serviceAlertActive): self
    {
        $this->serviceAlertActive = $serviceAlertActive;

        return $this;
    }

    public function getServiceProfile(): ?bool
    {
        return $this->serviceProfile;
    }

    public function setServiceProfile(bool $serviceProfile): self
    {
        $this->serviceProfile = $serviceProfile;

        return $this;
    }

    public function getServiceActive(): ?bool
    {
        return $this->serviceActive;
    }

    public function setServiceActive(bool $serviceActive): self
    {
        $this->serviceActive = $serviceActive;

        return $this;
    }

    public function getServiceOrder(): ?int
    {
        return $this->serviceOrder;
    }

    public function setServiceOrder(int $serviceOrder): self
    {
        $this->serviceOrder = $serviceOrder;

        return $this;
    }

    public function getServiceTax(): ?int
    {
        return $this->serviceTax;
    }

    public function setServiceTax(int $serviceTax): self
    {
        $this->serviceTax = $serviceTax;

        return $this;
    }

    public function getServiceAmountPerPeriod()
    {
        return $this->serviceAmountPerPeriod;
    }

    public function setServiceAmountPerPeriod($serviceAmountPerPeriod): self
    {
        $this->serviceAmountPerPeriod = $serviceAmountPerPeriod;

        return $this;
    }

    public function getServicePeriodInMonths(): ?int
    {
        return $this->servicePeriodInMonths;
    }

    public function setServicePeriodInMonths(?int $servicePeriodInMonths): self
    {
        $this->servicePeriodInMonths = $servicePeriodInMonths;

        return $this;
    }

    public function getServiceContractInMonths(): ?int
    {
        return $this->serviceContractInMonths;
    }

    public function setServiceContractInMonths(?int $serviceContractInMonths): self
    {
        $this->serviceContractInMonths = $serviceContractInMonths;

        return $this;
    }

    public function getServiceTerminateWithinContract(): ?bool
    {
        return $this->serviceTerminateWithinContract;
    }

    public function setServiceTerminateWithinContract(?bool $serviceTerminateWithinContract): self
    {
        $this->serviceTerminateWithinContract = $serviceTerminateWithinContract;

        return $this;
    }

    public function getServiceNoticePeriodInMonths(): ?int
    {
        return $this->serviceNoticePeriodInMonths;
    }

    public function setServiceNoticePeriodInMonths(?int $serviceNoticePeriodInMonths): self
    {
        $this->serviceNoticePeriodInMonths = $serviceNoticePeriodInMonths;

        return $this;
    }

    public function getServiceExtendInMonths(): ?int
    {
        return $this->serviceExtendInMonths;
    }

    public function setServiceExtendInMonths(?int $serviceExtendInMonths): self
    {
        $this->serviceExtendInMonths = $serviceExtendInMonths;

        return $this;
    }

    public function getServiceStartupAmount()
    {
        return $this->serviceStartupAmount;
    }

    public function setServiceStartupAmount($serviceStartupAmount): self
    {
        $this->serviceStartupAmount = $serviceStartupAmount;

        return $this;
    }

    public function getServicePayInOnce(): ?bool
    {
        return $this->servicePayInOnce;
    }

    public function setServicePayInOnce(?bool $servicePayInOnce): self
    {
        $this->servicePayInOnce = $servicePayInOnce;

        return $this;
    }

    public function getServicePayInOnceDiscount(): ?int
    {
        return $this->servicePayInOnceDiscount;
    }

    public function setServicePayInOnceDiscount(?int $servicePayInOnceDiscount): self
    {
        $this->servicePayInOnceDiscount = $servicePayInOnceDiscount;

        return $this;
    }

    public function getServicePaymentDay(): ?int
    {
        return $this->servicePaymentDay;
    }

    public function setServicePaymentDay(?int $servicePaymentDay): self
    {
        $this->servicePaymentDay = $servicePaymentDay;

        return $this;
    }

    public function getServicePaymentDayNextmonth(): ?bool
    {
        return $this->servicePaymentDayNextmonth;
    }

    public function setServicePaymentDayNextmonth(?bool $servicePaymentDayNextmonth): self
    {
        $this->servicePaymentDayNextmonth = $servicePaymentDayNextmonth;

        return $this;
    }

    public function getServiceReversalFee()
    {
        return $this->serviceReversalFee;
    }

    public function setServiceReversalFee($serviceReversalFee): self
    {
        $this->serviceReversalFee = $serviceReversalFee;

        return $this;
    }

    public function getServiceBailiffFee()
    {
        return $this->serviceBailiffFee;
    }

    public function setServiceBailiffFee($serviceBailiffFee): self
    {
        $this->serviceBailiffFee = $serviceBailiffFee;

        return $this;
    }

    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    public function setServiceId(?string $serviceId): self
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    public function getServiceSentInvoice(): ?bool
    {
        return $this->serviceSentInvoice;
    }

    public function setServiceSentInvoice(?bool $serviceSentInvoice): self
    {
        $this->serviceSentInvoice = $serviceSentInvoice;

        return $this;
    }


}
