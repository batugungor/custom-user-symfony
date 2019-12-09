<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesUsersGroups
 *
 * @ORM\Table(name="tbl_companies_users_groups")
 * @ORM\Entity
 */
class TblCompaniesUsersGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="idtbl_companies_users_groups_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtblCompaniesUsersGroupsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=true)
     */
    private $tblCompaniesUsersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_locations_id", type="integer", nullable=true)
     */
    private $tblCompaniesLocationsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_services", type="integer", nullable=true)
     */
    private $tblCompaniesServices;

    public function getIdtblCompaniesUsersGroupsId(): ?int
    {
        return $this->idtblCompaniesUsersGroupsId;
    }

    public function getTblCompaniesUsersId(): ?int
    {
        return $this->tblCompaniesUsersId;
    }

    public function setTblCompaniesUsersId(?int $tblCompaniesUsersId): self
    {
        $this->tblCompaniesUsersId = $tblCompaniesUsersId;

        return $this;
    }

    public function getTblCompaniesLocationsId(): ?int
    {
        return $this->tblCompaniesLocationsId;
    }

    public function setTblCompaniesLocationsId(?int $tblCompaniesLocationsId): self
    {
        $this->tblCompaniesLocationsId = $tblCompaniesLocationsId;

        return $this;
    }

    public function getTblCompaniesServices(): ?int
    {
        return $this->tblCompaniesServices;
    }

    public function setTblCompaniesServices(?int $tblCompaniesServices): self
    {
        $this->tblCompaniesServices = $tblCompaniesServices;

        return $this;
    }


}
