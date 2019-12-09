<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewsletters
 *
 * @ORM\Table(name="tbl_newsletters")
 * @ORM\Entity
 */
class TblNewsletters
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblNewslettersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_newsletters_groups_id", type="integer", nullable=true)
     */
    private $tblNewslettersGroupsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_emails_templates_id", type="integer", nullable=true)
     */
    private $tblSystemEmailsTemplatesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multiple_tbl_companies_cat_id", type="string", length=250, nullable=true)
     */
    private $multipleTblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_sub_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatSubId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_subscriptions_id", type="integer", nullable=true)
     */
    private $tblSubscriptionsId;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter_free_accounts", type="boolean", nullable=false)
     */
    private $newsletterFreeAccounts = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter_contactperson_only", type="boolean", nullable=false)
     */
    private $newsletterContactpersonOnly = '0';

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

    public function getTblNewslettersId(): ?int
    {
        return $this->tblNewslettersId;
    }

    public function getTblNewslettersGroupsId(): ?int
    {
        return $this->tblNewslettersGroupsId;
    }

    public function setTblNewslettersGroupsId(?int $tblNewslettersGroupsId): self
    {
        $this->tblNewslettersGroupsId = $tblNewslettersGroupsId;

        return $this;
    }

    public function getTblSystemEmailsTemplatesId(): ?int
    {
        return $this->tblSystemEmailsTemplatesId;
    }

    public function setTblSystemEmailsTemplatesId(?int $tblSystemEmailsTemplatesId): self
    {
        $this->tblSystemEmailsTemplatesId = $tblSystemEmailsTemplatesId;

        return $this;
    }

    public function getMultipleTblCompaniesCatId(): ?string
    {
        return $this->multipleTblCompaniesCatId;
    }

    public function setMultipleTblCompaniesCatId(?string $multipleTblCompaniesCatId): self
    {
        $this->multipleTblCompaniesCatId = $multipleTblCompaniesCatId;

        return $this;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(?int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getTblCompaniesCatSubId(): ?int
    {
        return $this->tblCompaniesCatSubId;
    }

    public function setTblCompaniesCatSubId(?int $tblCompaniesCatSubId): self
    {
        $this->tblCompaniesCatSubId = $tblCompaniesCatSubId;

        return $this;
    }

    public function getTblSubscriptionsId(): ?int
    {
        return $this->tblSubscriptionsId;
    }

    public function setTblSubscriptionsId(?int $tblSubscriptionsId): self
    {
        $this->tblSubscriptionsId = $tblSubscriptionsId;

        return $this;
    }

    public function getNewsletterFreeAccounts(): ?bool
    {
        return $this->newsletterFreeAccounts;
    }

    public function setNewsletterFreeAccounts(bool $newsletterFreeAccounts): self
    {
        $this->newsletterFreeAccounts = $newsletterFreeAccounts;

        return $this;
    }

    public function getNewsletterContactpersonOnly(): ?bool
    {
        return $this->newsletterContactpersonOnly;
    }

    public function setNewsletterContactpersonOnly(bool $newsletterContactpersonOnly): self
    {
        $this->newsletterContactpersonOnly = $newsletterContactpersonOnly;

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
