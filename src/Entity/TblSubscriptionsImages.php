<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsImages
 *
 * @ORM\Table(name="tbl_subscriptions_images")
 * @ORM\Entity
 */
class TblSubscriptionsImages
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_images_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsImagesId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_id", type="integer", nullable=false)
     */
    private $tblSubscriptionsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_images_id", type="integer", nullable=true)
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
     * @ORM\Column(name="image_url", type="string", length=255, nullable=true)
     */
    private $imageUrl;

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

    public function getTblSubscriptionsImagesId(): ?int
    {
        return $this->tblSubscriptionsImagesId;
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

    public function getTblSystemImagesId(): ?int
    {
        return $this->tblSystemImagesId;
    }

    public function setTblSystemImagesId(?int $tblSystemImagesId): self
    {
        $this->tblSystemImagesId = $tblSystemImagesId;

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
