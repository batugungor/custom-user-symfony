<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesVacancies
 *
 * @ORM\Table(name="tbl_companies_vacancies")
 * @ORM\Entity
 */
class TblCompaniesVacancies
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_vacancies_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesVacanciesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_vacancies_functions_id", type="integer", nullable=false)
     */
    private $tblCompaniesVacanciesFunctionsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vacancy_name", type="string", length=200, nullable=true)
     */
    private $vacancyName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vacancy_hour_min", type="integer", nullable=true)
     */
    private $vacancyHourMin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vacancy_hour_max", type="integer", nullable=true)
     */
    private $vacancyHourMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vacancy_description", type="text", length=65535, nullable=true)
     */
    private $vacancyDescription;

    /**
     * @var bool
     *
     * @ORM\Column(name="vacancy_show_phone", type="boolean", nullable=false, options={"default"="1"})
     */
    private $vacancyShowPhone = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="vacancy_show_website", type="boolean", nullable=false, options={"default"="1"})
     */
    private $vacancyShowWebsite = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vacancy_email", type="string", length=255, nullable=true)
     */
    private $vacancyEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vacancy_area", type="string", length=250, nullable=true)
     */
    private $vacancyArea;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vacancy_anonymous_name", type="string", length=250, nullable=true)
     */
    private $vacancyAnonymousName;

    /**
     * @var bool
     *
     * @ORM\Column(name="vacancy_anonymous", type="boolean", nullable=false)
     */
    private $vacancyAnonymous = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="vacancy_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $vacancyActive = '1';

    public function getTblCompaniesVacanciesId(): ?int
    {
        return $this->tblCompaniesVacanciesId;
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

    public function getTblCompaniesVacanciesFunctionsId(): ?int
    {
        return $this->tblCompaniesVacanciesFunctionsId;
    }

    public function setTblCompaniesVacanciesFunctionsId(int $tblCompaniesVacanciesFunctionsId): self
    {
        $this->tblCompaniesVacanciesFunctionsId = $tblCompaniesVacanciesFunctionsId;

        return $this;
    }

    public function getVacancyName(): ?string
    {
        return $this->vacancyName;
    }

    public function setVacancyName(?string $vacancyName): self
    {
        $this->vacancyName = $vacancyName;

        return $this;
    }

    public function getVacancyHourMin(): ?int
    {
        return $this->vacancyHourMin;
    }

    public function setVacancyHourMin(?int $vacancyHourMin): self
    {
        $this->vacancyHourMin = $vacancyHourMin;

        return $this;
    }

    public function getVacancyHourMax(): ?int
    {
        return $this->vacancyHourMax;
    }

    public function setVacancyHourMax(?int $vacancyHourMax): self
    {
        $this->vacancyHourMax = $vacancyHourMax;

        return $this;
    }

    public function getVacancyDescription(): ?string
    {
        return $this->vacancyDescription;
    }

    public function setVacancyDescription(?string $vacancyDescription): self
    {
        $this->vacancyDescription = $vacancyDescription;

        return $this;
    }

    public function getVacancyShowPhone(): ?bool
    {
        return $this->vacancyShowPhone;
    }

    public function setVacancyShowPhone(bool $vacancyShowPhone): self
    {
        $this->vacancyShowPhone = $vacancyShowPhone;

        return $this;
    }

    public function getVacancyShowWebsite(): ?bool
    {
        return $this->vacancyShowWebsite;
    }

    public function setVacancyShowWebsite(bool $vacancyShowWebsite): self
    {
        $this->vacancyShowWebsite = $vacancyShowWebsite;

        return $this;
    }

    public function getVacancyEmail(): ?string
    {
        return $this->vacancyEmail;
    }

    public function setVacancyEmail(?string $vacancyEmail): self
    {
        $this->vacancyEmail = $vacancyEmail;

        return $this;
    }

    public function getVacancyArea(): ?string
    {
        return $this->vacancyArea;
    }

    public function setVacancyArea(?string $vacancyArea): self
    {
        $this->vacancyArea = $vacancyArea;

        return $this;
    }

    public function getVacancyAnonymousName(): ?string
    {
        return $this->vacancyAnonymousName;
    }

    public function setVacancyAnonymousName(?string $vacancyAnonymousName): self
    {
        $this->vacancyAnonymousName = $vacancyAnonymousName;

        return $this;
    }

    public function getVacancyAnonymous(): ?bool
    {
        return $this->vacancyAnonymous;
    }

    public function setVacancyAnonymous(bool $vacancyAnonymous): self
    {
        $this->vacancyAnonymous = $vacancyAnonymous;

        return $this;
    }

    public function getVacancyActive(): ?bool
    {
        return $this->vacancyActive;
    }

    public function setVacancyActive(bool $vacancyActive): self
    {
        $this->vacancyActive = $vacancyActive;

        return $this;
    }


}
