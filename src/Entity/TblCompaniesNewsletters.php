<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesNewsletters
 *
 * @ORM\Table(name="tbl_companies_newsletters")
 * @ORM\Entity
 */
class TblCompaniesNewsletters
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_newsletters_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesNewslettersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_newsletters_templates_id", type="integer", nullable=true)
     */
    private $tblCompaniesNewslettersTemplatesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="newsletter_members", type="boolean", nullable=true)
     */
    private $newsletterMembers = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsletter_members_profiles", type="string", length=250, nullable=true)
     */
    private $newsletterMembersProfiles;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter_name", type="string", length=255, nullable=false)
     */
    private $newsletterName;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter_from", type="string", length=255, nullable=false)
     */
    private $newsletterFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter_from_email", type="string", length=255, nullable=false)
     */
    private $newsletterFromEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletter_subject", type="string", length=255, nullable=false)
     */
    private $newsletterSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsletter_subject_line", type="string", length=255, nullable=true)
     */
    private $newsletterSubjectLine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsletter_slogan", type="string", length=250, nullable=true)
     */
    private $newsletterSlogan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="newsletter_message", type="text", length=65535, nullable=true)
     */
    private $newsletterMessage;

    /**
     * @var int
     *
     * @ORM\Column(name="newsletter_columns", type="integer", nullable=false, options={"default"="1"})
     */
    private $newsletterColumns = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter_sent", type="boolean", nullable=false)
     */
    private $newsletterSent = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="newsletter_sent_date", type="datetime", nullable=true)
     */
    private $newsletterSentDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="newsletter_date_created", type="datetime", nullable=true)
     */
    private $newsletterDateCreated;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $newsletterActive = '1';

    public function getTblCompaniesNewslettersId(): ?int
    {
        return $this->tblCompaniesNewslettersId;
    }

    public function getTblCompaniesNewslettersTemplatesId(): ?int
    {
        return $this->tblCompaniesNewslettersTemplatesId;
    }

    public function setTblCompaniesNewslettersTemplatesId(?int $tblCompaniesNewslettersTemplatesId): self
    {
        $this->tblCompaniesNewslettersTemplatesId = $tblCompaniesNewslettersTemplatesId;

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

    public function getNewsletterMembers(): ?bool
    {
        return $this->newsletterMembers;
    }

    public function setNewsletterMembers(?bool $newsletterMembers): self
    {
        $this->newsletterMembers = $newsletterMembers;

        return $this;
    }

    public function getNewsletterMembersProfiles(): ?string
    {
        return $this->newsletterMembersProfiles;
    }

    public function setNewsletterMembersProfiles(?string $newsletterMembersProfiles): self
    {
        $this->newsletterMembersProfiles = $newsletterMembersProfiles;

        return $this;
    }

    public function getNewsletterName(): ?string
    {
        return $this->newsletterName;
    }

    public function setNewsletterName(string $newsletterName): self
    {
        $this->newsletterName = $newsletterName;

        return $this;
    }

    public function getNewsletterFrom(): ?string
    {
        return $this->newsletterFrom;
    }

    public function setNewsletterFrom(string $newsletterFrom): self
    {
        $this->newsletterFrom = $newsletterFrom;

        return $this;
    }

    public function getNewsletterFromEmail(): ?string
    {
        return $this->newsletterFromEmail;
    }

    public function setNewsletterFromEmail(string $newsletterFromEmail): self
    {
        $this->newsletterFromEmail = $newsletterFromEmail;

        return $this;
    }

    public function getNewsletterSubject(): ?string
    {
        return $this->newsletterSubject;
    }

    public function setNewsletterSubject(string $newsletterSubject): self
    {
        $this->newsletterSubject = $newsletterSubject;

        return $this;
    }

    public function getNewsletterSubjectLine(): ?string
    {
        return $this->newsletterSubjectLine;
    }

    public function setNewsletterSubjectLine(?string $newsletterSubjectLine): self
    {
        $this->newsletterSubjectLine = $newsletterSubjectLine;

        return $this;
    }

    public function getNewsletterSlogan(): ?string
    {
        return $this->newsletterSlogan;
    }

    public function setNewsletterSlogan(?string $newsletterSlogan): self
    {
        $this->newsletterSlogan = $newsletterSlogan;

        return $this;
    }

    public function getNewsletterMessage(): ?string
    {
        return $this->newsletterMessage;
    }

    public function setNewsletterMessage(?string $newsletterMessage): self
    {
        $this->newsletterMessage = $newsletterMessage;

        return $this;
    }

    public function getNewsletterColumns(): ?int
    {
        return $this->newsletterColumns;
    }

    public function setNewsletterColumns(int $newsletterColumns): self
    {
        $this->newsletterColumns = $newsletterColumns;

        return $this;
    }

    public function getNewsletterSent(): ?bool
    {
        return $this->newsletterSent;
    }

    public function setNewsletterSent(bool $newsletterSent): self
    {
        $this->newsletterSent = $newsletterSent;

        return $this;
    }

    public function getNewsletterSentDate(): ?\DateTimeInterface
    {
        return $this->newsletterSentDate;
    }

    public function setNewsletterSentDate(?\DateTimeInterface $newsletterSentDate): self
    {
        $this->newsletterSentDate = $newsletterSentDate;

        return $this;
    }

    public function getNewsletterDateCreated(): ?\DateTimeInterface
    {
        return $this->newsletterDateCreated;
    }

    public function setNewsletterDateCreated(?\DateTimeInterface $newsletterDateCreated): self
    {
        $this->newsletterDateCreated = $newsletterDateCreated;

        return $this;
    }

    public function getNewsletterActive(): ?bool
    {
        return $this->newsletterActive;
    }

    public function setNewsletterActive(bool $newsletterActive): self
    {
        $this->newsletterActive = $newsletterActive;

        return $this;
    }


}
