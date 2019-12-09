<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesVacanciesFunctions
 *
 * @ORM\Table(name="tbl_companies_vacancies_functions")
 * @ORM\Entity
 */
class TblCompaniesVacanciesFunctions
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_vacancies_functions_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesVacanciesFunctionsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=false)
     */
    private $tblCompaniesCatId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_name", type="string", length=200, nullable=true)
     */
    private $functionName;

    /**
     * @var bool
     *
     * @ORM\Column(name="function_empty", type="boolean", nullable=false)
     */
    private $functionEmpty = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="function_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $functionActive = '1';

    public function getTblCompaniesVacanciesFunctionsId(): ?int
    {
        return $this->tblCompaniesVacanciesFunctionsId;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getFunctionName(): ?string
    {
        return $this->functionName;
    }

    public function setFunctionName(?string $functionName): self
    {
        $this->functionName = $functionName;

        return $this;
    }

    public function getFunctionEmpty(): ?bool
    {
        return $this->functionEmpty;
    }

    public function setFunctionEmpty(bool $functionEmpty): self
    {
        $this->functionEmpty = $functionEmpty;

        return $this;
    }

    public function getFunctionActive(): ?bool
    {
        return $this->functionActive;
    }

    public function setFunctionActive(bool $functionActive): self
    {
        $this->functionActive = $functionActive;

        return $this;
    }


}
