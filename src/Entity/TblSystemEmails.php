<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemEmails
 *
 * @ORM\Table(name="tbl_system_emails")
 * @ORM\Entity
 */
class TblSystemEmails
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_emails_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemEmailsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_name", type="string", length=250, nullable=true)
     */
    private $emailName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_subject", type="string", length=250, nullable=true)
     */
    private $emailSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_content", type="text", length=65535, nullable=true)
     */
    private $emailContent;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_autoreply_notopen", type="boolean", nullable=false)
     */
    private $emailAutoreplyNotopen = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="email_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emailActive = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="email_subscriber_confirm", type="boolean", nullable=true)
     */
    private $emailSubscriberConfirm = '0';

    public function getTblSystemEmailsId(): ?int
    {
        return $this->tblSystemEmailsId;
    }

    public function getEmailName(): ?string
    {
        return $this->emailName;
    }

    public function setEmailName(?string $emailName): self
    {
        $this->emailName = $emailName;

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

    public function getEmailContent(): ?string
    {
        return $this->emailContent;
    }

    public function setEmailContent(?string $emailContent): self
    {
        $this->emailContent = $emailContent;

        return $this;
    }

    public function getEmailAutoreplyNotopen(): ?bool
    {
        return $this->emailAutoreplyNotopen;
    }

    public function setEmailAutoreplyNotopen(bool $emailAutoreplyNotopen): self
    {
        $this->emailAutoreplyNotopen = $emailAutoreplyNotopen;

        return $this;
    }

    public function getEmailActive(): ?bool
    {
        return $this->emailActive;
    }

    public function setEmailActive(bool $emailActive): self
    {
        $this->emailActive = $emailActive;

        return $this;
    }

    public function getEmailSubscriberConfirm(): ?bool
    {
        return $this->emailSubscriberConfirm;
    }

    public function setEmailSubscriberConfirm(?bool $emailSubscriberConfirm): self
    {
        $this->emailSubscriberConfirm = $emailSubscriberConfirm;

        return $this;
    }


}
