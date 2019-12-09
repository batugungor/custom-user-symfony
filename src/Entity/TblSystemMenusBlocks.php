<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemMenusBlocks
 *
 * @ORM\Table(name="tbl_system_menus_blocks")
 * @ORM\Entity
 */
class TblSystemMenusBlocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_menus_blocks_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemMenusBlocksId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_menus_id", type="integer", nullable=false)
     */
    private $tblSystemMenusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_modules_id", type="integer", nullable=true)
     */
    private $tblSystemModulesId;

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
     * @ORM\Column(name="block_title_color", type="string", length=45, nullable=true)
     */
    private $blockTitleColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_title_bgcolor", type="string", length=45, nullable=true)
     */
    private $blockTitleBgcolor;

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
     * @var bool
     *
     * @ORM\Column(name="block_slideout", type="boolean", nullable=false)
     */
    private $blockSlideout = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="block_column", type="integer", nullable=false, options={"default"="1"})
     */
    private $blockColumn = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="block_order", type="integer", nullable=false)
     */
    private $blockOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockActive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="block_width", type="integer", nullable=false)
     */
    private $blockWidth;

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

    /**
     * @var bool
     *
     * @ORM\Column(name="block_edit_inline", type="boolean", nullable=false)
     */
    private $blockEditInline = '0';

    public function getTblSystemMenusBlocksId(): ?int
    {
        return $this->tblSystemMenusBlocksId;
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

    public function getTblSystemMenusId(): ?int
    {
        return $this->tblSystemMenusId;
    }

    public function setTblSystemMenusId(int $tblSystemMenusId): self
    {
        $this->tblSystemMenusId = $tblSystemMenusId;

        return $this;
    }

    public function getTblSystemModulesId(): ?int
    {
        return $this->tblSystemModulesId;
    }

    public function setTblSystemModulesId(?int $tblSystemModulesId): self
    {
        $this->tblSystemModulesId = $tblSystemModulesId;

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

    public function getBlockTitleColor(): ?string
    {
        return $this->blockTitleColor;
    }

    public function setBlockTitleColor(?string $blockTitleColor): self
    {
        $this->blockTitleColor = $blockTitleColor;

        return $this;
    }

    public function getBlockTitleBgcolor(): ?string
    {
        return $this->blockTitleBgcolor;
    }

    public function setBlockTitleBgcolor(?string $blockTitleBgcolor): self
    {
        $this->blockTitleBgcolor = $blockTitleBgcolor;

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

    public function getBlockSlideout(): ?bool
    {
        return $this->blockSlideout;
    }

    public function setBlockSlideout(bool $blockSlideout): self
    {
        $this->blockSlideout = $blockSlideout;

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

    public function getBlockOrder(): ?int
    {
        return $this->blockOrder;
    }

    public function setBlockOrder(int $blockOrder): self
    {
        $this->blockOrder = $blockOrder;

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

    public function getBlockWidth(): ?int
    {
        return $this->blockWidth;
    }

    public function setBlockWidth(int $blockWidth): self
    {
        $this->blockWidth = $blockWidth;

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

    public function getBlockEditInline(): ?bool
    {
        return $this->blockEditInline;
    }

    public function setBlockEditInline(bool $blockEditInline): self
    {
        $this->blockEditInline = $blockEditInline;

        return $this;
    }


}
