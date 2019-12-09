<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemVisitsBlocks
 *
 * @ORM\Table(name="tbl_system_visits_blocks")
 * @ORM\Entity
 */
class TblSystemVisitsBlocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_visits_blocks_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemVisitsBlocksId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_ip", type="string", length=200, nullable=true)
     */
    private $blockIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_reason", type="string", length=200, nullable=true)
     */
    private $blockReason;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="block_datetime", type="datetime", nullable=true)
     */
    private $blockDatetime;

    /**
     * @var bool
     *
     * @ORM\Column(name="block_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockActive = '1';

    public function getTblSystemVisitsBlocksId(): ?int
    {
        return $this->tblSystemVisitsBlocksId;
    }

    public function getBlockIp(): ?string
    {
        return $this->blockIp;
    }

    public function setBlockIp(?string $blockIp): self
    {
        $this->blockIp = $blockIp;

        return $this;
    }

    public function getBlockReason(): ?string
    {
        return $this->blockReason;
    }

    public function setBlockReason(?string $blockReason): self
    {
        $this->blockReason = $blockReason;

        return $this;
    }

    public function getBlockDatetime(): ?\DateTimeInterface
    {
        return $this->blockDatetime;
    }

    public function setBlockDatetime(?\DateTimeInterface $blockDatetime): self
    {
        $this->blockDatetime = $blockDatetime;

        return $this;
    }

    public function getBlockActive(): ?bool
    {
        return $this->blockActive;
    }

    public function setBlockActive(bool $blockActive): self
    {
        $this->blockActive = $blockActive;

        return $this;
    }


}
