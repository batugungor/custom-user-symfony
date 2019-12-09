<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAppsDevicesPush
 *
 * @ORM\Table(name="tbl_apps_devices_push", uniqueConstraints={@ORM\UniqueConstraint(name="tbl_apps_devices_push_id_UNIQUE", columns={"tbl_apps_devices_push_id"})})
 * @ORM\Entity
 */
class TblAppsDevicesPush
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_devices_push_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsDevicesPushId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_devices_id", type="integer", nullable=true)
     */
    private $tblAppsDevicesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_units_id", type="integer", nullable=true)
     */
    private $tblAppsUnitsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="push_platform", type="string", length=45, nullable=true)
     */
    private $pushPlatform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="push_message", type="string", length=500, nullable=true)
     */
    private $pushMessage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="push_date", type="datetime", nullable=true)
     */
    private $pushDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="push_pushed", type="boolean", nullable=true)
     */
    private $pushPushed = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="push_user_id", type="integer", nullable=true)
     */
    private $pushUserId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="push_admin_id", type="integer", nullable=true)
     */
    private $pushAdminId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_id", type="integer", nullable=true)
     */
    private $tblAppsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="push_name", type="string", length=100, nullable=true)
     */
    private $pushName;

    public function getTblAppsDevicesPushId(): ?int
    {
        return $this->tblAppsDevicesPushId;
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

    public function getTblAppsUnitsId(): ?int
    {
        return $this->tblAppsUnitsId;
    }

    public function setTblAppsUnitsId(?int $tblAppsUnitsId): self
    {
        $this->tblAppsUnitsId = $tblAppsUnitsId;

        return $this;
    }

    public function getPushPlatform(): ?string
    {
        return $this->pushPlatform;
    }

    public function setPushPlatform(?string $pushPlatform): self
    {
        $this->pushPlatform = $pushPlatform;

        return $this;
    }

    public function getPushMessage(): ?string
    {
        return $this->pushMessage;
    }

    public function setPushMessage(?string $pushMessage): self
    {
        $this->pushMessage = $pushMessage;

        return $this;
    }

    public function getPushDate(): ?\DateTimeInterface
    {
        return $this->pushDate;
    }

    public function setPushDate(?\DateTimeInterface $pushDate): self
    {
        $this->pushDate = $pushDate;

        return $this;
    }

    public function getPushPushed(): ?bool
    {
        return $this->pushPushed;
    }

    public function setPushPushed(?bool $pushPushed): self
    {
        $this->pushPushed = $pushPushed;

        return $this;
    }

    public function getPushUserId(): ?int
    {
        return $this->pushUserId;
    }

    public function setPushUserId(?int $pushUserId): self
    {
        $this->pushUserId = $pushUserId;

        return $this;
    }

    public function getPushAdminId(): ?int
    {
        return $this->pushAdminId;
    }

    public function setPushAdminId(?int $pushAdminId): self
    {
        $this->pushAdminId = $pushAdminId;

        return $this;
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

    public function getPushName(): ?string
    {
        return $this->pushName;
    }

    public function setPushName(?string $pushName): self
    {
        $this->pushName = $pushName;

        return $this;
    }


}
