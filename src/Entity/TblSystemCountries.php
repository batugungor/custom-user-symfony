<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemCountries
 *
 * @ORM\Table(name="tbl_system_countries")
 * @ORM\Entity
 */
class TblSystemCountries
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_countries_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemCountriesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_name", type="string", length=255, nullable=true)
     */
    private $countryName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code_alpha2", type="string", length=5, nullable=true)
     */
    private $countryCodeAlpha2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code_alpha3", type="string", length=5, nullable=true)
     */
    private $countryCodeAlpha3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="country_code", type="integer", nullable=true)
     */
    private $countryCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="continent_code", type="string", length=5, nullable=true)
     */
    private $continentCode;

    /**
     * @var bool
     *
     * @ORM\Column(name="country_visit", type="boolean", nullable=false, options={"default"="1"})
     */
    private $countryVisit = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=255, nullable=true)
     */
    private $seoUrl;

    public function getTblSystemCountriesId(): ?int
    {
        return $this->tblSystemCountriesId;
    }

    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    public function setCountryName(?string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    public function getCountryCodeAlpha2(): ?string
    {
        return $this->countryCodeAlpha2;
    }

    public function setCountryCodeAlpha2(?string $countryCodeAlpha2): self
    {
        $this->countryCodeAlpha2 = $countryCodeAlpha2;

        return $this;
    }

    public function getCountryCodeAlpha3(): ?string
    {
        return $this->countryCodeAlpha3;
    }

    public function setCountryCodeAlpha3(?string $countryCodeAlpha3): self
    {
        $this->countryCodeAlpha3 = $countryCodeAlpha3;

        return $this;
    }

    public function getCountryCode(): ?int
    {
        return $this->countryCode;
    }

    public function setCountryCode(?int $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getContinentCode(): ?string
    {
        return $this->continentCode;
    }

    public function setContinentCode(?string $continentCode): self
    {
        $this->continentCode = $continentCode;

        return $this;
    }

    public function getCountryVisit(): ?bool
    {
        return $this->countryVisit;
    }

    public function setCountryVisit(bool $countryVisit): self
    {
        $this->countryVisit = $countryVisit;

        return $this;
    }

    public function getSeoUrl(): ?string
    {
        return $this->seoUrl;
    }

    public function setSeoUrl(?string $seoUrl): self
    {
        $this->seoUrl = $seoUrl;

        return $this;
    }


}
