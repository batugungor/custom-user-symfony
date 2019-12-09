<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsBlocks
 *
 * @ORM\Table(name="tbl_subscriptions_blocks")
 * @ORM\Entity
 */
class TblSubscriptionsBlocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_blocks_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsBlocksId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_id", type="integer", nullable=false)
     */
    private $tblSubscriptionsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_subscriptions_modules_id", type="integer", nullable=true)
     */
    private $tblSubscriptionsModulesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="module_table_id", type="integer", nullable=true)
     */
    private $moduleTableId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_name", type="string", length=255, nullable=true)
     */
    private $blockName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_title", type="string", length=255, nullable=true)
     */
    private $blockTitle;

    /**
     * @var bool
     *
     * @ORM\Column(name="block_title_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockTitleShow = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_link", type="string", length=255, nullable=true)
     */
    private $blockLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_content", type="text", length=65535, nullable=true)
     */
    private $blockContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_script", type="text", length=65535, nullable=true)
     */
    private $blockScript;

    /**
     * @var int
     *
     * @ORM\Column(name="block_order", type="integer", nullable=false)
     */
    private $blockOrder = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="block_column", type="integer", nullable=false, options={"default"="1"})
     */
    private $blockColumn = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockActive = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="block_height", type="integer", nullable=true)
     */
    private $blockHeight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_float", type="string", length=200, nullable=true)
     */
    private $blockFloat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_textalign", type="string", length=200, nullable=true)
     */
    private $blockTextalign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_class", type="string", length=255, nullable=true)
     */
    private $blockClass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_id", type="string", length=255, nullable=true)
     */
    private $blockId;

    public function getTblSubscriptionsBlocksId(): ?int
    {
        return $this->tblSubscriptionsBlocksId;
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

    public function getTblSubscriptionsModulesId(): ?int
    {
        return $this->tblSubscriptionsModulesId;
    }

    public function setTblSubscriptionsModulesId(?int $tblSubscriptionsModulesId): self
    {
        $this->tblSubscriptionsModulesId = $tblSubscriptionsModulesId;

        return $this;
    }

    public function getModuleTableId(): ?int
    {
        return $this->moduleTableId;
    }

    public function setModuleTableId(?int $moduleTableId): self
    {
        $this->moduleTableId = $moduleTableId;

        return $this;
    }

    public function getBlockName(): ?string
    {
        return $this->blockName;
    }

    public function setBlockName(?string $blockName): self
    {
        $this->blockName = $blockName;

        return $this;
    }

    public function getBlockTitle(): ?string
    {
        return $this->blockTitle;
    }

    public function setBlockTitle(?string $blockTitle): self
    {
        $this->blockTitle = $blockTitle;

        return $this;
    }

    public function getBlockTitleShow(): ?bool
    {
        return $this->blockTitleShow;
    }

    public function setBlockTitleShow(bool $blockTitleShow): self
    {
        $this->blockTitleShow = $blockTitleShow;

        return $this;
    }

    public function getBlockLink(): ?string
    {
        return $this->blockLink;
    }

    public function setBlockLink(?string $blockLink): self
    {
        $this->blockLink = $blockLink;

        return $this;
    }

    public function getBlockContent(): ?string
    {
        return $this->blockContent;
    }

    public function setBlockContent(?string $blockContent): self
    {
        $this->blockContent = $blockContent;

        return $this;
    }

    public function getBlockScript(): ?string
    {
        return $this->blockScript;
    }

    public function setBlockScript(?string $blockScript): self
    {
        $this->blockScript = $blockScript;

        return $this;
    }

    public function getBlockOrder(): ?int
    {
        return $this->blockOrder;
    }

    public function setBlockOrder(int $blockOrder): self
    {
        $this->blockOrder = $blockOrder;

        return $this;
    }

    public function getBlockColumn(): ?int
    {
        return $this->blockColumn;
    }

    public function setBlockColumn(int $blockColumn): self
    {
        $this->blockColumn = $blockColumn;

        return $this;
    }

    public function getBlockActive(): ?bool
    {
        return $this->blockActive;
    }

    public function setBlockActive(bool $blockActive): self
    {
        $this->blockActive = $blockActive;

        return $this;
    }

    public function getBlockHeight(): ?int
    {
        return $this->blockHeight;
    }

    public function setBlockHeight(?int $blockHeight): self
    {
        $this->blockHeight = $blockHeight;

        return $this;
    }

    public function getBlockFloat(): ?string
    {
        return $this->blockFloat;
    }

    public function setBlockFloat(?string $blockFloat): self
    {
        $this->blockFloat = $blockFloat;

        return $this;
    }

    public function getBlockTextalign(): ?string
    {
        return $this->blockTextalign;
    }

    public function setBlockTextalign(?string $blockTextalign): self
    {
        $this->blockTextalign = $blockTextalign;

        return $this;
    }

    public function getBlockClass(): ?string
    {
        return $this->blockClass;
    }

    public function setBlockClass(?string $blockClass): self
    {
        $this->blockClass = $blockClass;

        return $this;
    }

    public function getBlockId(): ?string
    {
        return $this->blockId;
    }

    public function setBlockId(?string $blockId): self
    {
        $this->blockId = $blockId;

        return $this;
    }


}
