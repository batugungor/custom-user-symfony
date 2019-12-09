<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsModules
 *
 * @ORM\Table(name="tbl_subscriptions_modules")
 * @ORM\Entity
 */
class TblSubscriptionsModules
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_modules_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsModulesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_subscriptions_modules_id", type="integer", nullable=true)
     */
    private $upperTblSubscriptionsModulesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=250, nullable=true)
     */
    private $moduleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_code", type="string", length=250, nullable=true)
     */
    private $moduleCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_description", type="text", length=65535, nullable=true)
     */
    private $moduleDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_function_admin", type="string", length=250, nullable=true)
     */
    private $moduleFunctionAdmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_function_public", type="string", length=250, nullable=true)
     */
    private $moduleFunctionPublic;

    /**
     * @var bool
     *
     * @ORM\Column(name="module_menu", type="boolean", nullable=false)
     */
    private $moduleMenu = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="module_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $moduleActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="module_visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $moduleVisible = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="module_title", type="boolean", nullable=false)
     */
    private $moduleTitle = '0';

    public function getTblSubscriptionsModulesId(): ?int
    {
        return $this->tblSubscriptionsModulesId;
    }

    public function getUpperTblSubscriptionsModulesId(): ?int
    {
        return $this->upperTblSubscriptionsModulesId;
    }

    public function setUpperTblSubscriptionsModulesId(?int $upperTblSubscriptionsModulesId): self
    {
        $this->upperTblSubscriptionsModulesId = $upperTblSubscriptionsModulesId;

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

    public function getModuleCode(): ?string
    {
        return $this->moduleCode;
    }

    public function setModuleCode(?string $moduleCode): self
    {
        $this->moduleCode = $moduleCode;

        return $this;
    }

    public function getModuleDescription(): ?string
    {
        return $this->moduleDescription;
    }

    public function setModuleDescription(?string $moduleDescription): self
    {
        $this->moduleDescription = $moduleDescription;

        return $this;
    }

    public function getModuleFunctionAdmin(): ?string
    {
        return $this->moduleFunctionAdmin;
    }

    public function setModuleFunctionAdmin(?string $moduleFunctionAdmin): self
    {
        $this->moduleFunctionAdmin = $moduleFunctionAdmin;

        return $this;
    }

    public function getModuleFunctionPublic(): ?string
    {
        return $this->moduleFunctionPublic;
    }

    public function setModuleFunctionPublic(?string $moduleFunctionPublic): self
    {
        $this->moduleFunctionPublic = $moduleFunctionPublic;

        return $this;
    }

    public function getModuleMenu(): ?bool
    {
        return $this->moduleMenu;
    }

    public function setModuleMenu(bool $moduleMenu): self
    {
        $this->moduleMenu = $moduleMenu;

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

    public function getModuleVisible(): ?bool
    {
        return $this->moduleVisible;
    }

    public function setModuleVisible(bool $moduleVisible): self
    {
        $this->moduleVisible = $moduleVisible;

        return $this;
    }

    public function getModuleTitle(): ?bool
    {
        return $this->moduleTitle;
    }

    public function setModuleTitle(bool $moduleTitle): self
    {
        $this->moduleTitle = $moduleTitle;

        return $this;
    }


}
