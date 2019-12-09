<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesInsurancePolicy
 *
 * @ORM\Table(name="tbl_companies_insurance_policy")
 * @ORM\Entity
 */
class TblCompaniesInsurancePolicy
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_insurance_policy_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesInsurancePolicyId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_insurance_id", type="integer", nullable=false)
     */
    private $tblCompaniesInsuranceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="policy_name", type="string", length=255, nullable=true)
     */
    private $policyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="policy_description", type="string", length=250, nullable=true)
     */
    private $policyDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="policy_conditions", type="string", length=250, nullable=true)
     */
    private $policyConditions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="policy_frequency", type="string", length=250, nullable=true)
     */
    private $policyFrequency;

    /**
     * @var string
     *
     * @ORM\Column(name="policy_amount", type="decimal", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $policyAmount = '0.00';

    /**
     * @var bool
     *
     * @ORM\Column(name="policy_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $policyActive = '1';

    public function getTblCompaniesInsurancePolicyId(): ?int
    {
        return $this->tblCompaniesInsurancePolicyId;
    }

    public function getTblCompaniesInsuranceId(): ?int
    {
        return $this->tblCompaniesInsuranceId;
    }

    public function setTblCompaniesInsuranceId(int $tblCompaniesInsuranceId): self
    {
        $this->tblCompaniesInsuranceId = $tblCompaniesInsuranceId;

        return $this;
    }

    public function getPolicyName(): ?string
    {
        return $this->policyName;
    }

    public function setPolicyName(?string $policyName): self
    {
        $this->policyName = $policyName;

        return $this;
    }

    public function getPolicyDescription(): ?string
    {
        return $this->policyDescription;
    }

    public function setPolicyDescription(?string $policyDescription): self
    {
        $this->policyDescription = $policyDescription;

        return $this;
    }

    public function getPolicyConditions(): ?string
    {
        return $this->policyConditions;
    }

    public function setPolicyConditions(?string $policyConditions): self
    {
        $this->policyConditions = $policyConditions;

        return $this;
    }

    public function getPolicyFrequency(): ?string
    {
        return $this->policyFrequency;
    }

    public function setPolicyFrequency(?string $policyFrequency): self
    {
        $this->policyFrequency = $policyFrequency;

        return $this;
    }

    public function getPolicyAmount()
    {
        return $this->policyAmount;
    }

    public function setPolicyAmount($policyAmount): self
    {
        $this->policyAmount = $policyAmount;

        return $this;
    }

    public function getPolicyActive(): ?bool
    {
        return $this->policyActive;
    }

    public function setPolicyActive(bool $policyActive): self
    {
        $this->policyActive = $policyActive;

        return $this;
    }


}
