<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemEmailsLogs
 *
 * @ORM\Table(name="tbl_system_emails_logs")
 * @ORM\Entity
 */
class TblSystemEmailsLogs
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_emails_logs_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemEmailsLogsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_emails_que_id", type="integer", nullable=false)
     */
    private $tblSystemEmailsQueId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="log_ip", type="string", length=200, nullable=true)
     */
    private $logIp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="log_datetime", type="datetime", nullable=true)
     */
    private $logDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="log_browser", type="string", length=250, nullable=true)
     */
    private $logBrowser;

    public function getTblSystemEmailsLogsId(): ?int
    {
        return $this->tblSystemEmailsLogsId;
    }

    public function getTblSystemEmailsQueId(): ?int
    {
        return $this->tblSystemEmailsQueId;
    }

    public function setTblSystemEmailsQueId(int $tblSystemEmailsQueId): self
    {
        $this->tblSystemEmailsQueId = $tblSystemEmailsQueId;

        return $this;
    }

    public function getLogIp(): ?string
    {
        return $this->logIp;
    }

    public function setLogIp(?string $logIp): self
    {
        $this->logIp = $logIp;

        return $this;
    }

    public function getLogDatetime(): ?\DateTimeInterface
    {
        return $this->logDatetime;
    }

    public function setLogDatetime(?\DateTimeInterface $logDatetime): self
    {
        $this->logDatetime = $logDatetime;

        return $this;
    }

    public function getLogBrowser(): ?string
    {
        return $this->logBrowser;
    }

    public function setLogBrowser(?string $logBrowser): self
    {
        $this->logBrowser = $logBrowser;

        return $this;
    }


}
