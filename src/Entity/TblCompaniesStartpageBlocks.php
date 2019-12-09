<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesStartpageBlocks
 *
 * @ORM\Table(name="tbl_companies_startpage_blocks")
 * @ORM\Entity
 */
class TblCompaniesStartpageBlocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_startpage_blocks_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesStartpageBlocksId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_startpage_id", type="integer", nullable=false)
     */
    private $tblCompaniesStartpageId;

    /**
     * @var string
     *
     * @ORM\Column(name="block_name", type="string", length=255, nullable=false)
     */
    private $blockName;

    /**
     * @var bool
     *
     * @ORM\Column(name="block_column", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockColumn = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_order", type="boolean", nullable=false)
     */
    private $blockOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="block_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $blockActive = '1';

    public function getTblCompaniesStartpageBlocksId(): ?int
    {
        return $this->tblCompaniesStartpageBlocksId;
    }

    public function getTblCompaniesStartpageId(): ?int
    {
        return $this->tblCompaniesStartpageId;
    }

    public function setTblCompaniesStartpageId(int $tblCompaniesStartpageId): self
    {
        $this->tblCompaniesStartpageId = $tblCompaniesStartpageId;

        return $this;
    }

    public function getBlockName(): ?string
    {
        return $this->blockName;
    }

    public function setBlockName(string $blockName): self
    {
        $this->blockName = $blockName;

        return $this;
    }

    public function getBlockColumn(): ?bool
    {
        return $this->blockColumn;
    }

    public function setBlockColumn(bool $blockColumn): self
    {
        $this->blockColumn = $blockColumn;

        return $this;
    }

    public function getBlockOrder(): ?bool
    {
        return $this->blockOrder;
    }

    public function setBlockOrder(bool $blockOrder): self
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


}
