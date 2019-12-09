<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMembers
 *
 * @ORM\Table(name="tbl_members")
 * @ORM\Entity
 */
class TblMembers
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_members_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblMembersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_countries_id", type="integer", nullable=true)
     */
    private $tblSystemCountriesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_username", type="string", length=45, nullable=true)
     */
    private $memberUsername;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_password", type="string", length=64, nullable=true)
     */
    private $memberPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_lat", type="string", length=50, nullable=true)
     */
    private $memberLat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_long", type="string", length=50, nullable=true)
     */
    private $memberLong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_md5", type="string", length=32, nullable=true)
     */
    private $memberMd5;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="member_created", type="datetime", nullable=true)
     */
    private $memberCreated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_created_ip", type="string", length=100, nullable=true)
     */
    private $memberCreatedIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_created_browser", type="string", length=250, nullable=true)
     */
    private $memberCreatedBrowser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="member_birthyear", type="integer", nullable=true)
     */
    private $memberBirthyear;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="member_dateofbirth", type="date", nullable=true)
     */
    private $memberDateofbirth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_gender", type="string", length=45, nullable=true)
     */
    private $memberGender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_name", type="string", length=255, nullable=true)
     */
    private $memberName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_firstname", type="string", length=255, nullable=true)
     */
    private $memberFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_lastname", type="string", length=255, nullable=true)
     */
    private $memberLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_address", type="string", length=255, nullable=true)
     */
    private $memberAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_zipcode", type="string", length=45, nullable=true)
     */
    private $memberZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_city", type="string", length=255, nullable=true)
     */
    private $memberCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_phonenr", type="string", length=45, nullable=true)
     */
    private $memberPhonenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_mobilenr", type="string", length=45, nullable=true)
     */
    private $memberMobilenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_email", type="string", length=255, nullable=true)
     */
    private $memberEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_fb", type="string", length=255, nullable=true)
     */
    private $memberFb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_google", type="string", length=255, nullable=true)
     */
    private $memberGoogle;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="member_newsletters", type="boolean", nullable=true, options={"default"="1"})
     */
    private $memberNewsletters = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="member_approved", type="boolean", nullable=true, options={"default"="1"})
     */
    private $memberApproved = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="member_approved_date", type="datetime", nullable=true)
     */
    private $memberApprovedDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="member_unsubscribe_date", type="datetime", nullable=true)
     */
    private $memberUnsubscribeDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="member_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $memberActive = '1';

    public function getTblMembersId(): ?int
    {
        return $this->tblMembersId;
    }

    public function getTblSystemCountriesId(): ?int
    {
        return $this->tblSystemCountriesId;
    }

    public function setTblSystemCountriesId(?int $tblSystemCountriesId): self
    {
        $this->tblSystemCountriesId = $tblSystemCountriesId;

        return $this;
    }

    public function getMemberUsername(): ?string
    {
        return $this->memberUsername;
    }

    public function setMemberUsername(?string $memberUsername): self
    {
        $this->memberUsername = $memberUsername;

        return $this;
    }

    public function getMemberPassword(): ?string
    {
        return $this->memberPassword;
    }

    public function setMemberPassword(?string $memberPassword): self
    {
        $this->memberPassword = $memberPassword;

        return $this;
    }

    public function getMemberLat(): ?string
    {
        return $this->memberLat;
    }

    public function setMemberLat(?string $memberLat): self
    {
        $this->memberLat = $memberLat;

        return $this;
    }

    public function getMemberLong(): ?string
    {
        return $this->memberLong;
    }

    public function setMemberLong(?string $memberLong): self
    {
        $this->memberLong = $memberLong;

        return $this;
    }

    public function getMemberMd5(): ?string
    {
        return $this->memberMd5;
    }

    public function setMemberMd5(?string $memberMd5): self
    {
        $this->memberMd5 = $memberMd5;

        return $this;
    }

    public function getMemberCreated(): ?\DateTimeInterface
    {
        return $this->memberCreated;
    }

    public function setMemberCreated(?\DateTimeInterface $memberCreated): self
    {
        $this->memberCreated = $memberCreated;

        return $this;
    }

    public function getMemberCreatedIp(): ?string
    {
        return $this->memberCreatedIp;
    }

    public function setMemberCreatedIp(?string $memberCreatedIp): self
    {
        $this->memberCreatedIp = $memberCreatedIp;

        return $this;
    }

    public function getMemberCreatedBrowser(): ?string
    {
        return $this->memberCreatedBrowser;
    }

    public function setMemberCreatedBrowser(?string $memberCreatedBrowser): self
    {
        $this->memberCreatedBrowser = $memberCreatedBrowser;

        return $this;
    }

    public function getMemberBirthyear(): ?int
    {
        return $this->memberBirthyear;
    }

    public function setMemberBirthyear(?int $memberBirthyear): self
    {
        $this->memberBirthyear = $memberBirthyear;

        return $this;
    }

    public function getMemberDateofbirth(): ?\DateTimeInterface
    {
        return $this->memberDateofbirth;
    }

    public function setMemberDateofbirth(?\DateTimeInterface $memberDateofbirth): self
    {
        $this->memberDateofbirth = $memberDateofbirth;

        return $this;
    }

    public function getMemberGender(): ?string
    {
        return $this->memberGender;
    }

    public function setMemberGender(?string $memberGender): self
    {
        $this->memberGender = $memberGender;

        return $this;
    }

    public function getMemberName(): ?string
    {
        return $this->memberName;
    }

    public function setMemberName(?string $memberName): self
    {
        $this->memberName = $memberName;

        return $this;
    }

    public function getMemberFirstname(): ?string
    {
        return $this->memberFirstname;
    }

    public function setMemberFirstname(?string $memberFirstname): self
    {
        $this->memberFirstname = $memberFirstname;

        return $this;
    }

    public function getMemberLastname(): ?string
    {
        return $this->memberLastname;
    }

    public function setMemberLastname(?string $memberLastname): self
    {
        $this->memberLastname = $memberLastname;

        return $this;
    }

    public function getMemberAddress(): ?string
    {
        return $this->memberAddress;
    }

    public function setMemberAddress(?string $memberAddress): self
    {
        $this->memberAddress = $memberAddress;

        return $this;
    }

    public function getMemberZipcode(): ?string
    {
        return $this->memberZipcode;
    }

    public function setMemberZipcode(?string $memberZipcode): self
    {
        $this->memberZipcode = $memberZipcode;

        return $this;
    }

    public function getMemberCity(): ?string
    {
        return $this->memberCity;
    }

    public function setMemberCity(?string $memberCity): self
    {
        $this->memberCity = $memberCity;

        return $this;
    }

    public function getMemberPhonenr(): ?string
    {
        return $this->memberPhonenr;
    }

    public function setMemberPhonenr(?string $memberPhonenr): self
    {
        $this->memberPhonenr = $memberPhonenr;

        return $this;
    }

    public function getMemberMobilenr(): ?string
    {
        return $this->memberMobilenr;
    }

    public function setMemberMobilenr(?string $memberMobilenr): self
    {
        $this->memberMobilenr = $memberMobilenr;

        return $this;
    }

    public function getMemberEmail(): ?string
    {
        return $this->memberEmail;
    }

    public function setMemberEmail(?string $memberEmail): self
    {
        $this->memberEmail = $memberEmail;

        return $this;
    }

    public function getMemberFb(): ?string
    {
        return $this->memberFb;
    }

    public function setMemberFb(?string $memberFb): self
    {
        $this->memberFb = $memberFb;

        return $this;
    }

    public function getMemberGoogle(): ?string
    {
        return $this->memberGoogle;
    }

    public function setMemberGoogle(?string $memberGoogle): self
    {
        $this->memberGoogle = $memberGoogle;

        return $this;
    }

    public function getMemberNewsletters(): ?bool
    {
        return $this->memberNewsletters;
    }

    public function setMemberNewsletters(?bool $memberNewsletters): self
    {
        $this->memberNewsletters = $memberNewsletters;

        return $this;
    }

    public function getMemberApproved(): ?bool
    {
        return $this->memberApproved;
    }

    public function setMemberApproved(?bool $memberApproved): self
    {
        $this->memberApproved = $memberApproved;

        return $this;
    }

    public function getMemberApprovedDate(): ?\DateTimeInterface
    {
        return $this->memberApprovedDate;
    }

    public function setMemberApprovedDate(?\DateTimeInterface $memberApprovedDate): self
    {
        $this->memberApprovedDate = $memberApprovedDate;

        return $this;
    }

    public function getMemberUnsubscribeDate(): ?\DateTimeInterface
    {
        return $this->memberUnsubscribeDate;
    }

    public function setMemberUnsubscribeDate(?\DateTimeInterface $memberUnsubscribeDate): self
    {
        $this->memberUnsubscribeDate = $memberUnsubscribeDate;

        return $this;
    }

    public function getMemberActive(): ?bool
    {
        return $this->memberActive;
    }

    public function setMemberActive(?bool $memberActive): self
    {
        $this->memberActive = $memberActive;

        return $this;
    }


}
