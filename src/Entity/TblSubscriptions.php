<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptions
 *
 * @ORM\Table(name="tbl_subscriptions")
 * @ORM\Entity
 */
class TblSubscriptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscription_name", type="string", length=250, nullable=true)
     */
    private $subscriptionName = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscription_description", type="text", length=65535, nullable=true)
     */
    private $subscriptionDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscription_memo", type="text", length=65535, nullable=true)
     */
    private $subscriptionMemo;

    /**
     * @var string
     *
     * @ORM\Column(name="subscription_price", type="decimal", precision=6, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $subscriptionPrice = '0.00';

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_months", type="integer", nullable=false, options={"default"="12"})
     */
    private $subscriptionMonths = '12';

    /**
     * @var bool
     *
     * @ORM\Column(name="subscription_months_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subscriptionMonthsShow = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_offers", type="integer", nullable=false)
     */
    private $subscriptionOffers = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_blogs", type="integer", nullable=false)
     */
    private $subscriptionBlogs = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_news_b2b", type="integer", nullable=false)
     */
    private $subscriptionNewsB2b;

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_news_b2c", type="integer", nullable=false)
     */
    private $subscriptionNewsB2c;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="subscription_from", type="datetime", nullable=true)
     */
    private $subscriptionFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="subscription_until", type="datetime", nullable=true)
     */
    private $subscriptionUntil;

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_reminder_days", type="integer", nullable=false, options={"default"="30"})
     */
    private $subscriptionReminderDays = '30';

    /**
     * @var bool
     *
     * @ORM\Column(name="subscription_default", type="boolean", nullable=false)
     */
    private $subscriptionDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="subscription_attention", type="boolean", nullable=false)
     */
    private $subscriptionAttention = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="subscription_showcrosses", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subscriptionShowcrosses = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscription_alert_title", type="string", length=250, nullable=true)
     */
    private $subscriptionAlertTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscription_alert_message", type="text", length=65535, nullable=true)
     */
    private $subscriptionAlertMessage;

    /**
     * @var bool
     *
     * @ORM\Column(name="subscription_alert_sticky", type="boolean", nullable=false)
     */
    private $subscriptionAlertSticky = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_alert_life", type="integer", nullable=false, options={"default"="10"})
     */
    private $subscriptionAlertLife = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="subscription_alert_vertical", type="string", length=100, nullable=false, options={"default"="right"})
     */
    private $subscriptionAlertVertical = 'right';

    /**
     * @var string
     *
     * @ORM\Column(name="subscription_alert_horizontal", type="string", length=100, nullable=false, options={"default"="bottom"})
     */
    private $subscriptionAlertHorizontal = 'bottom';

    /**
     * @var bool
     *
     * @ORM\Column(name="subscription_alert_active", type="boolean", nullable=false)
     */
    private $subscriptionAlertActive = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="subscription_profile", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subscriptionProfile = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="subscription_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subscriptionActive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_order", type="integer", nullable=false, options={"default"="1"})
     */
    private $subscriptionOrder = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_tax", type="integer", nullable=false, options={"default"="21"})
     */
    private $subscriptionTax = '21';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscription_amount_per_period", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $subscriptionAmountPerPeriod = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="subscription_period_in_months", type="integer", nullable=true, options={"default"="1"})
     */
    private $subscriptionPeriodInMonths = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="subscription_contract_in_months", type="integer", nullable=true, options={"default"="12"})
     */
    private $subscriptionContractInMonths = '12';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="subscription_terminate_within_contract", type="boolean", nullable=true, options={"default"="1"})
     */
    private $subscriptionTerminateWithinContract = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="subscription_notice_period_in_months", type="integer", nullable=true, options={"default"="1"})
     */
    private $subscriptionNoticePeriodInMonths = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="subscription_extend_in_months", type="integer", nullable=true, options={"default"="12"})
     */
    private $subscriptionExtendInMonths = '12';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscription_startup_amount", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $subscriptionStartupAmount = '0.00';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="subscription_pay_in_once", type="boolean", nullable=true, options={"default"="1"})
     */
    private $subscriptionPayInOnce = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="subscription_pay_in_once_discount", type="integer", nullable=true, options={"default"="10"})
     */
    private $subscriptionPayInOnceDiscount = '10';

    /**
     * @var int|null
     *
     * @ORM\Column(name="subscription_payment_day", type="integer", nullable=true, options={"default"="1"})
     */
    private $subscriptionPaymentDay = '1';

    public function getTblSubscriptionsId(): ?int
    {
        return $this->tblSubscriptionsId;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(?int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getSubscriptionName(): ?string
    {
        return $this->subscriptionName;
    }

    public function setSubscriptionName(?string $subscriptionName): self
    {
        $this->subscriptionName = $subscriptionName;

        return $this;
    }

    public function getSubscriptionDescription(): ?string
    {
        return $this->subscriptionDescription;
    }

    public function setSubscriptionDescription(?string $subscriptionDescription): self
    {
        $this->subscriptionDescription = $subscriptionDescription;

        return $this;
    }

    public function getSubscriptionMemo(): ?string
    {
        return $this->subscriptionMemo;
    }

    public function setSubscriptionMemo(?string $subscriptionMemo): self
    {
        $this->subscriptionMemo = $subscriptionMemo;

        return $this;
    }

    public function getSubscriptionPrice()
    {
        return $this->subscriptionPrice;
    }

    public function setSubscriptionPrice($subscriptionPrice): self
    {
        $this->subscriptionPrice = $subscriptionPrice;

        return $this;
    }

    public function getSubscriptionMonths(): ?int
    {
        return $this->subscriptionMonths;
    }

    public function setSubscriptionMonths(int $subscriptionMonths): self
    {
        $this->subscriptionMonths = $subscriptionMonths;

        return $this;
    }

    public function getSubscriptionMonthsShow(): ?bool
    {
        return $this->subscriptionMonthsShow;
    }

    public function setSubscriptionMonthsShow(bool $subscriptionMonthsShow): self
    {
        $this->subscriptionMonthsShow = $subscriptionMonthsShow;

        return $this;
    }

    public function getSubscriptionOffers(): ?int
    {
        return $this->subscriptionOffers;
    }

    public function setSubscriptionOffers(int $subscriptionOffers): self
    {
        $this->subscriptionOffers = $subscriptionOffers;

        return $this;
    }

    public function getSubscriptionBlogs(): ?int
    {
        return $this->subscriptionBlogs;
    }

    public function setSubscriptionBlogs(int $subscriptionBlogs): self
    {
        $this->subscriptionBlogs = $subscriptionBlogs;

        return $this;
    }

    public function getSubscriptionNewsB2b(): ?int
    {
        return $this->subscriptionNewsB2b;
    }

    public function setSubscriptionNewsB2b(int $subscriptionNewsB2b): self
    {
        $this->subscriptionNewsB2b = $subscriptionNewsB2b;

        return $this;
    }

    public function getSubscriptionNewsB2c(): ?int
    {
        return $this->subscriptionNewsB2c;
    }

    public function setSubscriptionNewsB2c(int $subscriptionNewsB2c): self
    {
        $this->subscriptionNewsB2c = $subscriptionNewsB2c;

        return $this;
    }

    public function getSubscriptionFrom(): ?\DateTimeInterface
    {
        return $this->subscriptionFrom;
    }

    public function setSubscriptionFrom(?\DateTimeInterface $subscriptionFrom): self
    {
        $this->subscriptionFrom = $subscriptionFrom;

        return $this;
    }

    public function getSubscriptionUntil(): ?\DateTimeInterface
    {
        return $this->subscriptionUntil;
    }

    public function setSubscriptionUntil(?\DateTimeInterface $subscriptionUntil): self
    {
        $this->subscriptionUntil = $subscriptionUntil;

        return $this;
    }

    public function getSubscriptionReminderDays(): ?int
    {
        return $this->subscriptionReminderDays;
    }

    public function setSubscriptionReminderDays(int $subscriptionReminderDays): self
    {
        $this->subscriptionReminderDays = $subscriptionReminderDays;

        return $this;
    }

    public function getSubscriptionDefault(): ?bool
    {
        return $this->subscriptionDefault;
    }

    public function setSubscriptionDefault(bool $subscriptionDefault): self
    {
        $this->subscriptionDefault = $subscriptionDefault;

        return $this;
    }

    public function getSubscriptionAttention(): ?bool
    {
        return $this->subscriptionAttention;
    }

    public function setSubscriptionAttention(bool $subscriptionAttention): self
    {
        $this->subscriptionAttention = $subscriptionAttention;

        return $this;
    }

    public function getSubscriptionShowcrosses(): ?bool
    {
        return $this->subscriptionShowcrosses;
    }

    public function setSubscriptionShowcrosses(bool $subscriptionShowcrosses): self
    {
        $this->subscriptionShowcrosses = $subscriptionShowcrosses;

        return $this;
    }

    public function getSubscriptionAlertTitle(): ?string
    {
        return $this->subscriptionAlertTitle;
    }

    public function setSubscriptionAlertTitle(?string $subscriptionAlertTitle): self
    {
        $this->subscriptionAlertTitle = $subscriptionAlertTitle;

        return $this;
    }

    public function getSubscriptionAlertMessage(): ?string
    {
        return $this->subscriptionAlertMessage;
    }

    public function setSubscriptionAlertMessage(?string $subscriptionAlertMessage): self
    {
        $this->subscriptionAlertMessage = $subscriptionAlertMessage;

        return $this;
    }

    public function getSubscriptionAlertSticky(): ?bool
    {
        return $this->subscriptionAlertSticky;
    }

    public function setSubscriptionAlertSticky(bool $subscriptionAlertSticky): self
    {
        $this->subscriptionAlertSticky = $subscriptionAlertSticky;

        return $this;
    }

    public function getSubscriptionAlertLife(): ?int
    {
        return $this->subscriptionAlertLife;
    }

    public function setSubscriptionAlertLife(int $subscriptionAlertLife): self
    {
        $this->subscriptionAlertLife = $subscriptionAlertLife;

        return $this;
    }

    public function getSubscriptionAlertVertical(): ?string
    {
        return $this->subscriptionAlertVertical;
    }

    public function setSubscriptionAlertVertical(string $subscriptionAlertVertical): self
    {
        $this->subscriptionAlertVertical = $subscriptionAlertVertical;

        return $this;
    }

    public function getSubscriptionAlertHorizontal(): ?string
    {
        return $this->subscriptionAlertHorizontal;
    }

    public function setSubscriptionAlertHorizontal(string $subscriptionAlertHorizontal): self
    {
        $this->subscriptionAlertHorizontal = $subscriptionAlertHorizontal;

        return $this;
    }

    public function getSubscriptionAlertActive(): ?bool
    {
        return $this->subscriptionAlertActive;
    }

    public function setSubscriptionAlertActive(bool $subscriptionAlertActive): self
    {
        $this->subscriptionAlertActive = $subscriptionAlertActive;

        return $this;
    }

    public function getSubscriptionProfile(): ?bool
    {
        return $this->subscriptionProfile;
    }

    public function setSubscriptionProfile(bool $subscriptionProfile): self
    {
        $this->subscriptionProfile = $subscriptionProfile;

        return $this;
    }

    public function getSubscriptionActive(): ?bool
    {
        return $this->subscriptionActive;
    }

    public function setSubscriptionActive(bool $subscriptionActive): self
    {
        $this->subscriptionActive = $subscriptionActive;

        return $this;
    }

    public function getSubscriptionOrder(): ?int
    {
        return $this->subscriptionOrder;
    }

    public function setSubscriptionOrder(int $subscriptionOrder): self
    {
        $this->subscriptionOrder = $subscriptionOrder;

        return $this;
    }

    public function getSubscriptionTax(): ?int
    {
        return $this->subscriptionTax;
    }

    public function setSubscriptionTax(int $subscriptionTax): self
    {
        $this->subscriptionTax = $subscriptionTax;

        return $this;
    }

    public function getSubscriptionAmountPerPeriod()
    {
        return $this->subscriptionAmountPerPeriod;
    }

    public function setSubscriptionAmountPerPeriod($subscriptionAmountPerPeriod): self
    {
        $this->subscriptionAmountPerPeriod = $subscriptionAmountPerPeriod;

        return $this;
    }

    public function getSubscriptionPeriodInMonths(): ?int
    {
        return $this->subscriptionPeriodInMonths;
    }

    public function setSubscriptionPeriodInMonths(?int $subscriptionPeriodInMonths): self
    {
        $this->subscriptionPeriodInMonths = $subscriptionPeriodInMonths;

        return $this;
    }

    public function getSubscriptionContractInMonths(): ?int
    {
        return $this->subscriptionContractInMonths;
    }

    public function setSubscriptionContractInMonths(?int $subscriptionContractInMonths): self
    {
        $this->subscriptionContractInMonths = $subscriptionContractInMonths;

        return $this;
    }

    public function getSubscriptionTerminateWithinContract(): ?bool
    {
        return $this->subscriptionTerminateWithinContract;
    }

    public function setSubscriptionTerminateWithinContract(?bool $subscriptionTerminateWithinContract): self
    {
        $this->subscriptionTerminateWithinContract = $subscriptionTerminateWithinContract;

        return $this;
    }

    public function getSubscriptionNoticePeriodInMonths(): ?int
    {
        return $this->subscriptionNoticePeriodInMonths;
    }

    public function setSubscriptionNoticePeriodInMonths(?int $subscriptionNoticePeriodInMonths): self
    {
        $this->subscriptionNoticePeriodInMonths = $subscriptionNoticePeriodInMonths;

        return $this;
    }

    public function getSubscriptionExtendInMonths(): ?int
    {
        return $this->subscriptionExtendInMonths;
    }

    public function setSubscriptionExtendInMonths(?int $subscriptionExtendInMonths): self
    {
        $this->subscriptionExtendInMonths = $subscriptionExtendInMonths;

        return $this;
    }

    public function getSubscriptionStartupAmount()
    {
        return $this->subscriptionStartupAmount;
    }

    public function setSubscriptionStartupAmount($subscriptionStartupAmount): self
    {
        $this->subscriptionStartupAmount = $subscriptionStartupAmount;

        return $this;
    }

    public function getSubscriptionPayInOnce(): ?bool
    {
        return $this->subscriptionPayInOnce;
    }

    public function setSubscriptionPayInOnce(?bool $subscriptionPayInOnce): self
    {
        $this->subscriptionPayInOnce = $subscriptionPayInOnce;

        return $this;
    }

    public function getSubscriptionPayInOnceDiscount(): ?int
    {
        return $this->subscriptionPayInOnceDiscount;
    }

    public function setSubscriptionPayInOnceDiscount(?int $subscriptionPayInOnceDiscount): self
    {
        $this->subscriptionPayInOnceDiscount = $subscriptionPayInOnceDiscount;

        return $this;
    }

    public function getSubscriptionPaymentDay(): ?int
    {
        return $this->subscriptionPaymentDay;
    }

    public function setSubscriptionPaymentDay(?int $subscriptionPaymentDay): self
    {
        $this->subscriptionPaymentDay = $subscriptionPaymentDay;

        return $this;
    }


}
