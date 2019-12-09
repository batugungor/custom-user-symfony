<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesOffersClaims
 *
 * @ORM\Table(name="tbl_companies_offers_claims")
 * @ORM\Entity
 */
class TblCompaniesOffersClaims
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_offers_claims_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesOffersClaimsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_offers_id", type="integer", nullable=false)
     */
    private $tblCompaniesOffersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_md5", type="string", length=32, nullable=true)
     */
    private $claimMd5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_firstname", type="string", length=250, nullable=true)
     */
    private $claimFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_lastname", type="string", length=250, nullable=true)
     */
    private $claimLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_address", type="string", length=250, nullable=true)
     */
    private $claimAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_zipcode", type="string", length=200, nullable=true)
     */
    private $claimZipcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_city", type="string", length=250, nullable=true)
     */
    private $claimCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_mobilenr", type="string", length=100, nullable=true)
     */
    private $claimMobilenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_email", type="string", length=250, nullable=true)
     */
    private $claimEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="claim_ip", type="string", length=200, nullable=true)
     */
    private $claimIp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="claim_datetime", type="datetime", nullable=true)
     */
    private $claimDatetime;

    /**
     * @var bool
     *
     * @ORM\Column(name="claim_collected", type="boolean", nullable=false)
     */
    private $claimCollected = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="claim_declined", type="boolean", nullable=false)
     */
    private $claimDeclined = '0';

    public function getTblCompaniesOffersClaimsId(): ?int
    {
        return $this->tblCompaniesOffersClaimsId;
    }

    public function getTblCompaniesOffersId(): ?int
    {
        return $this->tblCompaniesOffersId;
    }

    public function setTblCompaniesOffersId(int $tblCompaniesOffersId): self
    {
        $this->tblCompaniesOffersId = $tblCompaniesOffersId;

        return $this;
    }

    public function getClaimMd5(): ?string
    {
        return $this->claimMd5;
    }

    public function setClaimMd5(?string $claimMd5): self
    {
        $this->claimMd5 = $claimMd5;

        return $this;
    }

    public function getClaimFirstname(): ?string
    {
        return $this->claimFirstname;
    }

    public function setClaimFirstname(?string $claimFirstname): self
    {
        $this->claimFirstname = $claimFirstname;

        return $this;
    }

    public function getClaimLastname(): ?string
    {
        return $this->claimLastname;
    }

    public function setClaimLastname(?string $claimLastname): self
    {
        $this->claimLastname = $claimLastname;

        return $this;
    }

    public function getClaimAddress(): ?string
    {
        return $this->claimAddress;
    }

    public function setClaimAddress(?string $claimAddress): self
    {
        $this->claimAddress = $claimAddress;

        return $this;
    }

    public function getClaimZipcode(): ?string
    {
        return $this->claimZipcode;
    }

    public function setClaimZipcode(?string $claimZipcode): self
    {
        $this->claimZipcode = $claimZipcode;

        return $this;
    }

    public function getClaimCity(): ?string
    {
        return $this->claimCity;
    }

    public function setClaimCity(?string $claimCity): self
    {
        $this->claimCity = $claimCity;

        return $this;
    }

    public function getClaimMobilenr(): ?string
    {
        return $this->claimMobilenr;
    }

    public function setClaimMobilenr(?string $claimMobilenr): self
    {
        $this->claimMobilenr = $claimMobilenr;

        return $this;
    }

    public function getClaimEmail(): ?string
    {
        return $this->claimEmail;
    }

    public function setClaimEmail(?string $claimEmail): self
    {
        $this->claimEmail = $claimEmail;

        return $this;
    }

    public function getClaimIp(): ?string
    {
        return $this->claimIp;
    }

    public function setClaimIp(?string $claimIp): self
    {
        $this->claimIp = $claimIp;

        return $this;
    }

    public function getClaimDatetime(): ?\DateTimeInterface
    {
        return $this->claimDatetime;
    }

    public function setClaimDatetime(?\DateTimeInterface $claimDatetime): self
    {
        $this->claimDatetime = $claimDatetime;

        return $this;
    }

    public function getClaimCollected(): ?bool
    {
        return $this->claimCollected;
    }

    public function setClaimCollected(bool $claimCollected): self
    {
        $this->claimCollected = $claimCollected;

        return $this;
    }

    public function getClaimDeclined(): ?bool
    {
        return $this->claimDeclined;
    }

    public function setClaimDeclined(bool $claimDeclined): self
    {
        $this->claimDeclined = $claimDeclined;

        return $this;
    }


}
