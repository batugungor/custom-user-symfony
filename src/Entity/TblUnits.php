<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUnits
 *
 * @ORM\Table(name="tbl_units")
 * @ORM\Entity
 */
class TblUnits
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_units_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblUnitsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_function", type="string", length=255, nullable=true)
     */
    private $unitFunction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_state", type="string", length=45, nullable=true)
     */
    private $unitState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_name", type="string", length=45, nullable=true)
     */
    private $unitName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_url", type="string", length=45, nullable=true)
     */
    private $unitUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_displayname", type="string", length=45, nullable=true)
     */
    private $unitDisplayname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_endpoint", type="string", length=45, nullable=true)
     */
    private $unitEndpoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_icon", type="string", length=45, nullable=true)
     */
    private $unitIcon;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_position", type="boolean", nullable=true, options={"default"="1"})
     */
    private $unitPosition = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $unitActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_db_tbl", type="string", length=100, nullable=true)
     */
    private $unitDbTbl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_db_tbl_prefix", type="string", length=45, nullable=true)
     */
    private $unitDbTblPrefix;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_default", type="boolean", nullable=true)
     */
    private $unitDefault = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_visible", type="boolean", nullable=true, options={"default"="1"})
     */
    private $unitVisible = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_caching", type="boolean", nullable=true, options={"default"="1"})
     */
    private $unitCaching = '1';

    public function getTblUnitsId(): ?int
    {
        return $this->tblUnitsId;
    }

    public function getUnitFunction(): ?string
    {
        return $this->unitFunction;
    }

    public function setUnitFunction(?string $unitFunction): self
    {
        $this->unitFunction = $unitFunction;

        return $this;
    }

    public function getUnitState(): ?string
    {
        return $this->unitState;
    }

    public function setUnitState(?string $unitState): self
    {
        $this->unitState = $unitState;

        return $this;
    }

    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    public function setUnitName(?string $unitName): self
    {
        $this->unitName = $unitName;

        return $this;
    }

    public function getUnitUrl(): ?string
    {
        return $this->unitUrl;
    }

    public function setUnitUrl(?string $unitUrl): self
    {
        $this->unitUrl = $unitUrl;

        return $this;
    }

    public function getUnitDisplayname(): ?string
    {
        return $this->unitDisplayname;
    }

    public function setUnitDisplayname(?string $unitDisplayname): self
    {
        $this->unitDisplayname = $unitDisplayname;

        return $this;
    }

    public function getUnitEndpoint(): ?string
    {
        return $this->unitEndpoint;
    }

    public function setUnitEndpoint(?string $unitEndpoint): self
    {
        $this->unitEndpoint = $unitEndpoint;

        return $this;
    }

    public function getUnitIcon(): ?string
    {
        return $this->unitIcon;
    }

    public function setUnitIcon(?string $unitIcon): self
    {
        $this->unitIcon = $unitIcon;

        return $this;
    }

    public function getUnitPosition(): ?bool
    {
        return $this->unitPosition;
    }

    public function setUnitPosition(?bool $unitPosition): self
    {
        $this->unitPosition = $unitPosition;

        return $this;
    }

    public function getUnitActive(): ?bool
    {
        return $this->unitActive;
    }

    public function setUnitActive(?bool $unitActive): self
    {
        $this->unitActive = $unitActive;

        return $this;
    }

    public function getUnitDbTbl(): ?string
    {
        return $this->unitDbTbl;
    }

    public function setUnitDbTbl(?string $unitDbTbl): self
    {
        $this->unitDbTbl = $unitDbTbl;

        return $this;
    }

    public function getUnitDbTblPrefix(): ?string
    {
        return $this->unitDbTblPrefix;
    }

    public function setUnitDbTblPrefix(?string $unitDbTblPrefix): self
    {
        $this->unitDbTblPrefix = $unitDbTblPrefix;

        return $this;
    }

    public function getUnitDefault(): ?bool
    {
        return $this->unitDefault;
    }

    public function setUnitDefault(?bool $unitDefault): self
    {
        $this->unitDefault = $unitDefault;

        return $this;
    }

    public function getUnitVisible(): ?bool
    {
        return $this->unitVisible;
    }

    public function setUnitVisible(?bool $unitVisible): self
    {
        $this->unitVisible = $unitVisible;

        return $this;
    }

    public function getUnitCaching(): ?bool
    {
        return $this->unitCaching;
    }

    public function setUnitCaching(?bool $unitCaching): self
    {
        $this->unitCaching = $unitCaching;

        return $this;
    }


}
