<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesAppointmentsOptions
 *
 * @ORM\Table(name="tbl_companies_appointments_options")
 * @ORM\Entity
 */
class TblCompaniesAppointmentsOptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_appointments_options_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesAppointmentsOptionsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=false)
     */
    private $tblCompaniesUsersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="option_name", type="string", length=250, nullable=true)
     */
    private $optionName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="option_days", type="string", length=45, nullable=true)
     */
    private $optionDays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_reminder", type="integer", nullable=true, options={"default"="24"})
     */
    private $optionReminder = '24';

    /**
     * @var int|null
     *
     * @ORM\Column(name="option_reminder_2", type="integer", nullable=true, options={"default"="1"})
     */
    private $optionReminder2 = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="option_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $optionActive = '1';

    public function getTblCompaniesAppointmentsOptionsId(): ?int
    {
        return $this->tblCompaniesAppointmentsOptionsId;
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

    public function getTblCompaniesUsersId(): ?int
    {
        return $this->tblCompaniesUsersId;
    }

    public function setTblCompaniesUsersId(int $tblCompaniesUsersId): self
    {
        $this->tblCompaniesUsersId = $tblCompaniesUsersId;

        return $this;
    }

    public function getOptionName(): ?string
    {
        return $this->optionName;
    }

    public function setOptionName(?string $optionName): self
    {
        $this->optionName = $optionName;

        return $this;
    }

    public function getOptionDays(): ?string
    {
        return $this->optionDays;
    }

    public function setOptionDays(?string $optionDays): self
    {
        $this->optionDays = $optionDays;

        return $this;
    }

    public function getOptionReminder(): ?int
    {
        return $this->optionReminder;
    }

    public function setOptionReminder(?int $optionReminder): self
    {
        $this->optionReminder = $optionReminder;

        return $this;
    }

    public function getOptionReminder2(): ?int
    {
        return $this->optionReminder2;
    }

    public function setOptionReminder2(?int $optionReminder2): self
    {
        $this->optionReminder2 = $optionReminder2;

        return $this;
    }

    public function getOptionActive(): ?bool
    {
        return $this->optionActive;
    }

    public function setOptionActive(?bool $optionActive): self
    {
        $this->optionActive = $optionActive;

        return $this;
    }


}
