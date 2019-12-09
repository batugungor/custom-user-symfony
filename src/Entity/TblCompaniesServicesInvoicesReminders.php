<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesServicesInvoicesReminders
 *
 * @ORM\Table(name="tbl_companies_services_invoices_reminders")
 * @ORM\Entity
 */
class TblCompaniesServicesInvoicesReminders
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_services_invoices_reminders_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesServicesInvoicesRemindersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_services_invoices_id", type="integer", nullable=true)
     */
    private $tblCompaniesServicesInvoicesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_services_reminders_id", type="integer", nullable=true)
     */
    private $tblCompaniesServicesRemindersId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_sent", type="boolean", nullable=true)
     */
    private $reminderSent = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reminder_sent_date", type="datetime", nullable=true)
     */
    private $reminderSentDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reminder_date", type="datetime", nullable=true)
     */
    private $reminderDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_email", type="boolean", nullable=true)
     */
    private $reminderEmail = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_email_name", type="string", length=100, nullable=true)
     */
    private $reminderEmailName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_email_from", type="string", length=255, nullable=true)
     */
    private $reminderEmailFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_email_to", type="string", length=100, nullable=true)
     */
    private $reminderEmailTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_email_cc", type="string", length=150, nullable=true)
     */
    private $reminderEmailCc;

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
     * @ORM\Column(name="reminder_sms_from", type="string", length=100, nullable=true)
     */
    private $reminderSmsFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_sms_to", type="string", length=45, nullable=true)
     */
    private $reminderSmsTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_sms_message", type="string", length=1000, nullable=true)
     */
    private $reminderSmsMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_sms_response", type="string", length=2500, nullable=true)
     */
    private $reminderSmsResponse;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_bailiff", type="boolean", nullable=true)
     */
    private $reminderBailiff = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="reminder_sent_error", type="boolean", nullable=false)
     */
    private $reminderSentError = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reminder_sent_error_date", type="datetime", nullable=true)
     */
    private $reminderSentErrorDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_open", type="boolean", nullable=true)
     */
    private $reminderOpen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_response", type="string", length=1000, nullable=true)
     */
    private $emailResponse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_reponse_id", type="string", length=150, nullable=true)
     */
    private $emailReponseId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_reponse_message", type="string", length=250, nullable=true)
     */
    private $emailReponseMessage;

    public function getTblCompaniesServicesInvoicesRemindersId(): ?int
    {
        return $this->tblCompaniesServicesInvoicesRemindersId;
    }

    public function getTblCompaniesServicesInvoicesId(): ?int
    {
        return $this->tblCompaniesServicesInvoicesId;
    }

    public function setTblCompaniesServicesInvoicesId(?int $tblCompaniesServicesInvoicesId): self
    {
        $this->tblCompaniesServicesInvoicesId = $tblCompaniesServicesInvoicesId;

        return $this;
    }

    public function getTblCompaniesServicesRemindersId(): ?int
    {
        return $this->tblCompaniesServicesRemindersId;
    }

    public function setTblCompaniesServicesRemindersId(?int $tblCompaniesServicesRemindersId): self
    {
        $this->tblCompaniesServicesRemindersId = $tblCompaniesServicesRemindersId;

        return $this;
    }

    public function getReminderSent(): ?bool
    {
        return $this->reminderSent;
    }

    public function setReminderSent(?bool $reminderSent): self
    {
        $this->reminderSent = $reminderSent;

        return $this;
    }

    public function getReminderSentDate(): ?\DateTimeInterface
    {
        return $this->reminderSentDate;
    }

    public function setReminderSentDate(?\DateTimeInterface $reminderSentDate): self
    {
        $this->reminderSentDate = $reminderSentDate;

        return $this;
    }

    public function getReminderDate(): ?\DateTimeInterface
    {
        return $this->reminderDate;
    }

    public function setReminderDate(?\DateTimeInterface $reminderDate): self
    {
        $this->reminderDate = $reminderDate;

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

    public function getReminderEmailName(): ?string
    {
        return $this->reminderEmailName;
    }

    public function setReminderEmailName(?string $reminderEmailName): self
    {
        $this->reminderEmailName = $reminderEmailName;

        return $this;
    }

    public function getReminderEmailFrom(): ?string
    {
        return $this->reminderEmailFrom;
    }

    public function setReminderEmailFrom(?string $reminderEmailFrom): self
    {
        $this->reminderEmailFrom = $reminderEmailFrom;

        return $this;
    }

    public function getReminderEmailTo(): ?string
    {
        return $this->reminderEmailTo;
    }

    public function setReminderEmailTo(?string $reminderEmailTo): self
    {
        $this->reminderEmailTo = $reminderEmailTo;

        return $this;
    }

    public function getReminderEmailCc(): ?string
    {
        return $this->reminderEmailCc;
    }

    public function setReminderEmailCc(?string $reminderEmailCc): self
    {
        $this->reminderEmailCc = $reminderEmailCc;

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

    public function getReminderSmsFrom(): ?string
    {
        return $this->reminderSmsFrom;
    }

    public function setReminderSmsFrom(?string $reminderSmsFrom): self
    {
        $this->reminderSmsFrom = $reminderSmsFrom;

        return $this;
    }

    public function getReminderSmsTo(): ?string
    {
        return $this->reminderSmsTo;
    }

    public function setReminderSmsTo(?string $reminderSmsTo): self
    {
        $this->reminderSmsTo = $reminderSmsTo;

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

    public function getReminderSmsResponse(): ?string
    {
        return $this->reminderSmsResponse;
    }

    public function setReminderSmsResponse(?string $reminderSmsResponse): self
    {
        $this->reminderSmsResponse = $reminderSmsResponse;

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

    public function getReminderSentError(): ?bool
    {
        return $this->reminderSentError;
    }

    public function setReminderSentError(bool $reminderSentError): self
    {
        $this->reminderSentError = $reminderSentError;

        return $this;
    }

    public function getReminderSentErrorDate(): ?\DateTimeInterface
    {
        return $this->reminderSentErrorDate;
    }

    public function setReminderSentErrorDate(?\DateTimeInterface $reminderSentErrorDate): self
    {
        $this->reminderSentErrorDate = $reminderSentErrorDate;

        return $this;
    }

    public function getReminderOpen(): ?bool
    {
        return $this->reminderOpen;
    }

    public function setReminderOpen(?bool $reminderOpen): self
    {
        $this->reminderOpen = $reminderOpen;

        return $this;
    }

    public function getEmailResponse(): ?string
    {
        return $this->emailResponse;
    }

    public function setEmailResponse(?string $emailResponse): self
    {
        $this->emailResponse = $emailResponse;

        return $this;
    }

    public function getEmailReponseId(): ?string
    {
        return $this->emailReponseId;
    }

    public function setEmailReponseId(?string $emailReponseId): self
    {
        $this->emailReponseId = $emailReponseId;

        return $this;
    }

    public function getEmailReponseMessage(): ?string
    {
        return $this->emailReponseMessage;
    }

    public function setEmailReponseMessage(?string $emailReponseMessage): self
    {
        $this->emailReponseMessage = $emailReponseMessage;

        return $this;
    }


}
