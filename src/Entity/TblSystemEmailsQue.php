<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemEmailsQue
 *
 * @ORM\Table(name="tbl_system_emails_que")
 * @ORM\Entity
 */
class TblSystemEmailsQue
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_emails_que_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemEmailsQueId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_newsletters_forms_autoresponders_id", type="integer", nullable=true)
     */
    private $tblNewslettersFormsAutorespondersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_newsletters_id", type="integer", nullable=true)
     */
    private $tblNewslettersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_newsletters_subscribers_id", type="integer", nullable=true)
     */
    private $tblNewslettersSubscribersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_newsletters_id", type="integer", nullable=true)
     */
    private $tblCompaniesNewslettersId;

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
     * @var int|null
     *
     * @ORM\Column(name="tbl_members_id", type="integer", nullable=true)
     */
    private $tblMembersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_md5", type="string", length=32, nullable=true)
     */
    private $emailMd5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_to", type="string", length=255, nullable=true)
     */
    private $emailTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_replyto", type="string", length=250, nullable=true)
     */
    private $emailReplyto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_from", type="string", length=255, nullable=true)
     */
    private $emailFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_subject", type="string", length=255, nullable=true)
     */
    private $emailSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_message", type="text", length=65535, nullable=true)
     */
    private $emailMessage;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_priority", type="boolean", nullable=false)
     */
    private $emailPriority = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="email_date", type="datetime", nullable=true)
     */
    private $emailDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_ip", type="string", length=100, nullable=true)
     */
    private $emailIp;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_sent", type="boolean", nullable=false)
     */
    private $emailSent = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="email_sent_date", type="datetime", nullable=true)
     */
    private $emailSentDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_sent_error", type="boolean", nullable=false)
     */
    private $emailSentError = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="email_sent_error_date", type="datetime", nullable=true)
     */
    private $emailSentErrorDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="email_open", type="boolean", nullable=true)
     */
    private $emailOpen = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="email_open_date", type="datetime", nullable=true)
     */
    private $emailOpenDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_sent_notopened", type="boolean", nullable=false)
     */
    private $emailSentNotopened = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="email_sent_notopened_date", type="datetime", nullable=true)
     */
    private $emailSentNotopenedDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="email_autoreply", type="boolean", nullable=true, options={"default"="1"})
     */
    private $emailAutoreply = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_response", type="string", length=1000, nullable=true)
     */
    private $emailResponse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_reponse_id", type="string", length=150, nullable=true)
     */
    private $emailReponseId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_reponse_message", type="string", length=250, nullable=true)
     */
    private $emailReponseMessage;

    public function getTblSystemEmailsQueId(): ?int
    {
        return $this->tblSystemEmailsQueId;
    }

    public function getTblNewslettersFormsAutorespondersId(): ?int
    {
        return $this->tblNewslettersFormsAutorespondersId;
    }

    public function setTblNewslettersFormsAutorespondersId(?int $tblNewslettersFormsAutorespondersId): self
    {
        $this->tblNewslettersFormsAutorespondersId = $tblNewslettersFormsAutorespondersId;

        return $this;
    }

    public function getTblNewslettersId(): ?int
    {
        return $this->tblNewslettersId;
    }

    public function setTblNewslettersId(?int $tblNewslettersId): self
    {
        $this->tblNewslettersId = $tblNewslettersId;

        return $this;
    }

    public function getTblNewslettersSubscribersId(): ?int
    {
        return $this->tblNewslettersSubscribersId;
    }

    public function setTblNewslettersSubscribersId(?int $tblNewslettersSubscribersId): self
    {
        $this->tblNewslettersSubscribersId = $tblNewslettersSubscribersId;

        return $this;
    }

    public function getTblCompaniesNewslettersId(): ?int
    {
        return $this->tblCompaniesNewslettersId;
    }

    public function setTblCompaniesNewslettersId(?int $tblCompaniesNewslettersId): self
    {
        $this->tblCompaniesNewslettersId = $tblCompaniesNewslettersId;

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

    public function getTblMembersId(): ?int
    {
        return $this->tblMembersId;
    }

    public function setTblMembersId(?int $tblMembersId): self
    {
        $this->tblMembersId = $tblMembersId;

        return $this;
    }

    public function getEmailMd5(): ?string
    {
        return $this->emailMd5;
    }

    public function setEmailMd5(?string $emailMd5): self
    {
        $this->emailMd5 = $emailMd5;

        return $this;
    }

    public function getEmailTo(): ?string
    {
        return $this->emailTo;
    }

    public function setEmailTo(?string $emailTo): self
    {
        $this->emailTo = $emailTo;

        return $this;
    }

    public function getEmailReplyto(): ?string
    {
        return $this->emailReplyto;
    }

    public function setEmailReplyto(?string $emailReplyto): self
    {
        $this->emailReplyto = $emailReplyto;

        return $this;
    }

    public function getEmailFrom(): ?string
    {
        return $this->emailFrom;
    }

    public function setEmailFrom(?string $emailFrom): self
    {
        $this->emailFrom = $emailFrom;

        return $this;
    }

    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }

    public function setEmailSubject(?string $emailSubject): self
    {
        $this->emailSubject = $emailSubject;

        return $this;
    }

    public function getEmailMessage(): ?string
    {
        return $this->emailMessage;
    }

    public function setEmailMessage(?string $emailMessage): self
    {
        $this->emailMessage = $emailMessage;

        return $this;
    }

    public function getEmailPriority(): ?bool
    {
        return $this->emailPriority;
    }

    public function setEmailPriority(bool $emailPriority): self
    {
        $this->emailPriority = $emailPriority;

        return $this;
    }

    public function getEmailDate(): ?\DateTimeInterface
    {
        return $this->emailDate;
    }

    public function setEmailDate(?\DateTimeInterface $emailDate): self
    {
        $this->emailDate = $emailDate;

        return $this;
    }

    public function getEmailIp(): ?string
    {
        return $this->emailIp;
    }

    public function setEmailIp(?string $emailIp): self
    {
        $this->emailIp = $emailIp;

        return $this;
    }

    public function getEmailSent(): ?bool
    {
        return $this->emailSent;
    }

    public function setEmailSent(bool $emailSent): self
    {
        $this->emailSent = $emailSent;

        return $this;
    }

    public function getEmailSentDate(): ?\DateTimeInterface
    {
        return $this->emailSentDate;
    }

    public function setEmailSentDate(?\DateTimeInterface $emailSentDate): self
    {
        $this->emailSentDate = $emailSentDate;

        return $this;
    }

    public function getEmailSentError(): ?bool
    {
        return $this->emailSentError;
    }

    public function setEmailSentError(bool $emailSentError): self
    {
        $this->emailSentError = $emailSentError;

        return $this;
    }

    public function getEmailSentErrorDate(): ?\DateTimeInterface
    {
        return $this->emailSentErrorDate;
    }

    public function setEmailSentErrorDate(?\DateTimeInterface $emailSentErrorDate): self
    {
        $this->emailSentErrorDate = $emailSentErrorDate;

        return $this;
    }

    public function getEmailOpen(): ?bool
    {
        return $this->emailOpen;
    }

    public function setEmailOpen(?bool $emailOpen): self
    {
        $this->emailOpen = $emailOpen;

        return $this;
    }

    public function getEmailOpenDate(): ?\DateTimeInterface
    {
        return $this->emailOpenDate;
    }

    public function setEmailOpenDate(?\DateTimeInterface $emailOpenDate): self
    {
        $this->emailOpenDate = $emailOpenDate;

        return $this;
    }

    public function getEmailSentNotopened(): ?bool
    {
        return $this->emailSentNotopened;
    }

    public function setEmailSentNotopened(bool $emailSentNotopened): self
    {
        $this->emailSentNotopened = $emailSentNotopened;

        return $this;
    }

    public function getEmailSentNotopenedDate(): ?\DateTimeInterface
    {
        return $this->emailSentNotopenedDate;
    }

    public function setEmailSentNotopenedDate(?\DateTimeInterface $emailSentNotopenedDate): self
    {
        $this->emailSentNotopenedDate = $emailSentNotopenedDate;

        return $this;
    }

    public function getEmailAutoreply(): ?bool
    {
        return $this->emailAutoreply;
    }

    public function setEmailAutoreply(?bool $emailAutoreply): self
    {
        $this->emailAutoreply = $emailAutoreply;

        return $this;
    }

    public function getEmailResponse(): ?string
    {
        return $this->emailResponse;
    }

    public function setEmailResponse(?string $emailResponse): self
    {
        $this->emailResponse = $emailResponse;

        return $this;
    }

    public function getEmailReponseId(): ?string
    {
        return $this->emailReponseId;
    }

    public function setEmailReponseId(?string $emailReponseId): self
    {
        $this->emailReponseId = $emailReponseId;

        return $this;
    }

    public function getEmailReponseMessage(): ?string
    {
        return $this->emailReponseMessage;
    }

    public function setEmailReponseMessage(?string $emailReponseMessage): self
    {
        $this->emailReponseMessage = $emailReponseMessage;

        return $this;
    }


}
