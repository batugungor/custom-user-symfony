<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemVisits
 *
 * @ORM\Table(name="tbl_system_visits")
 * @ORM\Entity
 */
class TblSystemVisits
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_visits_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemVisitsId;

    /**
     * @var int
     *
     * @ORM\Column(name="sessionid", type="integer", nullable=false)
     */
    private $sessionid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=true)
     */
    private $ip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="browser", type="string", length=255, nullable=true)
     */
    private $browser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=254, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=10, nullable=true)
     */
    private $countryCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time", type="time", nullable=true)
     */
    private $time;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain", type="string", length=254, nullable=true)
     */
    private $domain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var string|null
     *
     * @ORM\Column(name="query", type="string", length=255, nullable=true)
     */
    private $query;

    /**
     * @var int
     *
     * @ORM\Column(name="risk", type="integer", nullable=false)
     */
    private $risk = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="referer", type="string", length=255, nullable=true)
     */
    private $referer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referer_site", type="string", length=255, nullable=true)
     */
    private $refererSite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referer_query", type="string", length=255, nullable=true)
     */
    private $refererQuery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visit_countrycode", type="string", length=10, nullable=true)
     */
    private $visitCountrycode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visit_country", type="string", length=150, nullable=true)
     */
    private $visitCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visit_region", type="string", length=150, nullable=true)
     */
    private $visitRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visit_city", type="string", length=150, nullable=true)
     */
    private $visitCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visit_latitude", type="string", length=20, nullable=true)
     */
    private $visitLatitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visit_longitude", type="string", length=20, nullable=true)
     */
    private $visitLongitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="browser_latitude", type="string", length=100, nullable=true)
     */
    private $browserLatitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="browser_longitude", type="string", length=100, nullable=true)
     */
    private $browserLongitude;

    public function getTblSystemVisitsId(): ?int
    {
        return $this->tblSystemVisitsId;
    }

    public function getSessionid(): ?int
    {
        return $this->sessionid;
    }

    public function setSessionid(int $sessionid): self
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getBrowser(): ?string
    {
        return $this->browser;
    }

    public function setBrowser(?string $browser): self
    {
        $this->browser = $browser;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(?\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getRisk(): ?int
    {
        return $this->risk;
    }

    public function setRisk(int $risk): self
    {
        $this->risk = $risk;

        return $this;
    }

    public function getReferer(): ?string
    {
        return $this->referer;
    }

    public function setReferer(?string $referer): self
    {
        $this->referer = $referer;

        return $this;
    }

    public function getRefererSite(): ?string
    {
        return $this->refererSite;
    }

    public function setRefererSite(?string $refererSite): self
    {
        $this->refererSite = $refererSite;

        return $this;
    }

    public function getRefererQuery(): ?string
    {
        return $this->refererQuery;
    }

    public function setRefererQuery(?string $refererQuery): self
    {
        $this->refererQuery = $refererQuery;

        return $this;
    }

    public function getVisitCountrycode(): ?string
    {
        return $this->visitCountrycode;
    }

    public function setVisitCountrycode(?string $visitCountrycode): self
    {
        $this->visitCountrycode = $visitCountrycode;

        return $this;
    }

    public function getVisitCountry(): ?string
    {
        return $this->visitCountry;
    }

    public function setVisitCountry(?string $visitCountry): self
    {
        $this->visitCountry = $visitCountry;

        return $this;
    }

    public function getVisitRegion(): ?string
    {
        return $this->visitRegion;
    }

    public function setVisitRegion(?string $visitRegion): self
    {
        $this->visitRegion = $visitRegion;

        return $this;
    }

    public function getVisitCity(): ?string
    {
        return $this->visitCity;
    }

    public function setVisitCity(?string $visitCity): self
    {
        $this->visitCity = $visitCity;

        return $this;
    }

    public function getVisitLatitude(): ?string
    {
        return $this->visitLatitude;
    }

    public function setVisitLatitude(?string $visitLatitude): self
    {
        $this->visitLatitude = $visitLatitude;

        return $this;
    }

    public function getVisitLongitude(): ?string
    {
        return $this->visitLongitude;
    }

    public function setVisitLongitude(?string $visitLongitude): self
    {
        $this->visitLongitude = $visitLongitude;

        return $this;
    }

    public function getBrowserLatitude(): ?string
    {
        return $this->browserLatitude;
    }

    public function setBrowserLatitude(?string $browserLatitude): self
    {
        $this->browserLatitude = $browserLatitude;

        return $this;
    }

    public function getBrowserLongitude(): ?string
    {
        return $this->browserLongitude;
    }

    public function setBrowserLongitude(?string $browserLongitude): self
    {
        $this->browserLongitude = $browserLongitude;

        return $this;
    }


}
