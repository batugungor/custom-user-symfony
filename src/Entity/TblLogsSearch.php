<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLogsSearch
 *
 * @ORM\Table(name="tbl_logs_search")
 * @ORM\Entity
 */
class TblLogsSearch
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_logs_search_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblLogsSearchId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_query", type="string", length=200, nullable=true)
     */
    private $searchQuery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_location", type="string", length=200, nullable=true)
     */
    private $searchLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_type", type="string", length=50, nullable=true)
     */
    private $searchType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="search_date", type="datetime", nullable=true)
     */
    private $searchDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_ip", type="string", length=100, nullable=true)
     */
    private $searchIp;

    /**
     * @var bool
     *
     * @ORM\Column(name="search_result", type="boolean", nullable=false)
     */
    private $searchResult = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="search_amount", type="integer", nullable=true)
     */
    private $searchAmount;

    /**
     * @var bool
     *
     * @ORM\Column(name="search_handled", type="boolean", nullable=false)
     */
    private $searchHandled = '0';

    public function getTblLogsSearchId(): ?int
    {
        return $this->tblLogsSearchId;
    }

    public function getSearchQuery(): ?string
    {
        return $this->searchQuery;
    }

    public function setSearchQuery(?string $searchQuery): self
    {
        $this->searchQuery = $searchQuery;

        return $this;
    }

    public function getSearchLocation(): ?string
    {
        return $this->searchLocation;
    }

    public function setSearchLocation(?string $searchLocation): self
    {
        $this->searchLocation = $searchLocation;

        return $this;
    }

    public function getSearchType(): ?string
    {
        return $this->searchType;
    }

    public function setSearchType(?string $searchType): self
    {
        $this->searchType = $searchType;

        return $this;
    }

    public function getSearchDate(): ?\DateTimeInterface
    {
        return $this->searchDate;
    }

    public function setSearchDate(?\DateTimeInterface $searchDate): self
    {
        $this->searchDate = $searchDate;

        return $this;
    }

    public function getSearchIp(): ?string
    {
        return $this->searchIp;
    }

    public function setSearchIp(?string $searchIp): self
    {
        $this->searchIp = $searchIp;

        return $this;
    }

    public function getSearchResult(): ?bool
    {
        return $this->searchResult;
    }

    public function setSearchResult(bool $searchResult): self
    {
        $this->searchResult = $searchResult;

        return $this;
    }

    public function getSearchAmount(): ?int
    {
        return $this->searchAmount;
    }

    public function setSearchAmount(?int $searchAmount): self
    {
        $this->searchAmount = $searchAmount;

        return $this;
    }

    public function getSearchHandled(): ?bool
    {
        return $this->searchHandled;
    }

    public function setSearchHandled(bool $searchHandled): self
    {
        $this->searchHandled = $searchHandled;

        return $this;
    }


}
