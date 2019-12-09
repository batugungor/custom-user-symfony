<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLogsLogin
 *
 * @ORM\Table(name="tbl_logs_login")
 * @ORM\Entity
 */
class TblLogsLogin
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_logs_login_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblLogsLoginId;

    /**
     * @var bool
     *
     * @ORM\Column(name="login_user", type="boolean", nullable=false)
     */
    private $loginUser = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="login_admin", type="boolean", nullable=false)
     */
    private $loginAdmin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=true)
     */
    private $tblCompaniesUsersId;

    /**
     * @var bool
     *
     * @ORM\Column(name="tbl_system_admins_id", type="boolean", nullable=false)
     */
    private $tblSystemAdminsId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="login_ip", type="string", length=100, nullable=true)
     */
    private $loginIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login_browser", type="string", length=250, nullable=true)
     */
    private $loginBrowser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="login_date", type="datetime", nullable=true)
     */
    private $loginDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login_md5", type="string", length=32, nullable=true)
     */
    private $loginMd5;

    public function getTblLogsLoginId(): ?int
    {
        return $this->tblLogsLoginId;
    }

    public function getLoginUser(): ?bool
    {
        return $this->loginUser;
    }

    public function setLoginUser(bool $loginUser): self
    {
        $this->loginUser = $loginUser;

        return $this;
    }

    public function getLoginAdmin(): ?bool
    {
        return $this->loginAdmin;
    }

    public function setLoginAdmin(bool $loginAdmin): self
    {
        $this->loginAdmin = $loginAdmin;

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

    public function getTblCompaniesUsersId(): ?int
    {
        return $this->tblCompaniesUsersId;
    }

    public function setTblCompaniesUsersId(?int $tblCompaniesUsersId): self
    {
        $this->tblCompaniesUsersId = $tblCompaniesUsersId;

        return $this;
    }

    public function getTblSystemAdminsId(): ?bool
    {
        return $this->tblSystemAdminsId;
    }

    public function setTblSystemAdminsId(bool $tblSystemAdminsId): self
    {
        $this->tblSystemAdminsId = $tblSystemAdminsId;

        return $this;
    }

    public function getLoginIp(): ?string
    {
        return $this->loginIp;
    }

    public function setLoginIp(?string $loginIp): self
    {
        $this->loginIp = $loginIp;

        return $this;
    }

    public function getLoginBrowser(): ?string
    {
        return $this->loginBrowser;
    }

    public function setLoginBrowser(?string $loginBrowser): self
    {
        $this->loginBrowser = $loginBrowser;

        return $this;
    }

    public function getLoginDate(): ?\DateTimeInterface
    {
        return $this->loginDate;
    }

    public function setLoginDate(?\DateTimeInterface $loginDate): self
    {
        $this->loginDate = $loginDate;

        return $this;
    }

    public function getLoginMd5(): ?string
    {
        return $this->loginMd5;
    }

    public function setLoginMd5(?string $loginMd5): self
    {
        $this->loginMd5 = $loginMd5;

        return $this;
    }


}
