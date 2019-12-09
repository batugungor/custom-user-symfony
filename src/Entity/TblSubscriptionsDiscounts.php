<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsDiscounts
 *
 * @ORM\Table(name="tbl_subscriptions_discounts")
 * @ORM\Entity
 */
class TblSubscriptionsDiscounts
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_discounts_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsDiscountsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_id", type="integer", nullable=false)
     */
    private $tblSubscriptionsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_title", type="string", length=200, nullable=true)
     */
    private $discountTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_code", type="string", length=20, nullable=true)
     */
    private $discountCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_price", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $discountPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discount_percentage", type="integer", nullable=true)
     */
    private $discountPercentage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_price_startup", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $discountPriceStartup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discount_percentage_startup", type="integer", nullable=true)
     */
    private $discountPercentageStartup;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="discount_from", type="datetime", nullable=true)
     */
    private $discountFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="discount_until", type="datetime", nullable=true)
     */
    private $discountUntil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discount_amount", type="integer", nullable=true)
     */
    private $discountAmount;

    /**
     * @var bool
     *
     * @ORM\Column(name="discount_active", type="boolean", nullable=false)
     */
    private $discountActive = '0';

    public function getTblSubscriptionsDiscountsId(): ?int
    {
        return $this->tblSubscriptionsDiscountsId;
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

    public function getDiscountTitle(): ?string
    {
        return $this->discountTitle;
    }

    public function setDiscountTitle(?string $discountTitle): self
    {
        $this->discountTitle = $discountTitle;

        return $this;
    }

    public function getDiscountCode(): ?string
    {
        return $this->discountCode;
    }

    public function setDiscountCode(?string $discountCode): self
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    public function setDiscountPrice($discountPrice): self
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }

    public function getDiscountPercentage(): ?int
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(?int $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    public function getDiscountPriceStartup()
    {
        return $this->discountPriceStartup;
    }

    public function setDiscountPriceStartup($discountPriceStartup): self
    {
        $this->discountPriceStartup = $discountPriceStartup;

        return $this;
    }

    public function getDiscountPercentageStartup(): ?int
    {
        return $this->discountPercentageStartup;
    }

    public function setDiscountPercentageStartup(?int $discountPercentageStartup): self
    {
        $this->discountPercentageStartup = $discountPercentageStartup;

        return $this;
    }

    public function getDiscountFrom(): ?\DateTimeInterface
    {
        return $this->discountFrom;
    }

    public function setDiscountFrom(?\DateTimeInterface $discountFrom): self
    {
        $this->discountFrom = $discountFrom;

        return $this;
    }

    public function getDiscountUntil(): ?\DateTimeInterface
    {
        return $this->discountUntil;
    }

    public function setDiscountUntil(?\DateTimeInterface $discountUntil): self
    {
        $this->discountUntil = $discountUntil;

        return $this;
    }

    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    public function setDiscountAmount(?int $discountAmount): self
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    public function getDiscountActive(): ?bool
    {
        return $this->discountActive;
    }

    public function setDiscountActive(bool $discountActive): self
    {
        $this->discountActive = $discountActive;

        return $this;
    }


}
