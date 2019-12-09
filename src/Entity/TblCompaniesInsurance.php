<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesInsurance
 *
 * @ORM\Table(name="tbl_companies_insurance")
 * @ORM\Entity
 */
class TblCompaniesInsurance
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_insurance_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesInsuranceId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var int
     *
     * @ORM\Column(name="insurance_year", type="integer", nullable=false)
     */
    private $insuranceYear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="insurance_ad", type="text", length=65535, nullable=true)
     */
    private $insuranceAd;

    /**
     * @var bool
     *
     * @ORM\Column(name="insurance_cvzo", type="boolean", nullable=false)
     */
    private $insuranceCvzo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="insurance_cvzo_percentage", type="integer", nullable=false)
     */
    private $insuranceCvzoPercentage = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="insurance_declare", type="boolean", nullable=false)
     */
    private $insuranceDeclare = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="insurance_active", type="boolean", nullable=false)
     */
    private $insuranceActive = '0';

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

    public function getTblCompaniesInsuranceId(): ?int
    {
        return $this->tblCompaniesInsuranceId;
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

    public function getInsuranceYear(): ?int
    {
        return $this->insuranceYear;
    }

    public function setInsuranceYear(int $insuranceYear): self
    {
        $this->insuranceYear = $insuranceYear;

        return $this;
    }

    public function getInsuranceAd(): ?string
    {
        return $this->insuranceAd;
    }

    public function setInsuranceAd(?string $insuranceAd): self
    {
        $this->insuranceAd = $insuranceAd;

        return $this;
    }

    public function getInsuranceCvzo(): ?bool
    {
        return $this->insuranceCvzo;
    }

    public function setInsuranceCvzo(bool $insuranceCvzo): self
    {
        $this->insuranceCvzo = $insuranceCvzo;

        return $this;
    }

    public function getInsuranceCvzoPercentage(): ?int
    {
        return $this->insuranceCvzoPercentage;
    }

    public function setInsuranceCvzoPercentage(int $insuranceCvzoPercentage): self
    {
        $this->insuranceCvzoPercentage = $insuranceCvzoPercentage;

        return $this;
    }

    public function getInsuranceDeclare(): ?bool
    {
        return $this->insuranceDeclare;
    }

    public function setInsuranceDeclare(bool $insuranceDeclare): self
    {
        $this->insuranceDeclare = $insuranceDeclare;

        return $this;
    }

    public function getInsuranceActive(): ?bool
    {
        return $this->insuranceActive;
    }

    public function setInsuranceActive(bool $insuranceActive): self
    {
        $this->insuranceActive = $insuranceActive;

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


}
