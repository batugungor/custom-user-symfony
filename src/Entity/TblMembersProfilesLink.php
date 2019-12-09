<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMembersProfilesLink
 *
 * @ORM\Table(name="tbl_members_profiles_link")
 * @ORM\Entity
 */
class TblMembersProfilesLink
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_members_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblMembersId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_members_profiles_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblMembersProfilesId;

    public function getTblMembersId(): ?int
    {
        return $this->tblMembersId;
    }

    public function getTblMembersProfilesId(): ?int
    {
        return $this->tblMembersProfilesId;
    }


}
