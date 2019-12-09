<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemModules
 *
 * @ORM\Table(name="tbl_system_modules")
 * @ORM\Entity
 */
class TblSystemModules
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_modules_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemModulesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_system_modules_id", type="integer", nullable=true)
     */
    private $upperTblSystemModulesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_websites_id", type="integer", nullable=false)
     */
    private $tblSystemWebsitesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=255, nullable=true)
     */
    private $moduleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_function", type="string", length=255, nullable=true)
     */
    private $moduleFunction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_table", type="string", length=255, nullable=true)
     */
    private $moduleTable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_table_prefix", type="string", length=255, nullable=true)
     */
    private $moduleTablePrefix;

    /**
     * @var bool
     *
     * @ORM\Column(name="module_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $moduleActive = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="module_active_from", type="datetime", nullable=true)
     */
    private $moduleActiveFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="module_active_until", type="datetime", nullable=true)
     */
    private $moduleActiveUntil;

    /**
     * @var bool
     *
     * @ORM\Column(name="module_menu_blocks", type="boolean", nullable=false)
     */
    private $moduleMenuBlocks = '0';

    public function getTblSystemModulesId(): ?int
    {
        return $this->tblSystemModulesId;
    }

    public function getUpperTblSystemModulesId(): ?int
    {
        return $this->upperTblSystemModulesId;
    }

    public function setUpperTblSystemModulesId(?int $upperTblSystemModulesId): self
    {
        $this->upperTblSystemModulesId = $upperTblSystemModulesId;

        return $this;
    }

    public function getTblSystemWebsitesId(): ?int
    {
        return $this->tblSystemWebsitesId;
    }

    public function setTblSystemWebsitesId(int $tblSystemWebsitesId): self
    {
        $this->tblSystemWebsitesId = $tblSystemWebsitesId;

        return $this;
    }

    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    public function setModuleName(?string $moduleName): self
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    public function getModuleFunction(): ?string
    {
        return $this->moduleFunction;
    }

    public function setModuleFunction(?string $moduleFunction): self
    {
        $this->moduleFunction = $moduleFunction;

        return $this;
    }

    public function getModuleTable(): ?string
    {
        return $this->moduleTable;
    }

    public function setModuleTable(?string $moduleTable): self
    {
        $this->moduleTable = $moduleTable;

        return $this;
    }

    public function getModuleTablePrefix(): ?string
    {
        return $this->moduleTablePrefix;
    }

    public function setModuleTablePrefix(?string $moduleTablePrefix): self
    {
        $this->moduleTablePrefix = $moduleTablePrefix;

        return $this;
    }

    public function getModuleActive(): ?bool
    {
        return $this->moduleActive;
    }

    public function setModuleActive(bool $moduleActive): self
    {
        $this->moduleActive = $moduleActive;

        return $this;
    }

    public function getModuleActiveFrom(): ?\DateTimeInterface
    {
        return $this->moduleActiveFrom;
    }

    public function setModuleActiveFrom(?\DateTimeInterface $moduleActiveFrom): self
    {
        $this->moduleActiveFrom = $moduleActiveFrom;

        return $this;
    }

    public function getModuleActiveUntil(): ?\DateTimeInterface
    {
        return $this->moduleActiveUntil;
    }

    public function setModuleActiveUntil(?\DateTimeInterface $moduleActiveUntil): self
    {
        $this->moduleActiveUntil = $moduleActiveUntil;

        return $this;
    }

    public function getModuleMenuBlocks(): ?bool
    {
        return $this->moduleMenuBlocks;
    }

    public function setModuleMenuBlocks(bool $moduleMenuBlocks): self
    {
        $this->moduleMenuBlocks = $moduleMenuBlocks;

        return $this;
    }


}
