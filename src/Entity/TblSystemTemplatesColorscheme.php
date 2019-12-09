<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemTemplatesColorscheme
 *
 * @ORM\Table(name="tbl_system_templates_colorscheme")
 * @ORM\Entity
 */
class TblSystemTemplatesColorscheme
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_templates_colorscheme_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemTemplatesColorschemeId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_templates_id", type="integer", nullable=false)
     */
    private $tblSystemTemplatesId;

    /**
     * @var string
     *
     * @ORM\Column(name="colorscheme_name", type="string", length=100, nullable=false)
     */
    private $colorschemeName;

    /**
     * @var string
     *
     * @ORM\Column(name="colorscheme_file", type="string", length=200, nullable=false)
     */
    private $colorschemeFile;

    /**
     * @var bool
     *
     * @ORM\Column(name="colorscheme_default", type="boolean", nullable=false)
     */
    private $colorschemeDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="colorscheme_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $colorschemeActive = '1';

    public function getTblSystemTemplatesColorschemeId(): ?int
    {
        return $this->tblSystemTemplatesColorschemeId;
    }

    public function getTblSystemTemplatesId(): ?int
    {
        return $this->tblSystemTemplatesId;
    }

    public function setTblSystemTemplatesId(int $tblSystemTemplatesId): self
    {
        $this->tblSystemTemplatesId = $tblSystemTemplatesId;

        return $this;
    }

    public function getColorschemeName(): ?string
    {
        return $this->colorschemeName;
    }

    public function setColorschemeName(string $colorschemeName): self
    {
        $this->colorschemeName = $colorschemeName;

        return $this;
    }

    public function getColorschemeFile(): ?string
    {
        return $this->colorschemeFile;
    }

    public function setColorschemeFile(string $colorschemeFile): self
    {
        $this->colorschemeFile = $colorschemeFile;

        return $this;
    }

    public function getColorschemeDefault(): ?bool
    {
        return $this->colorschemeDefault;
    }

    public function setColorschemeDefault(bool $colorschemeDefault): self
    {
        $this->colorschemeDefault = $colorschemeDefault;

        return $this;
    }

    public function getColorschemeActive(): ?bool
    {
        return $this->colorschemeActive;
    }

    public function setColorschemeActive(bool $colorschemeActive): self
    {
        $this->colorschemeActive = $colorschemeActive;

        return $this;
    }


}
