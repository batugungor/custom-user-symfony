<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesSearchitems
 *
 * @ORM\Table(name="tbl_companies_searchitems")
 * @ORM\Entity
 */
class TblCompaniesSearchitems
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_searchitems_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesSearchitemsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="found_tbl_companies_id", type="integer", nullable=true)
     */
    private $foundTblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_sub_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatSubId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=200, nullable=true)
     */
    private $itemName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_description", type="text", length=65535, nullable=true)
     */
    private $itemDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_articlenr", type="string", length=200, nullable=true)
     */
    private $itemArticlenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_model", type="string", length=200, nullable=true)
     */
    private $itemModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_color", type="string", length=100, nullable=true)
     */
    private $itemColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_size", type="string", length=100, nullable=true)
     */
    private $itemSize;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_amount", type="integer", nullable=true)
     */
    private $itemAmount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="item_date_posted", type="datetime", nullable=true)
     */
    private $itemDatePosted;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="item_date_needed", type="datetime", nullable=true)
     */
    private $itemDateNeeded;

    /**
     * @var bool
     *
     * @ORM\Column(name="item_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $itemActive = '1';

    public function getTblCompaniesSearchitemsId(): ?int
    {
        return $this->tblCompaniesSearchitemsId;
    }

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(?int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getFoundTblCompaniesId(): ?int
    {
        return $this->foundTblCompaniesId;
    }

    public function setFoundTblCompaniesId(?int $foundTblCompaniesId): self
    {
        $this->foundTblCompaniesId = $foundTblCompaniesId;

        return $this;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(?int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getTblCompaniesCatSubId(): ?int
    {
        return $this->tblCompaniesCatSubId;
    }

    public function setTblCompaniesCatSubId(?int $tblCompaniesCatSubId): self
    {
        $this->tblCompaniesCatSubId = $tblCompaniesCatSubId;

        return $this;
    }

    public function getItemName(): ?string
    {
        return $this->itemName;
    }

    public function setItemName(?string $itemName): self
    {
        $this->itemName = $itemName;

        return $this;
    }

    public function getItemDescription(): ?string
    {
        return $this->itemDescription;
    }

    public function setItemDescription(?string $itemDescription): self
    {
        $this->itemDescription = $itemDescription;

        return $this;
    }

    public function getItemArticlenr(): ?string
    {
        return $this->itemArticlenr;
    }

    public function setItemArticlenr(?string $itemArticlenr): self
    {
        $this->itemArticlenr = $itemArticlenr;

        return $this;
    }

    public function getItemModel(): ?string
    {
        return $this->itemModel;
    }

    public function setItemModel(?string $itemModel): self
    {
        $this->itemModel = $itemModel;

        return $this;
    }

    public function getItemColor(): ?string
    {
        return $this->itemColor;
    }

    public function setItemColor(?string $itemColor): self
    {
        $this->itemColor = $itemColor;

        return $this;
    }

    public function getItemSize(): ?string
    {
        return $this->itemSize;
    }

    public function setItemSize(?string $itemSize): self
    {
        $this->itemSize = $itemSize;

        return $this;
    }

    public function getItemAmount(): ?int
    {
        return $this->itemAmount;
    }

    public function setItemAmount(?int $itemAmount): self
    {
        $this->itemAmount = $itemAmount;

        return $this;
    }

    public function getItemDatePosted(): ?\DateTimeInterface
    {
        return $this->itemDatePosted;
    }

    public function setItemDatePosted(?\DateTimeInterface $itemDatePosted): self
    {
        $this->itemDatePosted = $itemDatePosted;

        return $this;
    }

    public function getItemDateNeeded(): ?\DateTimeInterface
    {
        return $this->itemDateNeeded;
    }

    public function setItemDateNeeded(?\DateTimeInterface $itemDateNeeded): self
    {
        $this->itemDateNeeded = $itemDateNeeded;

        return $this;
    }

    public function getItemActive(): ?bool
    {
        return $this->itemActive;
    }

    public function setItemActive(bool $itemActive): self
    {
        $this->itemActive = $itemActive;

        return $this;
    }


}
