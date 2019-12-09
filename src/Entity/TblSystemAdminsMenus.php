<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemAdminsMenus
 *
 * @ORM\Table(name="tbl_system_admins_menus")
 * @ORM\Entity
 */
class TblSystemAdminsMenus
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_admins_menus_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemAdminsMenusId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_admins_id", type="integer", nullable=false)
     */
    private $tblSystemAdminsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_menus_id", type="integer", nullable=false)
     */
    private $tblSystemMenusId;

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_view", type="boolean", nullable=false, options={"default"="1"})
     */
    private $menuView = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_add", type="boolean", nullable=false)
     */
    private $menuAdd = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_edit", type="boolean", nullable=false)
     */
    private $menuEdit = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="menu_delete", type="boolean", nullable=false)
     */
    private $menuDelete = '0';

    public function getTblSystemAdminsMenusId(): ?int
    {
        return $this->tblSystemAdminsMenusId;
    }

    public function getTblSystemAdminsId(): ?int
    {
        return $this->tblSystemAdminsId;
    }

    public function setTblSystemAdminsId(int $tblSystemAdminsId): self
    {
        $this->tblSystemAdminsId = $tblSystemAdminsId;

        return $this;
    }

    public function getTblSystemMenusId(): ?int
    {
        return $this->tblSystemMenusId;
    }

    public function setTblSystemMenusId(int $tblSystemMenusId): self
    {
        $this->tblSystemMenusId = $tblSystemMenusId;

        return $this;
    }

    public function getMenuView(): ?bool
    {
        return $this->menuView;
    }

    public function setMenuView(bool $menuView): self
    {
        $this->menuView = $menuView;

        return $this;
    }

    public function getMenuAdd(): ?bool
    {
        return $this->menuAdd;
    }

    public function setMenuAdd(bool $menuAdd): self
    {
        $this->menuAdd = $menuAdd;

        return $this;
    }

    public function getMenuEdit(): ?bool
    {
        return $this->menuEdit;
    }

    public function setMenuEdit(bool $menuEdit): self
    {
        $this->menuEdit = $menuEdit;

        return $this;
    }

    public function getMenuDelete(): ?bool
    {
        return $this->menuDelete;
    }

    public function setMenuDelete(bool $menuDelete): self
    {
        $this->menuDelete = $menuDelete;

        return $this;
    }


}
