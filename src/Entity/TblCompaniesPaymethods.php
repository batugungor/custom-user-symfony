<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesPaymethods
 *
 * @ORM\Table(name="tbl_companies_paymethods")
 * @ORM\Entity
 */
class TblCompaniesPaymethods
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_paymethods_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesPaymethodsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="method_name", type="string", length=150, nullable=true)
     */
    private $methodName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="method_icon", type="string", length=150, nullable=true)
     */
    private $methodIcon;

    /**
     * @var bool
     *
     * @ORM\Column(name="method_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $methodActive = '1';

    public function getTblCompaniesPaymethodsId(): ?int
    {
        return $this->tblCompaniesPaymethodsId;
    }

    public function getMethodName(): ?string
    {
        return $this->methodName;
    }

    public function setMethodName(?string $methodName): self
    {
        $this->methodName = $methodName;

        return $this;
    }

    public function getMethodIcon(): ?string
    {
        return $this->methodIcon;
    }

    public function setMethodIcon(?string $methodIcon): self
    {
        $this->methodIcon = $methodIcon;

        return $this;
    }

    public function getMethodActive(): ?bool
    {
        return $this->methodActive;
    }

    public function setMethodActive(bool $methodActive): self
    {
        $this->methodActive = $methodActive;

        return $this;
    }


}
