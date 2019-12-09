<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesInsurancePolicyValue
 *
 * @ORM\Table(name="tbl_companies_insurance_policy_value")
 * @ORM\Entity
 */
class TblCompaniesInsurancePolicyValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_insurance_policy_value_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesInsurancePolicyValueId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_insurance_policy_id", type="integer", nullable=false)
     */
    private $tblCompaniesInsurancePolicyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_name", type="text", length=65535, nullable=true)
     */
    private $valueName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_value", type="text", length=65535, nullable=true)
     */
    private $valueValue;

    /**
     * @var bool
     *
     * @ORM\Column(name="value_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $valueActive = '1';

    public function getTblCompaniesInsurancePolicyValueId(): ?int
    {
        return $this->tblCompaniesInsurancePolicyValueId;
    }

    public function getTblCompaniesInsurancePolicyId(): ?int
    {
        return $this->tblCompaniesInsurancePolicyId;
    }

    public function setTblCompaniesInsurancePolicyId(int $tblCompaniesInsurancePolicyId): self
    {
        $this->tblCompaniesInsurancePolicyId = $tblCompaniesInsurancePolicyId;

        return $this;
    }

    public function getValueName(): ?string
    {
        return $this->valueName;
    }

    public function setValueName(?string $valueName): self
    {
        $this->valueName = $valueName;

        return $this;
    }

    public function getValueValue(): ?string
    {
        return $this->valueValue;
    }

    public function setValueValue(?string $valueValue): self
    {
        $this->valueValue = $valueValue;

        return $this;
    }

    public function getValueActive(): ?bool
    {
        return $this->valueActive;
    }

    public function setValueActive(bool $valueActive): self
    {
        $this->valueActive = $valueActive;

        return $this;
    }


}
