<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemSearches
 *
 * @ORM\Table(name="tbl_system_searches")
 * @ORM\Entity
 */
class TblSystemSearches
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_searches_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemSearchesId;

    /**
     * @var string
     *
     * @ORM\Column(name="search_query", type="string", length=255, nullable=false)
     */
    private $searchQuery;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="search_date", type="datetime", nullable=true)
     */
    private $searchDate;

    /**
     * @var int
     *
     * @ORM\Column(name="search_amount", type="integer", nullable=false, options={"default"="1"})
     */
    private $searchAmount = '1';

    public function getTblSystemSearchesId(): ?int
    {
        return $this->tblSystemSearchesId;
    }

    public function getSearchQuery(): ?string
    {
        return $this->searchQuery;
    }

    public function setSearchQuery(string $searchQuery): self
    {
        $this->searchQuery = $searchQuery;

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

    public function getSearchAmount(): ?int
    {
        return $this->searchAmount;
    }

    public function setSearchAmount(int $searchAmount): self
    {
        $this->searchAmount = $searchAmount;

        return $this;
    }


}
