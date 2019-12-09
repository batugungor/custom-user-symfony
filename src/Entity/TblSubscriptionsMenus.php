<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsMenus
 *
 * @ORM\Table(name="tbl_subscriptions_menus")
 * @ORM\Entity
 */
class TblSubscriptionsMenus
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_menus_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsMenusId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_id", type="integer", nullable=false)
     */
    private $tblSubscriptionsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_menus_id", type="integer", nullable=false)
     */
    private $tblSystemMenusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_subscriptions_messages_id", type="integer", nullable=true)
     */
    private $tblSubscriptionsMessagesId;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_message", type="text", length=65535, nullable=true)
     */
    private $menuMessage;

    public function getTblSubscriptionsMenusId(): ?int
    {
        return $this->tblSubscriptionsMenusId;
    }

    public function getTblSubscriptionsId(): ?int
    {
        return $this->tblSubscriptionsId;
    }

    public function setTblSubscriptionsId(int $tblSubscriptionsId): self
    {
        $this->tblSubscriptionsId = $tblSubscriptionsId;

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

    public function getTblSubscriptionsMessagesId(): ?int
    {
        return $this->tblSubscriptionsMessagesId;
    }

    public function setTblSubscriptionsMessagesId(?int $tblSubscriptionsMessagesId): self
    {
        $this->tblSubscriptionsMessagesId = $tblSubscriptionsMessagesId;

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

    public function getMenuMessage(): ?string
    {
        return $this->menuMessage;
    }

    public function setMenuMessage(?string $menuMessage): self
    {
        $this->menuMessage = $menuMessage;

        return $this;
    }


}
