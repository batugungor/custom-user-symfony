<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLogsLoginError
 *
 * @ORM\Table(name="tbl_logs_login_error")
 * @ORM\Entity
 */
class TblLogsLoginError
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_logs_login_error_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblLogsLoginErrorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login_name", type="string", length=100, nullable=true)
     */
    private $loginName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login_password", type="string", length=100, nullable=true)
     */
    private $loginPassword;

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

    public function getTblLogsLoginErrorId(): ?int
    {
        return $this->tblLogsLoginErrorId;
    }

    public function getLoginName(): ?string
    {
        return $this->loginName;
    }

    public function setLoginName(?string $loginName): self
    {
        $this->loginName = $loginName;

        return $this;
    }

    public function getLoginPassword(): ?string
    {
        return $this->loginPassword;
    }

    public function setLoginPassword(?string $loginPassword): self
    {
        $this->loginPassword = $loginPassword;

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


}
