<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewslettersBlocks
 *
 * @ORM\Table(name="tbl_newsletters_blocks")
 * @ORM\Entity
 */
class TblNewslettersBlocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_blocks_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblNewslettersBlocksId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_id", type="integer", nullable=false)
     */
    private $tblNewslettersId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=false)
     */
    private $tblCompaniesUsersId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_title", type="string", length=250, nullable=true)
     */
    private $blockTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_image", type="string", length=250, nullable=true)
     */
    private $blockImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_text_intro", type="text", length=65535, nullable=true)
     */
    private $blockTextIntro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="block_text", type="text", length=65535, nullable=true)
     */
    private $blockText;

    /**
     * @var bool
     *
     * @ORM\Column(name="block_offers", type="boolean", nullable=false)
     */
    private $blockOffers = '0';

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
     * @ORM\Column(name="block_column", type="integer", nullable=false, options={"default"="1"})
     */
    private $blockColumn = '1';

    public function getTblNewslettersBlocksId(): ?int
    {
        return $this->tblNewslettersBlocksId;
    }

    public function getTblNewslettersId(): ?int
    {
        return $this->tblNewslettersId;
    }

    public function setTblNewslettersId(int $tblNewslettersId): self
    {
        $this->tblNewslettersId = $tblNewslettersId;

        return $this;
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

    public function getBlockTitle(): ?string
    {
        return $this->blockTitle;
    }

    public function setBlockTitle(?string $blockTitle): self
    {
        $this->blockTitle = $blockTitle;

        return $this;
    }

    public function getBlockImage(): ?string
    {
        return $this->blockImage;
    }

    public function setBlockImage(?string $blockImage): self
    {
        $this->blockImage = $blockImage;

        return $this;
    }

    public function getBlockTextIntro(): ?string
    {
        return $this->blockTextIntro;
    }

    public function setBlockTextIntro(?string $blockTextIntro): self
    {
        $this->blockTextIntro = $blockTextIntro;

        return $this;
    }

    public function getBlockText(): ?string
    {
        return $this->blockText;
    }

    public function setBlockText(?string $blockText): self
    {
        $this->blockText = $blockText;

        return $this;
    }

    public function getBlockOffers(): ?bool
    {
        return $this->blockOffers;
    }

    public function setBlockOffers(bool $blockOffers): self
    {
        $this->blockOffers = $blockOffers;

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

    public function getBlockColumn(): ?int
    {
        return $this->blockColumn;
    }

    public function setBlockColumn(int $blockColumn): self
    {
        $this->blockColumn = $blockColumn;

        return $this;
    }


}
