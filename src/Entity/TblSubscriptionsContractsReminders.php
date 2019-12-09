<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsContractsReminders
 *
 * @ORM\Table(name="tbl_subscriptions_contracts_reminders")
 * @ORM\Entity
 */
class TblSubscriptionsContractsReminders
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_contracts_reminders_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsContractsRemindersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_subscriptions_contracts_id", type="integer", nullable=true)
     */
    private $tblSubscriptionsContractsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_languages_id", type="integer", nullable=true)
     */
    private $tblSystemLanguagesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_name", type="string", length=150, nullable=true)
     */
    private $reminderName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_email", type="boolean", nullable=true)
     */
    private $reminderEmail = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_email_subject", type="string", length=150, nullable=true)
     */
    private $reminderEmailSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_email_message", type="text", length=65535, nullable=true)
     */
    private $reminderEmailMessage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_sms", type="boolean", nullable=true)
     */
    private $reminderSms = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_sms_message", type="string", length=1000, nullable=true)
     */
    private $reminderSmsMessage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reminder_days", type="integer", nullable=true)
     */
    private $reminderDays;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_bailiff", type="boolean", nullable=true)
     */
    private $reminderBailiff = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $reminderActive = '1';

    public function getTblSubscriptionsContractsRemindersId(): ?int
    {
        return $this->tblSubscriptionsContractsRemindersId;
    }

    public function getTblSubscriptionsContractsId(): ?int
    {
        return $this->tblSubscriptionsContractsId;
    }

    public function setTblSubscriptionsContractsId(?int $tblSubscriptionsContractsId): self
    {
        $this->tblSubscriptionsContractsId = $tblSubscriptionsContractsId;

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

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(?int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getReminderName(): ?string
    {
        return $this->reminderName;
    }

    public function setReminderName(?string $reminderName): self
    {
        $this->reminderName = $reminderName;

        return $this;
    }

    public function getReminderEmail(): ?bool
    {
        return $this->reminderEmail;
    }

    public function setReminderEmail(?bool $reminderEmail): self
    {
        $this->reminderEmail = $reminderEmail;

        return $this;
    }

    public function getReminderEmailSubject(): ?string
    {
        return $this->reminderEmailSubject;
    }

    public function setReminderEmailSubject(?string $reminderEmailSubject): self
    {
        $this->reminderEmailSubject = $reminderEmailSubject;

        return $this;
    }

    public function getReminderEmailMessage(): ?string
    {
        return $this->reminderEmailMessage;
    }

    public function setReminderEmailMessage(?string $reminderEmailMessage): self
    {
        $this->reminderEmailMessage = $reminderEmailMessage;

        return $this;
    }

    public function getReminderSms(): ?bool
    {
        return $this->reminderSms;
    }

    public function setReminderSms(?bool $reminderSms): self
    {
        $this->reminderSms = $reminderSms;

        return $this;
    }

    public function getReminderSmsMessage(): ?string
    {
        return $this->reminderSmsMessage;
    }

    public function setReminderSmsMessage(?string $reminderSmsMessage): self
    {
        $this->reminderSmsMessage = $reminderSmsMessage;

        return $this;
    }

    public function getReminderDays(): ?int
    {
        return $this->reminderDays;
    }

    public function setReminderDays(?int $reminderDays): self
    {
        $this->reminderDays = $reminderDays;

        return $this;
    }

    public function getReminderBailiff(): ?bool
    {
        return $this->reminderBailiff;
    }

    public function setReminderBailiff(?bool $reminderBailiff): self
    {
        $this->reminderBailiff = $reminderBailiff;

        return $this;
    }

    public function getReminderActive(): ?bool
    {
        return $this->reminderActive;
    }

    public function setReminderActive(?bool $reminderActive): self
    {
        $this->reminderActive = $reminderActive;

        return $this;
    }


}
