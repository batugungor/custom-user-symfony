<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesServicesContractsCampaigns
 *
 * @ORM\Table(name="tbl_companies_services_contracts_campaigns")
 * @ORM\Entity
 */
class TblCompaniesServicesContractsCampaigns
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_services_contracts_campaigns_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesServicesContractsCampaignsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_services_campaigns_id", type="integer", nullable=true)
     */
    private $tblCompaniesServicesCampaignsId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="campaign_sent", type="boolean", nullable=true)
     */
    private $campaignSent = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="campaign_sent_date", type="datetime", nullable=true)
     */
    private $campaignSentDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="campaign_date", type="datetime", nullable=true)
     */
    private $campaignDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="campaign_email", type="boolean", nullable=true)
     */
    private $campaignEmail = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_email_name", type="string", length=100, nullable=true)
     */
    private $campaignEmailName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_email_from", type="string", length=255, nullable=true)
     */
    private $campaignEmailFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_email_to", type="string", length=100, nullable=true)
     */
    private $campaignEmailTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_email_subject", type="string", length=150, nullable=true)
     */
    private $campaignEmailSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_email_message", type="text", length=65535, nullable=true)
     */
    private $campaignEmailMessage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="campaign_sms", type="boolean", nullable=true)
     */
    private $campaignSms = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_sms_from", type="string", length=100, nullable=true)
     */
    private $campaignSmsFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_sms_to", type="string", length=45, nullable=true)
     */
    private $campaignSmsTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_sms_message", type="string", length=1000, nullable=true)
     */
    private $campaignSmsMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_sms_response", type="string", length=2500, nullable=true)
     */
    private $campaignSmsResponse;

    /**
     * @var bool
     *
     * @ORM\Column(name="campaign_sent_error", type="boolean", nullable=false)
     */
    private $campaignSentError = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="campaign_sent_error_date", type="datetime", nullable=true)
     */
    private $campaignSentErrorDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="campaign_open", type="boolean", nullable=true)
     */
    private $campaignOpen = '0';

    public function getTblCompaniesServicesContractsCampaignsId(): ?int
    {
        return $this->tblCompaniesServicesContractsCampaignsId;
    }

    public function getTblCompaniesServicesCampaignsId(): ?int
    {
        return $this->tblCompaniesServicesCampaignsId;
    }

    public function setTblCompaniesServicesCampaignsId(?int $tblCompaniesServicesCampaignsId): self
    {
        $this->tblCompaniesServicesCampaignsId = $tblCompaniesServicesCampaignsId;

        return $this;
    }

    public function getCampaignSent(): ?bool
    {
        return $this->campaignSent;
    }

    public function setCampaignSent(?bool $campaignSent): self
    {
        $this->campaignSent = $campaignSent;

        return $this;
    }

    public function getCampaignSentDate(): ?\DateTimeInterface
    {
        return $this->campaignSentDate;
    }

    public function setCampaignSentDate(?\DateTimeInterface $campaignSentDate): self
    {
        $this->campaignSentDate = $campaignSentDate;

        return $this;
    }

    public function getCampaignDate(): ?\DateTimeInterface
    {
        return $this->campaignDate;
    }

    public function setCampaignDate(?\DateTimeInterface $campaignDate): self
    {
        $this->campaignDate = $campaignDate;

        return $this;
    }

    public function getCampaignEmail(): ?bool
    {
        return $this->campaignEmail;
    }

    public function setCampaignEmail(?bool $campaignEmail): self
    {
        $this->campaignEmail = $campaignEmail;

        return $this;
    }

    public function getCampaignEmailName(): ?string
    {
        return $this->campaignEmailName;
    }

    public function setCampaignEmailName(?string $campaignEmailName): self
    {
        $this->campaignEmailName = $campaignEmailName;

        return $this;
    }

    public function getCampaignEmailFrom(): ?string
    {
        return $this->campaignEmailFrom;
    }

    public function setCampaignEmailFrom(?string $campaignEmailFrom): self
    {
        $this->campaignEmailFrom = $campaignEmailFrom;

        return $this;
    }

    public function getCampaignEmailTo(): ?string
    {
        return $this->campaignEmailTo;
    }

    public function setCampaignEmailTo(?string $campaignEmailTo): self
    {
        $this->campaignEmailTo = $campaignEmailTo;

        return $this;
    }

    public function getCampaignEmailSubject(): ?string
    {
        return $this->campaignEmailSubject;
    }

    public function setCampaignEmailSubject(?string $campaignEmailSubject): self
    {
        $this->campaignEmailSubject = $campaignEmailSubject;

        return $this;
    }

    public function getCampaignEmailMessage(): ?string
    {
        return $this->campaignEmailMessage;
    }

    public function setCampaignEmailMessage(?string $campaignEmailMessage): self
    {
        $this->campaignEmailMessage = $campaignEmailMessage;

        return $this;
    }

    public function getCampaignSms(): ?bool
    {
        return $this->campaignSms;
    }

    public function setCampaignSms(?bool $campaignSms): self
    {
        $this->campaignSms = $campaignSms;

        return $this;
    }

    public function getCampaignSmsFrom(): ?string
    {
        return $this->campaignSmsFrom;
    }

    public function setCampaignSmsFrom(?string $campaignSmsFrom): self
    {
        $this->campaignSmsFrom = $campaignSmsFrom;

        return $this;
    }

    public function getCampaignSmsTo(): ?string
    {
        return $this->campaignSmsTo;
    }

    public function setCampaignSmsTo(?string $campaignSmsTo): self
    {
        $this->campaignSmsTo = $campaignSmsTo;

        return $this;
    }

    public function getCampaignSmsMessage(): ?string
    {
        return $this->campaignSmsMessage;
    }

    public function setCampaignSmsMessage(?string $campaignSmsMessage): self
    {
        $this->campaignSmsMessage = $campaignSmsMessage;

        return $this;
    }

    public function getCampaignSmsResponse(): ?string
    {
        return $this->campaignSmsResponse;
    }

    public function setCampaignSmsResponse(?string $campaignSmsResponse): self
    {
        $this->campaignSmsResponse = $campaignSmsResponse;

        return $this;
    }

    public function getCampaignSentError(): ?bool
    {
        return $this->campaignSentError;
    }

    public function setCampaignSentError(bool $campaignSentError): self
    {
        $this->campaignSentError = $campaignSentError;

        return $this;
    }

    public function getCampaignSentErrorDate(): ?\DateTimeInterface
    {
        return $this->campaignSentErrorDate;
    }

    public function setCampaignSentErrorDate(?\DateTimeInterface $campaignSentErrorDate): self
    {
        $this->campaignSentErrorDate = $campaignSentErrorDate;

        return $this;
    }

    public function getCampaignOpen(): ?bool
    {
        return $this->campaignOpen;
    }

    public function setCampaignOpen(?bool $campaignOpen): self
    {
        $this->campaignOpen = $campaignOpen;

        return $this;
    }


}
