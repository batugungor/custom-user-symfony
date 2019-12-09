<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemAdmins
 *
 * @ORM\Table(name="tbl_system_admins")
 * @ORM\Entity
 */
class TblSystemAdmins
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_admins_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemAdminsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tbl_system_zipcodes_id", type="string", length=30000, nullable=true)
     */
    private $tblSystemZipcodesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_username", type="string", length=255, nullable=true)
     */
    private $adminUsername;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_password", type="string", length=32, nullable=true)
     */
    private $adminPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_name", type="string", length=255, nullable=true)
     */
    private $adminName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_email", type="string", length=255, nullable=true)
     */
    private $adminEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mobilenr", type="string", length=30, nullable=true)
     */
    private $adminMobilenr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="admin_lastlogin", type="datetime", nullable=true)
     */
    private $adminLastlogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_region", type="string", length=250, nullable=true)
     */
    private $adminRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_lat", type="string", length=50, nullable=true)
     */
    private $adminLat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_long", type="string", length=50, nullable=true)
     */
    private $adminLong;

    /**
     * @var int|null
     *
     * @ORM\Column(name="admin_km", type="integer", nullable=true)
     */
    private $adminKm;

    /**
     * @var string
     *
     * @ORM\Column(name="group_only", type="string", length=1, nullable=false, options={"default"="1"})
     */
    private $groupOnly = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="admin_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $adminActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="super_admin", type="boolean", nullable=false)
     */
    private $superAdmin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_province", type="string", length=200, nullable=true)
     */
    private $adminProvince;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_municipality", type="string", length=2000, nullable=true)
     */
    private $adminMunicipality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_city", type="string", length=20000, nullable=true)
     */
    private $adminCity;

    public function getTblSystemAdminsId(): ?int
    {
        return $this->tblSystemAdminsId;
    }

    public function getTblSystemZipcodesId(): ?string
    {
        return $this->tblSystemZipcodesId;
    }

    public function setTblSystemZipcodesId(?string $tblSystemZipcodesId): self
    {
        $this->tblSystemZipcodesId = $tblSystemZipcodesId;

        return $this;
    }

    public function getAdminUsername(): ?string
    {
        return $this->adminUsername;
    }

    public function setAdminUsername(?string $adminUsername): self
    {
        $this->adminUsername = $adminUsername;

        return $this;
    }

    public function getAdminPassword(): ?string
    {
        return $this->adminPassword;
    }

    public function setAdminPassword(?string $adminPassword): self
    {
        $this->adminPassword = $adminPassword;

        return $this;
    }

    public function getAdminName(): ?string
    {
        return $this->adminName;
    }

    public function setAdminName(?string $adminName): self
    {
        $this->adminName = $adminName;

        return $this;
    }

    public function getAdminEmail(): ?string
    {
        return $this->adminEmail;
    }

    public function setAdminEmail(?string $adminEmail): self
    {
        $this->adminEmail = $adminEmail;

        return $this;
    }

    public function getAdminMobilenr(): ?string
    {
        return $this->adminMobilenr;
    }

    public function setAdminMobilenr(?string $adminMobilenr): self
    {
        $this->adminMobilenr = $adminMobilenr;

        return $this;
    }

    public function getAdminLastlogin(): ?\DateTimeInterface
    {
        return $this->adminLastlogin;
    }

    public function setAdminLastlogin(?\DateTimeInterface $adminLastlogin): self
    {
        $this->adminLastlogin = $adminLastlogin;

        return $this;
    }

    public function getAdminRegion(): ?string
    {
        return $this->adminRegion;
    }

    public function setAdminRegion(?string $adminRegion): self
    {
        $this->adminRegion = $adminRegion;

        return $this;
    }

    public function getAdminLat(): ?string
    {
        return $this->adminLat;
    }

    public function setAdminLat(?string $adminLat): self
    {
        $this->adminLat = $adminLat;

        return $this;
    }

    public function getAdminLong(): ?string
    {
        return $this->adminLong;
    }

    public function setAdminLong(?string $adminLong): self
    {
        $this->adminLong = $adminLong;

        return $this;
    }

    public function getAdminKm(): ?int
    {
        return $this->adminKm;
    }

    public function setAdminKm(?int $adminKm): self
    {
        $this->adminKm = $adminKm;

        return $this;
    }

    public function getGroupOnly(): ?string
    {
        return $this->groupOnly;
    }

    public function setGroupOnly(string $groupOnly): self
    {
        $this->groupOnly = $groupOnly;

        return $this;
    }

    public function getAdminActive(): ?bool
    {
        return $this->adminActive;
    }

    public function setAdminActive(bool $adminActive): self
    {
        $this->adminActive = $adminActive;

        return $this;
    }

    public function getSuperAdmin(): ?bool
    {
        return $this->superAdmin;
    }

    public function setSuperAdmin(bool $superAdmin): self
    {
        $this->superAdmin = $superAdmin;

        return $this;
    }

    public function getAdminProvince(): ?string
    {
        return $this->adminProvince;
    }

    public function setAdminProvince(?string $adminProvince): self
    {
        $this->adminProvince = $adminProvince;

        return $this;
    }

    public function getAdminMunicipality(): ?string
    {
        return $this->adminMunicipality;
    }

    public function setAdminMunicipality(?string $adminMunicipality): self
    {
        $this->adminMunicipality = $adminMunicipality;

        return $this;
    }

    public function getAdminCity(): ?string
    {
        return $this->adminCity;
    }

    public function setAdminCity(?string $adminCity): self
    {
        $this->adminCity = $adminCity;

        return $this;
    }


}
