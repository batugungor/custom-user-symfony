<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAppsDevicesSessions
 *
 * @ORM\Table(name="tbl_apps_devices_sessions")
 * @ORM\Entity
 */
class TblAppsDevicesSessions
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_devices_sessions_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsDevicesSessionsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_devices_id", type="integer", nullable=true)
     */
    private $tblAppsDevicesId;

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
     * @var string|null
     *
     * @ORM\Column(name="session_id", type="string", length=100, nullable=true)
     */
    private $sessionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_push_id", type="string", length=250, nullable=true)
     */
    private $sessionPushId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_device_id", type="string", length=250, nullable=true)
     */
    private $sessionDeviceId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="session_date", type="datetime", nullable=true)
     */
    private $sessionDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="session_deleted", type="boolean", nullable=true)
     */
    private $sessionDeleted = '0';

    public function getTblAppsDevicesSessionsId(): ?int
    {
        return $this->tblAppsDevicesSessionsId;
    }

    public function getTblAppsDevicesId(): ?int
    {
        return $this->tblAppsDevicesId;
    }

    public function setTblAppsDevicesId(?int $tblAppsDevicesId): self
    {
        $this->tblAppsDevicesId = $tblAppsDevicesId;

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

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function setSessionId(?string $sessionId): self
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    public function getSessionPushId(): ?string
    {
        return $this->sessionPushId;
    }

    public function setSessionPushId(?string $sessionPushId): self
    {
        $this->sessionPushId = $sessionPushId;

        return $this;
    }

    public function getSessionDeviceId(): ?string
    {
        return $this->sessionDeviceId;
    }

    public function setSessionDeviceId(?string $sessionDeviceId): self
    {
        $this->sessionDeviceId = $sessionDeviceId;

        return $this;
    }

    public function getSessionDate(): ?\DateTimeInterface
    {
        return $this->sessionDate;
    }

    public function setSessionDate(?\DateTimeInterface $sessionDate): self
    {
        $this->sessionDate = $sessionDate;

        return $this;
    }

    public function getSessionDeleted(): ?bool
    {
        return $this->sessionDeleted;
    }

    public function setSessionDeleted(?bool $sessionDeleted): self
    {
        $this->sessionDeleted = $sessionDeleted;

        return $this;
    }


}
