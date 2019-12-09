<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBlogsComments
 *
 * @ORM\Table(name="tbl_blogs_comments")
 * @ORM\Entity
 */
class TblBlogsComments
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_blogs_comments_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblBlogsCommentsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="respond_tbl_blogs_comments_id", type="integer", nullable=true)
     */
    private $respondTblBlogsCommentsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_blogs_id", type="integer", nullable=false)
     */
    private $tblBlogsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_name", type="string", length=255, nullable=true)
     */
    private $commentName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_email", type="string", length=250, nullable=true)
     */
    private $commentEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_commment", type="text", length=65535, nullable=true)
     */
    private $commentCommment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="comment_datetime", type="datetime", nullable=true)
     */
    private $commentDatetime;

    /**
     * @var bool
     *
     * @ORM\Column(name="comment_approved", type="boolean", nullable=false)
     */
    private $commentApproved = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="comment_reported", type="boolean", nullable=false)
     */
    private $commentReported = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="comment_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $commentActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_md5", type="text", length=65535, nullable=true)
     */
    private $commentMd5;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="report_datetime", type="datetime", nullable=true)
     */
    private $reportDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_reason", type="string", length=250, nullable=true)
     */
    private $reportReason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_email", type="string", length=250, nullable=true)
     */
    private $reportEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_md5", type="string", length=32, nullable=true)
     */
    private $reportMd5;

    public function getTblBlogsCommentsId(): ?int
    {
        return $this->tblBlogsCommentsId;
    }

    public function getRespondTblBlogsCommentsId(): ?int
    {
        return $this->respondTblBlogsCommentsId;
    }

    public function setRespondTblBlogsCommentsId(?int $respondTblBlogsCommentsId): self
    {
        $this->respondTblBlogsCommentsId = $respondTblBlogsCommentsId;

        return $this;
    }

    public function getTblBlogsId(): ?int
    {
        return $this->tblBlogsId;
    }

    public function setTblBlogsId(int $tblBlogsId): self
    {
        $this->tblBlogsId = $tblBlogsId;

        return $this;
    }

    public function getCommentName(): ?string
    {
        return $this->commentName;
    }

    public function setCommentName(?string $commentName): self
    {
        $this->commentName = $commentName;

        return $this;
    }

    public function getCommentEmail(): ?string
    {
        return $this->commentEmail;
    }

    public function setCommentEmail(?string $commentEmail): self
    {
        $this->commentEmail = $commentEmail;

        return $this;
    }

    public function getCommentCommment(): ?string
    {
        return $this->commentCommment;
    }

    public function setCommentCommment(?string $commentCommment): self
    {
        $this->commentCommment = $commentCommment;

        return $this;
    }

    public function getCommentDatetime(): ?\DateTimeInterface
    {
        return $this->commentDatetime;
    }

    public function setCommentDatetime(?\DateTimeInterface $commentDatetime): self
    {
        $this->commentDatetime = $commentDatetime;

        return $this;
    }

    public function getCommentApproved(): ?bool
    {
        return $this->commentApproved;
    }

    public function setCommentApproved(bool $commentApproved): self
    {
        $this->commentApproved = $commentApproved;

        return $this;
    }

    public function getCommentReported(): ?bool
    {
        return $this->commentReported;
    }

    public function setCommentReported(bool $commentReported): self
    {
        $this->commentReported = $commentReported;

        return $this;
    }

    public function getCommentActive(): ?bool
    {
        return $this->commentActive;
    }

    public function setCommentActive(bool $commentActive): self
    {
        $this->commentActive = $commentActive;

        return $this;
    }

    public function getCommentMd5(): ?string
    {
        return $this->commentMd5;
    }

    public function setCommentMd5(?string $commentMd5): self
    {
        $this->commentMd5 = $commentMd5;

        return $this;
    }

    public function getReportDatetime(): ?\DateTimeInterface
    {
        return $this->reportDatetime;
    }

    public function setReportDatetime(?\DateTimeInterface $reportDatetime): self
    {
        $this->reportDatetime = $reportDatetime;

        return $this;
    }

    public function getReportReason(): ?string
    {
        return $this->reportReason;
    }

    public function setReportReason(?string $reportReason): self
    {
        $this->reportReason = $reportReason;

        return $this;
    }

    public function getReportEmail(): ?string
    {
        return $this->reportEmail;
    }

    public function setReportEmail(?string $reportEmail): self
    {
        $this->reportEmail = $reportEmail;

        return $this;
    }

    public function getReportMd5(): ?string
    {
        return $this->reportMd5;
    }

    public function setReportMd5(?string $reportMd5): self
    {
        $this->reportMd5 = $reportMd5;

        return $this;
    }


}
