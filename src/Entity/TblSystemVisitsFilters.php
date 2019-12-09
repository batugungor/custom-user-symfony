<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemVisitsFilters
 *
 * @ORM\Table(name="tbl_system_visits_filters")
 * @ORM\Entity
 */
class TblSystemVisitsFilters
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_visits_filters_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemVisitsFiltersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filter_ip", type="string", length=100, nullable=true)
     */
    private $filterIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filter_browser", type="string", length=255, nullable=true)
     */
    private $filterBrowser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filter_file", type="string", length=255, nullable=true)
     */
    private $filterFile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filter_reason", type="string", length=200, nullable=true)
     */
    private $filterReason;

    /**
     * @var bool
     *
     * @ORM\Column(name="filter_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $filterActive = '1';

    public function getTblSystemVisitsFiltersId(): ?int
    {
        return $this->tblSystemVisitsFiltersId;
    }

    public function getFilterIp(): ?string
    {
        return $this->filterIp;
    }

    public function setFilterIp(?string $filterIp): self
    {
        $this->filterIp = $filterIp;

        return $this;
    }

    public function getFilterBrowser(): ?string
    {
        return $this->filterBrowser;
    }

    public function setFilterBrowser(?string $filterBrowser): self
    {
        $this->filterBrowser = $filterBrowser;

        return $this;
    }

    public function getFilterFile(): ?string
    {
        return $this->filterFile;
    }

    public function setFilterFile(?string $filterFile): self
    {
        $this->filterFile = $filterFile;

        return $this;
    }

    public function getFilterReason(): ?string
    {
        return $this->filterReason;
    }

    public function setFilterReason(?string $filterReason): self
    {
        $this->filterReason = $filterReason;

        return $this;
    }

    public function getFilterActive(): ?bool
    {
        return $this->filterActive;
    }

    public function setFilterActive(bool $filterActive): self
    {
        $this->filterActive = $filterActive;

        return $this;
    }


}
