<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesCatSub
 *
 * @ORM\Table(name="tbl_companies_cat_sub")
 * @ORM\Entity
 */
class TblCompaniesCatSub
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_sub_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesCatSubId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_name", type="string", length=255, nullable=true)
     */
    private $subName;

    /**
     * @var bool
     *
     * @ORM\Column(name="sub_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subActive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="sub_order", type="integer", nullable=false)
     */
    private $subOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="sub_visitors", type="boolean", nullable=false)
     */
    private $subVisitors = '0';

    public function getTblCompaniesCatSubId(): ?int
    {
        return $this->tblCompaniesCatSubId;
    }

    public function getSubName(): ?string
    {
        return $this->subName;
    }

    public function setSubName(?string $subName): self
    {
        $this->subName = $subName;

        return $this;
    }

    public function getSubActive(): ?bool
    {
        return $this->subActive;
    }

    public function setSubActive(bool $subActive): self
    {
        $this->subActive = $subActive;

        return $this;
    }

    public function getSubOrder(): ?int
    {
        return $this->subOrder;
    }

    public function setSubOrder(int $subOrder): self
    {
        $this->subOrder = $subOrder;

        return $this;
    }

    public function getSubVisitors(): ?bool
    {
        return $this->subVisitors;
    }

    public function setSubVisitors(bool $subVisitors): self
    {
        $this->subVisitors = $subVisitors;

        return $this;
    }


}
