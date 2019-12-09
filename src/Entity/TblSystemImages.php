<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemImages
 *
 * @ORM\Table(name="tbl_system_images")
 * @ORM\Entity
 */
class TblSystemImages
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_images_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemImagesId;

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
     * @ORM\Column(name="image_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $imageActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="image_homepage", type="boolean", nullable=false)
     */
    private $imageHomepage = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="image_order", type="integer", nullable=false)
     */
    private $imageOrder;

    public function getTblSystemImagesId(): ?int
    {
        return $this->tblSystemImagesId;
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

    public function getImageActive(): ?bool
    {
        return $this->imageActive;
    }

    public function setImageActive(bool $imageActive): self
    {
        $this->imageActive = $imageActive;

        return $this;
    }

    public function getImageHomepage(): ?bool
    {
        return $this->imageHomepage;
    }

    public function setImageHomepage(bool $imageHomepage): self
    {
        $this->imageHomepage = $imageHomepage;

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
