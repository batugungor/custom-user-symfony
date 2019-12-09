<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesServicesCampaigns
 *
 * @ORM\Table(name="tbl_companies_services_campaigns")
 * @ORM\Entity
 */
class TblCompaniesServicesCampaigns
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_services_campaigns_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesServicesCampaignsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_services_id", type="integer", nullable=true)
     */
    private $tblCompaniesServicesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_templates_id", type="integer", nullable=true)
     */
    private $tblCompaniesTemplatesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_name", type="string", length=100, nullable=true)
     */
    private $campaignName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="campaign_email", type="boolean", nullable=true, options={"default"="1"})
     */
    private $campaignEmail = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="campaign_email_subject", type="string", length=200, nullable=true)
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
     * @ORM\Column(name="campaign_sms_message", type="string", length=500, nullable=true)
     */
    private $campaignSmsMessage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="campaign_days", type="integer", nullable=true)
     */
    private $campaignDays;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="campaign_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $campaignActive = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="campaign_order", type="integer", nullable=true, options={"default"="1"})
     */
    private $campaignOrder = '1';

    public function getTblCompaniesServicesCampaignsId(): ?int
    {
        return $this->tblCompaniesServicesCampaignsId;
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

    public function getTblCompaniesServicesId(): ?int
    {
        return $this->tblCompaniesServicesId;
    }

    public function setTblCompaniesServicesId(?int $tblCompaniesServicesId): self
    {
        $this->tblCompaniesServicesId = $tblCompaniesServicesId;

        return $this;
    }

    public function getTblCompaniesTemplatesId(): ?int
    {
        return $this->tblCompaniesTemplatesId;
    }

    public function setTblCompaniesTemplatesId(?int $tblCompaniesTemplatesId): self
    {
        $this->tblCompaniesTemplatesId = $tblCompaniesTemplatesId;

        return $this;
    }

    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;

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

    public function getCampaignSmsMessage(): ?string
    {
        return $this->campaignSmsMessage;
    }

    public function setCampaignSmsMessage(?string $campaignSmsMessage): self
    {
        $this->campaignSmsMessage = $campaignSmsMessage;

        return $this;
    }

    public function getCampaignDays(): ?int
    {
        return $this->campaignDays;
    }

    public function setCampaignDays(?int $campaignDays): self
    {
        $this->campaignDays = $campaignDays;

        return $this;
    }

    public function getCampaignActive(): ?bool
    {
        return $this->campaignActive;
    }

    public function setCampaignActive(?bool $campaignActive): self
    {
        $this->campaignActive = $campaignActive;

        return $this;
    }

    public function getCampaignOrder(): ?int
    {
        return $this->campaignOrder;
    }

    public function setCampaignOrder(?int $campaignOrder): self
    {
        $this->campaignOrder = $campaignOrder;

        return $this;
    }


}
