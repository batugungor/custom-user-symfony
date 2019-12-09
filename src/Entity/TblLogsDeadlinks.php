<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLogsDeadlinks
 *
 * @ORM\Table(name="tbl_logs_deadlinks")
 * @ORM\Entity
 */
class TblLogsDeadlinks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_logs_deadlinks_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblLogsDeadlinksId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_memo", type="string", length=250, nullable=true)
     */
    private $linkMemo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_table", type="string", length=150, nullable=true)
     */
    private $linkTable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="link_table_id", type="integer", nullable=true)
     */
    private $linkTableId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="link_check", type="datetime", nullable=true)
     */
    private $linkCheck;

    /**
     * @var int|null
     *
     * @ORM\Column(name="link_status", type="integer", nullable=true)
     */
    private $linkStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_url", type="string", length=250, nullable=true)
     */
    private $linkUrl;

    /**
     * @var bool
     *
     * @ORM\Column(name="link_done", type="boolean", nullable=false)
     */
    private $linkDone = '0';

    public function getTblLogsDeadlinksId(): ?int
    {
        return $this->tblLogsDeadlinksId;
    }

    public function getLinkMemo(): ?string
    {
        return $this->linkMemo;
    }

    public function setLinkMemo(?string $linkMemo): self
    {
        $this->linkMemo = $linkMemo;

        return $this;
    }

    public function getLinkTable(): ?string
    {
        return $this->linkTable;
    }

    public function setLinkTable(?string $linkTable): self
    {
        $this->linkTable = $linkTable;

        return $this;
    }

    public function getLinkTableId(): ?int
    {
        return $this->linkTableId;
    }

    public function setLinkTableId(?int $linkTableId): self
    {
        $this->linkTableId = $linkTableId;

        return $this;
    }

    public function getLinkCheck(): ?\DateTimeInterface
    {
        return $this->linkCheck;
    }

    public function setLinkCheck(?\DateTimeInterface $linkCheck): self
    {
        $this->linkCheck = $linkCheck;

        return $this;
    }

    public function getLinkStatus(): ?int
    {
        return $this->linkStatus;
    }

    public function setLinkStatus(?int $linkStatus): self
    {
        $this->linkStatus = $linkStatus;

        return $this;
    }

    public function getLinkUrl(): ?string
    {
        return $this->linkUrl;
    }

    public function setLinkUrl(?string $linkUrl): self
    {
        $this->linkUrl = $linkUrl;

        return $this;
    }

    public function getLinkDone(): ?bool
    {
        return $this->linkDone;
    }

    public function setLinkDone(bool $linkDone): self
    {
        $this->linkDone = $linkDone;

        return $this;
    }


}
