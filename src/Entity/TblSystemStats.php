<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemStats
 *
 * @ORM\Table(name="tbl_system_stats")
 * @ORM\Entity
 */
class TblSystemStats
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_stats_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemStatsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_websites_id", type="integer", nullable=true)
     */
    private $tblSystemWebsitesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stats_table", type="string", length=100, nullable=true)
     */
    private $statsTable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stats_table_id", type="integer", nullable=true)
     */
    private $statsTableId;

    /**
     * @var bool
     *
     * @ORM\Column(name="stats_created", type="boolean", nullable=false)
     */
    private $statsCreated = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="stats_edited", type="boolean", nullable=false)
     */
    private $statsEdited = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="stats_deleted", type="boolean", nullable=false)
     */
    private $statsDeleted = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stats_datetime", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $statsDatetime = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="stats_user_id", type="integer", nullable=true)
     */
    private $statsUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stats_user_ip", type="string", length=100, nullable=true)
     */
    private $statsUserIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stats_system", type="string", length=1000, nullable=true)
     */
    private $statsSystem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stats_memo", type="string", length=250, nullable=true)
     */
    private $statsMemo;

    public function getTblSystemStatsId(): ?int
    {
        return $this->tblSystemStatsId;
    }

    public function getTblSystemWebsitesId(): ?int
    {
        return $this->tblSystemWebsitesId;
    }

    public function setTblSystemWebsitesId(?int $tblSystemWebsitesId): self
    {
        $this->tblSystemWebsitesId = $tblSystemWebsitesId;

        return $this;
    }

    public function getStatsTable(): ?string
    {
        return $this->statsTable;
    }

    public function setStatsTable(?string $statsTable): self
    {
        $this->statsTable = $statsTable;

        return $this;
    }

    public function getStatsTableId(): ?int
    {
        return $this->statsTableId;
    }

    public function setStatsTableId(?int $statsTableId): self
    {
        $this->statsTableId = $statsTableId;

        return $this;
    }

    public function getStatsCreated(): ?bool
    {
        return $this->statsCreated;
    }

    public function setStatsCreated(bool $statsCreated): self
    {
        $this->statsCreated = $statsCreated;

        return $this;
    }

    public function getStatsEdited(): ?bool
    {
        return $this->statsEdited;
    }

    public function setStatsEdited(bool $statsEdited): self
    {
        $this->statsEdited = $statsEdited;

        return $this;
    }

    public function getStatsDeleted(): ?bool
    {
        return $this->statsDeleted;
    }

    public function setStatsDeleted(bool $statsDeleted): self
    {
        $this->statsDeleted = $statsDeleted;

        return $this;
    }

    public function getStatsDatetime(): ?\DateTimeInterface
    {
        return $this->statsDatetime;
    }

    public function setStatsDatetime(\DateTimeInterface $statsDatetime): self
    {
        $this->statsDatetime = $statsDatetime;

        return $this;
    }

    public function getStatsUserId(): ?int
    {
        return $this->statsUserId;
    }

    public function setStatsUserId(?int $statsUserId): self
    {
        $this->statsUserId = $statsUserId;

        return $this;
    }

    public function getStatsUserIp(): ?string
    {
        return $this->statsUserIp;
    }

    public function setStatsUserIp(?string $statsUserIp): self
    {
        $this->statsUserIp = $statsUserIp;

        return $this;
    }

    public function getStatsSystem(): ?string
    {
        return $this->statsSystem;
    }

    public function setStatsSystem(?string $statsSystem): self
    {
        $this->statsSystem = $statsSystem;

        return $this;
    }

    public function getStatsMemo(): ?string
    {
        return $this->statsMemo;
    }

    public function setStatsMemo(?string $statsMemo): self
    {
        $this->statsMemo = $statsMemo;

        return $this;
    }


}
