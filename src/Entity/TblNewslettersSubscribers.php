<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewslettersSubscribers
 *
 * @ORM\Table(name="tbl_newsletters_subscribers")
 * @ORM\Entity
 */
class TblNewslettersSubscribers
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_subscribers_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblNewslettersSubscribersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_newsletters_groups_id", type="integer", nullable=true)
     */
    private $tblNewslettersGroupsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_newsletters_forms_id", type="integer", nullable=true)
     */
    private $tblNewslettersFormsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscriber_md5", type="string", length=32, nullable=true)
     */
    private $subscriberMd5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscriber_name", type="string", length=250, nullable=true)
     */
    private $subscriberName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscriber_zipcode", type="string", length=20, nullable=true)
     */
    private $subscriberZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscriber_lat", type="string", length=50, nullable=true)
     */
    private $subscriberLat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscriber_long", type="string", length=50, nullable=true)
     */
    private $subscriberLong;

    /**
     * @var string
     *
     * @ORM\Column(name="subscriber_email", type="string", length=255, nullable=false)
     */
    private $subscriberEmail;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="subscriber_created", type="datetime", nullable=true)
     */
    private $subscriberCreated;

    /**
     * @var bool
     *
     * @ORM\Column(name="subscriber_newsletters", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subscriberNewsletters = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscriber_ip", type="string", length=100, nullable=true)
     */
    private $subscriberIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscriber_browser", type="string", length=500, nullable=true)
     */
    private $subscriberBrowser;

    /**
     * @var bool
     *
     * @ORM\Column(name="subscriber_approved", type="boolean", nullable=false)
     */
    private $subscriberApproved = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="subscriber_approved_date", type="datetime", nullable=true)
     */
    private $subscriberApprovedDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="subscriber_unsubscribe_date", type="datetime", nullable=true)
     */
    private $subscriberUnsubscribeDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="subscriber_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subscriberActive = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="subscriber_bluebuster", type="boolean", nullable=true)
     */
    private $subscriberBluebuster = '0';

    public function getTblNewslettersSubscribersId(): ?int
    {
        return $this->tblNewslettersSubscribersId;
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

    public function getTblNewslettersFormsId(): ?int
    {
        return $this->tblNewslettersFormsId;
    }

    public function setTblNewslettersFormsId(?int $tblNewslettersFormsId): self
    {
        $this->tblNewslettersFormsId = $tblNewslettersFormsId;

        return $this;
    }

    public function getSubscriberMd5(): ?string
    {
        return $this->subscriberMd5;
    }

    public function setSubscriberMd5(?string $subscriberMd5): self
    {
        $this->subscriberMd5 = $subscriberMd5;

        return $this;
    }

    public function getSubscriberName(): ?string
    {
        return $this->subscriberName;
    }

    public function setSubscriberName(?string $subscriberName): self
    {
        $this->subscriberName = $subscriberName;

        return $this;
    }

    public function getSubscriberZipcode(): ?string
    {
        return $this->subscriberZipcode;
    }

    public function setSubscriberZipcode(?string $subscriberZipcode): self
    {
        $this->subscriberZipcode = $subscriberZipcode;

        return $this;
    }

    public function getSubscriberLat(): ?string
    {
        return $this->subscriberLat;
    }

    public function setSubscriberLat(?string $subscriberLat): self
    {
        $this->subscriberLat = $subscriberLat;

        return $this;
    }

    public function getSubscriberLong(): ?string
    {
        return $this->subscriberLong;
    }

    public function setSubscriberLong(?string $subscriberLong): self
    {
        $this->subscriberLong = $subscriberLong;

        return $this;
    }

    public function getSubscriberEmail(): ?string
    {
        return $this->subscriberEmail;
    }

    public function setSubscriberEmail(string $subscriberEmail): self
    {
        $this->subscriberEmail = $subscriberEmail;

        return $this;
    }

    public function getSubscriberCreated(): ?\DateTimeInterface
    {
        return $this->subscriberCreated;
    }

    public function setSubscriberCreated(?\DateTimeInterface $subscriberCreated): self
    {
        $this->subscriberCreated = $subscriberCreated;

        return $this;
    }

    public function getSubscriberNewsletters(): ?bool
    {
        return $this->subscriberNewsletters;
    }

    public function setSubscriberNewsletters(bool $subscriberNewsletters): self
    {
        $this->subscriberNewsletters = $subscriberNewsletters;

        return $this;
    }

    public function getSubscriberIp(): ?string
    {
        return $this->subscriberIp;
    }

    public function setSubscriberIp(?string $subscriberIp): self
    {
        $this->subscriberIp = $subscriberIp;

        return $this;
    }

    public function getSubscriberBrowser(): ?string
    {
        return $this->subscriberBrowser;
    }

    public function setSubscriberBrowser(?string $subscriberBrowser): self
    {
        $this->subscriberBrowser = $subscriberBrowser;

        return $this;
    }

    public function getSubscriberApproved(): ?bool
    {
        return $this->subscriberApproved;
    }

    public function setSubscriberApproved(bool $subscriberApproved): self
    {
        $this->subscriberApproved = $subscriberApproved;

        return $this;
    }

    public function getSubscriberApprovedDate(): ?\DateTimeInterface
    {
        return $this->subscriberApprovedDate;
    }

    public function setSubscriberApprovedDate(?\DateTimeInterface $subscriberApprovedDate): self
    {
        $this->subscriberApprovedDate = $subscriberApprovedDate;

        return $this;
    }

    public function getSubscriberUnsubscribeDate(): ?\DateTimeInterface
    {
        return $this->subscriberUnsubscribeDate;
    }

    public function setSubscriberUnsubscribeDate(?\DateTimeInterface $subscriberUnsubscribeDate): self
    {
        $this->subscriberUnsubscribeDate = $subscriberUnsubscribeDate;

        return $this;
    }

    public function getSubscriberActive(): ?bool
    {
        return $this->subscriberActive;
    }

    public function setSubscriberActive(bool $subscriberActive): self
    {
        $this->subscriberActive = $subscriberActive;

        return $this;
    }

    public function getSubscriberBluebuster(): ?bool
    {
        return $this->subscriberBluebuster;
    }

    public function setSubscriberBluebuster(?bool $subscriberBluebuster): self
    {
        $this->subscriberBluebuster = $subscriberBluebuster;

        return $this;
    }


}
