<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAppsGroups
 *
 * @ORM\Table(name="tbl_apps_groups")
 * @ORM\Entity
 */
class TblAppsGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_groups_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsGroupsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_id", type="integer", nullable=true)
     */
    private $tblAppsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_name", type="string", length=45, nullable=true)
     */
    private $groupName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_units", type="string", length=1000, nullable=true)
     */
    private $groupUnits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_text", type="text", length=65535, nullable=true)
     */
    private $groupText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_conditions", type="text", length=65535, nullable=true)
     */
    private $groupConditions;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_approve", type="boolean", nullable=true, options={"default"="1"})
     */
    private $groupApprove = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_default", type="boolean", nullable=true)
     */
    private $groupDefault = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $groupActive = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="group_order", type="integer", nullable=true, options={"default"="1"})
     */
    private $groupOrder = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_register", type="boolean", nullable=true, options={"default"="1"})
     */
    private $groupRegister = '1';

    public function getTblAppsGroupsId(): ?int
    {
        return $this->tblAppsGroupsId;
    }

    public function getTblAppsId(): ?int
    {
        return $this->tblAppsId;
    }

    public function setTblAppsId(?int $tblAppsId): self
    {
        $this->tblAppsId = $tblAppsId;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(?string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getGroupUnits(): ?string
    {
        return $this->groupUnits;
    }

    public function setGroupUnits(?string $groupUnits): self
    {
        $this->groupUnits = $groupUnits;

        return $this;
    }

    public function getGroupText(): ?string
    {
        return $this->groupText;
    }

    public function setGroupText(?string $groupText): self
    {
        $this->groupText = $groupText;

        return $this;
    }

    public function getGroupConditions(): ?string
    {
        return $this->groupConditions;
    }

    public function setGroupConditions(?string $groupConditions): self
    {
        $this->groupConditions = $groupConditions;

        return $this;
    }

    public function getGroupApprove(): ?bool
    {
        return $this->groupApprove;
    }

    public function setGroupApprove(?bool $groupApprove): self
    {
        $this->groupApprove = $groupApprove;

        return $this;
    }

    public function getGroupDefault(): ?bool
    {
        return $this->groupDefault;
    }

    public function setGroupDefault(?bool $groupDefault): self
    {
        $this->groupDefault = $groupDefault;

        return $this;
    }

    public function getGroupActive(): ?bool
    {
        return $this->groupActive;
    }

    public function setGroupActive(?bool $groupActive): self
    {
        $this->groupActive = $groupActive;

        return $this;
    }

    public function getGroupOrder(): ?int
    {
        return $this->groupOrder;
    }

    public function setGroupOrder(?int $groupOrder): self
    {
        $this->groupOrder = $groupOrder;

        return $this;
    }

    public function getGroupRegister(): ?bool
    {
        return $this->groupRegister;
    }

    public function setGroupRegister(?bool $groupRegister): self
    {
        $this->groupRegister = $groupRegister;

        return $this;
    }


}
