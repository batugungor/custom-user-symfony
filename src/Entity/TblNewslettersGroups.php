<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewslettersGroups
 *
 * @ORM\Table(name="tbl_newsletters_groups")
 * @ORM\Entity
 */
class TblNewslettersGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_groups_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblNewslettersGroupsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_name", type="string", length=255, nullable=true)
     */
    private $groupName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="group_created", type="datetime", nullable=true)
     */
    private $groupCreated;

    /**
     * @var bool
     *
     * @ORM\Column(name="group_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $groupActive = '1';

    public function getTblNewslettersGroupsId(): ?int
    {
        return $this->tblNewslettersGroupsId;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(?string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getGroupCreated(): ?\DateTimeInterface
    {
        return $this->groupCreated;
    }

    public function setGroupCreated(?\DateTimeInterface $groupCreated): self
    {
        $this->groupCreated = $groupCreated;

        return $this;
    }

    public function getGroupActive(): ?bool
    {
        return $this->groupActive;
    }

    public function setGroupActive(bool $groupActive): self
    {
        $this->groupActive = $groupActive;

        return $this;
    }


}
