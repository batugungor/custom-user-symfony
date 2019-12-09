<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemKeywordsFilter
 *
 * @ORM\Table(name="tbl_system_keywords_filter")
 * @ORM\Entity
 */
class TblSystemKeywordsFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_keywords_filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemKeywordsFilterId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filter_keyword", type="string", length=255, nullable=true)
     */
    private $filterKeyword;

    /**
     * @var bool
     *
     * @ORM\Column(name="filter_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $filterActive = '1';

    public function getTblSystemKeywordsFilterId(): ?int
    {
        return $this->tblSystemKeywordsFilterId;
    }

    public function getFilterKeyword(): ?string
    {
        return $this->filterKeyword;
    }

    public function setFilterKeyword(?string $filterKeyword): self
    {
        $this->filterKeyword = $filterKeyword;

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
