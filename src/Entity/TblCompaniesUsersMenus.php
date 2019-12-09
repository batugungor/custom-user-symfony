<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesUsersMenus
 *
 * @ORM\Table(name="tbl_companies_users_menus")
 * @ORM\Entity
 */
class TblCompaniesUsersMenus
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_users_menus_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesUsersMenusId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=false)
     */
    private $tblCompaniesUsersId;

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
     * @ORM\Column(name="menu_edit", type="boolean", nullable=false)
     */
    private $menuEdit = '0';

    public function getTblCompaniesUsersMenusId(): ?int
    {
        return $this->tblCompaniesUsersMenusId;
    }

    public function getTblCompaniesUsersId(): ?int
    {
        return $this->tblCompaniesUsersId;
    }

    public function setTblCompaniesUsersId(int $tblCompaniesUsersId): self
    {
        $this->tblCompaniesUsersId = $tblCompaniesUsersId;

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

    public function getMenuEdit(): ?bool
    {
        return $this->menuEdit;
    }

    public function setMenuEdit(bool $menuEdit): self
    {
        $this->menuEdit = $menuEdit;

        return $this;
    }


}
