<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesImages
 *
 * @ORM\Table(name="tbl_companies_images")
 * @ORM\Entity
 */
class TblCompaniesImages
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_images_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesImagesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_name", type="string", length=250, nullable=true)
     */
    private $imageName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_url", type="string", length=250, nullable=true)
     */
    private $imageUrl;

    /**
     * @var bool
     *
     * @ORM\Column(name="image_background", type="boolean", nullable=false)
     */
    private $imageBackground = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="image_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $imageActive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="image_order", type="integer", nullable=false)
     */
    private $imageOrder;

    public function getTblCompaniesImagesId(): ?int
    {
        return $this->tblCompaniesImagesId;
    }

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getImageBackground(): ?bool
    {
        return $this->imageBackground;
    }

    public function setImageBackground(bool $imageBackground): self
    {
        $this->imageBackground = $imageBackground;

        return $this;
    }

    public function getImageActive(): ?bool
    {
        return $this->imageActive;
    }

    public function setImageActive(bool $imageActive): self
    {
        $this->imageActive = $imageActive;

        return $this;
    }

    public function getImageOrder(): ?int
    {
        return $this->imageOrder;
    }

    public function setImageOrder(int $imageOrder): self
    {
        $this->imageOrder = $imageOrder;

        return $this;
    }


}
