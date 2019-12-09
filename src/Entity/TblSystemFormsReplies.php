<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemFormsReplies
 *
 * @ORM\Table(name="tbl_system_forms_replies")
 * @ORM\Entity
 */
class TblSystemFormsReplies
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_forms_replies_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemFormsRepliesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_forms_id", type="integer", nullable=false)
     */
    private $tblSystemFormsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reply_date", type="datetime", nullable=true)
     */
    private $replyDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_ip", type="string", length=100, nullable=true)
     */
    private $replyIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_browser", type="string", length=500, nullable=true)
     */
    private $replyBrowser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_email", type="string", length=255, nullable=true)
     */
    private $replyEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_value", type="text", length=65535, nullable=true)
     */
    private $replyValue;

    public function getTblSystemFormsRepliesId(): ?int
    {
        return $this->tblSystemFormsRepliesId;
    }

    public function getTblSystemFormsId(): ?int
    {
        return $this->tblSystemFormsId;
    }

    public function setTblSystemFormsId(int $tblSystemFormsId): self
    {
        $this->tblSystemFormsId = $tblSystemFormsId;

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

    public function getReplyDate(): ?\DateTimeInterface
    {
        return $this->replyDate;
    }

    public function setReplyDate(?\DateTimeInterface $replyDate): self
    {
        $this->replyDate = $replyDate;

        return $this;
    }

    public function getReplyIp(): ?string
    {
        return $this->replyIp;
    }

    public function setReplyIp(?string $replyIp): self
    {
        $this->replyIp = $replyIp;

        return $this;
    }

    public function getReplyBrowser(): ?string
    {
        return $this->replyBrowser;
    }

    public function setReplyBrowser(?string $replyBrowser): self
    {
        $this->replyBrowser = $replyBrowser;

        return $this;
    }

    public function getReplyEmail(): ?string
    {
        return $this->replyEmail;
    }

    public function setReplyEmail(?string $replyEmail): self
    {
        $this->replyEmail = $replyEmail;

        return $this;
    }

    public function getReplyValue(): ?string
    {
        return $this->replyValue;
    }

    public function setReplyValue(?string $replyValue): self
    {
        $this->replyValue = $replyValue;

        return $this;
    }


}
