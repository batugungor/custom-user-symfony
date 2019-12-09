<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesAppointments
 *
 * @ORM\Table(name="tbl_companies_appointments")
 * @ORM\Entity
 */
class TblCompaniesAppointments
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_appointments_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesAppointmentsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_appointments_options_id", type="integer", nullable=true)
     */
    private $tblCompaniesAppointmentsOptionsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_customers_id", type="integer", nullable=true)
     */
    private $tblCompaniesCustomersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=true)
     */
    private $tblCompaniesUsersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_members_id", type="integer", nullable=true)
     */
    private $tblMembersId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="appointment_date_created", type="datetime", nullable=true)
     */
    private $appointmentDateCreated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="appointment_date_customer", type="datetime", nullable=true)
     */
    private $appointmentDateCustomer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="appointment_daypart_customer", type="string", length=45, nullable=true)
     */
    private $appointmentDaypartCustomer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="appointment_date_company", type="datetime", nullable=true)
     */
    private $appointmentDateCompany;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="appointment_time_company", type="time", nullable=true)
     */
    private $appointmentTimeCompany;

    /**
     * @var string|null
     *
     * @ORM\Column(name="appointment_memo", type="text", length=65535, nullable=true)
     */
    private $appointmentMemo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="appointment_ip", type="string", length=100, nullable=true)
     */
    private $appointmentIp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="appointment_approved", type="boolean", nullable=true)
     */
    private $appointmentApproved = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="appointment_deleted", type="boolean", nullable=true)
     */
    private $appointmentDeleted = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="appointment_active", type="boolean", nullable=true)
     */
    private $appointmentActive = '0';

    public function getTblCompaniesAppointmentsId(): ?int
    {
        return $this->tblCompaniesAppointmentsId;
    }

    public function getTblCompaniesAppointmentsOptionsId(): ?int
    {
        return $this->tblCompaniesAppointmentsOptionsId;
    }

    public function setTblCompaniesAppointmentsOptionsId(?int $tblCompaniesAppointmentsOptionsId): self
    {
        $this->tblCompaniesAppointmentsOptionsId = $tblCompaniesAppointmentsOptionsId;

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

    public function getTblCompaniesCustomersId(): ?int
    {
        return $this->tblCompaniesCustomersId;
    }

    public function setTblCompaniesCustomersId(?int $tblCompaniesCustomersId): self
    {
        $this->tblCompaniesCustomersId = $tblCompaniesCustomersId;

        return $this;
    }

    public function getTblCompaniesUsersId(): ?int
    {
        return $this->tblCompaniesUsersId;
    }

    public function setTblCompaniesUsersId(?int $tblCompaniesUsersId): self
    {
        $this->tblCompaniesUsersId = $tblCompaniesUsersId;

        return $this;
    }

    public function getTblMembersId(): ?int
    {
        return $this->tblMembersId;
    }

    public function setTblMembersId(?int $tblMembersId): self
    {
        $this->tblMembersId = $tblMembersId;

        return $this;
    }

    public function getAppointmentDateCreated(): ?\DateTimeInterface
    {
        return $this->appointmentDateCreated;
    }

    public function setAppointmentDateCreated(?\DateTimeInterface $appointmentDateCreated): self
    {
        $this->appointmentDateCreated = $appointmentDateCreated;

        return $this;
    }

    public function getAppointmentDateCustomer(): ?\DateTimeInterface
    {
        return $this->appointmentDateCustomer;
    }

    public function setAppointmentDateCustomer(?\DateTimeInterface $appointmentDateCustomer): self
    {
        $this->appointmentDateCustomer = $appointmentDateCustomer;

        return $this;
    }

    public function getAppointmentDaypartCustomer(): ?string
    {
        return $this->appointmentDaypartCustomer;
    }

    public function setAppointmentDaypartCustomer(?string $appointmentDaypartCustomer): self
    {
        $this->appointmentDaypartCustomer = $appointmentDaypartCustomer;

        return $this;
    }

    public function getAppointmentDateCompany(): ?\DateTimeInterface
    {
        return $this->appointmentDateCompany;
    }

    public function setAppointmentDateCompany(?\DateTimeInterface $appointmentDateCompany): self
    {
        $this->appointmentDateCompany = $appointmentDateCompany;

        return $this;
    }

    public function getAppointmentTimeCompany(): ?\DateTimeInterface
    {
        return $this->appointmentTimeCompany;
    }

    public function setAppointmentTimeCompany(?\DateTimeInterface $appointmentTimeCompany): self
    {
        $this->appointmentTimeCompany = $appointmentTimeCompany;

        return $this;
    }

    public function getAppointmentMemo(): ?string
    {
        return $this->appointmentMemo;
    }

    public function setAppointmentMemo(?string $appointmentMemo): self
    {
        $this->appointmentMemo = $appointmentMemo;

        return $this;
    }

    public function getAppointmentIp(): ?string
    {
        return $this->appointmentIp;
    }

    public function setAppointmentIp(?string $appointmentIp): self
    {
        $this->appointmentIp = $appointmentIp;

        return $this;
    }

    public function getAppointmentApproved(): ?bool
    {
        return $this->appointmentApproved;
    }

    public function setAppointmentApproved(?bool $appointmentApproved): self
    {
        $this->appointmentApproved = $appointmentApproved;

        return $this;
    }

    public function getAppointmentDeleted(): ?bool
    {
        return $this->appointmentDeleted;
    }

    public function setAppointmentDeleted(?bool $appointmentDeleted): self
    {
        $this->appointmentDeleted = $appointmentDeleted;

        return $this;
    }

    public function getAppointmentActive(): ?bool
    {
        return $this->appointmentActive;
    }

    public function setAppointmentActive(?bool $appointmentActive): self
    {
        $this->appointmentActive = $appointmentActive;

        return $this;
    }


}
