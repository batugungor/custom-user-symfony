<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAppsDevices
 *
 * @ORM\Table(name="tbl_apps_devices")
 * @ORM\Entity
 */
class TblAppsDevices
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_devices_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsDevicesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_id", type="integer", nullable=true)
     */
    private $tblAppsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
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
     * @ORM\Column(name="tbl_members_id", type="integer", nullable=true)
     */
    private $tblMembersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_push_id", type="string", length=255, nullable=true)
     */
    private $devicePushId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_id", type="string", length=255, nullable=true)
     */
    private $deviceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_token", type="string", length=45, nullable=true)
     */
    private $deviceToken;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="device_token_until", type="datetime", nullable=true)
     */
    private $deviceTokenUntil;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="device_date", type="datetime", nullable=true)
     */
    private $deviceDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="device_date_active", type="datetime", nullable=true)
     */
    private $deviceDateActive;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="device_blocked", type="boolean", nullable=true)
     */
    private $deviceBlocked = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="device_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $deviceActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_platform", type="string", length=250, nullable=true)
     */
    private $devicePlatform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_ip", type="string", length=145, nullable=true)
     */
    private $deviceIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_name", type="string", length=250, nullable=true)
     */
    private $deviceName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_firstname", type="string", length=255, nullable=true)
     */
    private $deviceFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_lastname", type="string", length=255, nullable=true)
     */
    private $deviceLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_email", type="string", length=255, nullable=true)
     */
    private $deviceEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_device", type="string", length=145, nullable=true)
     */
    private $deviceDevice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_carrier", type="string", length=145, nullable=true)
     */
    private $deviceCarrier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_platform_version", type="string", length=145, nullable=true)
     */
    private $devicePlatformVersion;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="device_notifications", type="boolean", nullable=true)
     */
    private $deviceNotifications = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_memo", type="string", length=255, nullable=true)
     */
    private $deviceMemo;

    /**
     * @var int
     *
     * @ORM\Column(name="device_calls", type="integer", nullable=false)
     */
    private $deviceCalls = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="device_country", type="string", length=255, nullable=true)
     */
    private $deviceCountry;

    public function getTblAppsDevicesId(): ?int
    {
        return $this->tblAppsDevicesId;
    }

    public function getTblAppsId(): ?int
    {
        return $this->tblAppsId;
    }

    public function setTblAppsId(?int $tblAppsId): self
    {
        $this->tblAppsId = $tblAppsId;

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

    public function getTblCompaniesCustomersId(): ?int
    {
        return $this->tblCompaniesCustomersId;
    }

    public function setTblCompaniesCustomersId(?int $tblCompaniesCustomersId): self
    {
        $this->tblCompaniesCustomersId = $tblCompaniesCustomersId;

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

    public function getDevicePushId(): ?string
    {
        return $this->devicePushId;
    }

    public function setDevicePushId(?string $devicePushId): self
    {
        $this->devicePushId = $devicePushId;

        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    public function getDeviceToken(): ?string
    {
        return $this->deviceToken;
    }

    public function setDeviceToken(?string $deviceToken): self
    {
        $this->deviceToken = $deviceToken;

        return $this;
    }

    public function getDeviceTokenUntil(): ?\DateTimeInterface
    {
        return $this->deviceTokenUntil;
    }

    public function setDeviceTokenUntil(?\DateTimeInterface $deviceTokenUntil): self
    {
        $this->deviceTokenUntil = $deviceTokenUntil;

        return $this;
    }

    public function getDeviceDate(): ?\DateTimeInterface
    {
        return $this->deviceDate;
    }

    public function setDeviceDate(?\DateTimeInterface $deviceDate): self
    {
        $this->deviceDate = $deviceDate;

        return $this;
    }

    public function getDeviceDateActive(): ?\DateTimeInterface
    {
        return $this->deviceDateActive;
    }

    public function setDeviceDateActive(?\DateTimeInterface $deviceDateActive): self
    {
        $this->deviceDateActive = $deviceDateActive;

        return $this;
    }

    public function getDeviceBlocked(): ?bool
    {
        return $this->deviceBlocked;
    }

    public function setDeviceBlocked(?bool $deviceBlocked): self
    {
        $this->deviceBlocked = $deviceBlocked;

        return $this;
    }

    public function getDeviceActive(): ?bool
    {
        return $this->deviceActive;
    }

    public function setDeviceActive(?bool $deviceActive): self
    {
        $this->deviceActive = $deviceActive;

        return $this;
    }

    public function getDevicePlatform(): ?string
    {
        return $this->devicePlatform;
    }

    public function setDevicePlatform(?string $devicePlatform): self
    {
        $this->devicePlatform = $devicePlatform;

        return $this;
    }

    public function getDeviceIp(): ?string
    {
        return $this->deviceIp;
    }

    public function setDeviceIp(?string $deviceIp): self
    {
        $this->deviceIp = $deviceIp;

        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;

        return $this;
    }

    public function getDeviceFirstname(): ?string
    {
        return $this->deviceFirstname;
    }

    public function setDeviceFirstname(?string $deviceFirstname): self
    {
        $this->deviceFirstname = $deviceFirstname;

        return $this;
    }

    public function getDeviceLastname(): ?string
    {
        return $this->deviceLastname;
    }

    public function setDeviceLastname(?string $deviceLastname): self
    {
        $this->deviceLastname = $deviceLastname;

        return $this;
    }

    public function getDeviceEmail(): ?string
    {
        return $this->deviceEmail;
    }

    public function setDeviceEmail(?string $deviceEmail): self
    {
        $this->deviceEmail = $deviceEmail;

        return $this;
    }

    public function getDeviceDevice(): ?string
    {
        return $this->deviceDevice;
    }

    public function setDeviceDevice(?string $deviceDevice): self
    {
        $this->deviceDevice = $deviceDevice;

        return $this;
    }

    public function getDeviceCarrier(): ?string
    {
        return $this->deviceCarrier;
    }

    public function setDeviceCarrier(?string $deviceCarrier): self
    {
        $this->deviceCarrier = $deviceCarrier;

        return $this;
    }

    public function getDevicePlatformVersion(): ?string
    {
        return $this->devicePlatformVersion;
    }

    public function setDevicePlatformVersion(?string $devicePlatformVersion): self
    {
        $this->devicePlatformVersion = $devicePlatformVersion;

        return $this;
    }

    public function getDeviceNotifications(): ?bool
    {
        return $this->deviceNotifications;
    }

    public function setDeviceNotifications(?bool $deviceNotifications): self
    {
        $this->deviceNotifications = $deviceNotifications;

        return $this;
    }

    public function getDeviceMemo(): ?string
    {
        return $this->deviceMemo;
    }

    public function setDeviceMemo(?string $deviceMemo): self
    {
        $this->deviceMemo = $deviceMemo;

        return $this;
    }

    public function getDeviceCalls(): ?int
    {
        return $this->deviceCalls;
    }

    public function setDeviceCalls(int $deviceCalls): self
    {
        $this->deviceCalls = $deviceCalls;

        return $this;
    }

    public function getDeviceCountry(): ?string
    {
        return $this->deviceCountry;
    }

    public function setDeviceCountry(?string $deviceCountry): self
    {
        $this->deviceCountry = $deviceCountry;

        return $this;
    }


}
