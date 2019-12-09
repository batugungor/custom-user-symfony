<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPolls
 *
 * @ORM\Table(name="tbl_polls")
 * @ORM\Entity
 */
class TblPolls
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_polls_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblPollsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_sub_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatSubId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poll_name", type="string", length=45, nullable=true)
     */
    private $pollName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="poll_from", type="datetime", nullable=true)
     */
    private $pollFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="poll_until", type="datetime", nullable=true)
     */
    private $pollUntil;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="poll_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $pollActive = '1';

    public function getTblPollsId(): ?int
    {
        return $this->tblPollsId;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(?int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getTblCompaniesCatSubId(): ?int
    {
        return $this->tblCompaniesCatSubId;
    }

    public function setTblCompaniesCatSubId(?int $tblCompaniesCatSubId): self
    {
        $this->tblCompaniesCatSubId = $tblCompaniesCatSubId;

        return $this;
    }

    public function getPollName(): ?string
    {
        return $this->pollName;
    }

    public function setPollName(?string $pollName): self
    {
        $this->pollName = $pollName;

        return $this;
    }

    public function getPollFrom(): ?\DateTimeInterface
    {
        return $this->pollFrom;
    }

    public function setPollFrom(?\DateTimeInterface $pollFrom): self
    {
        $this->pollFrom = $pollFrom;

        return $this;
    }

    public function getPollUntil(): ?\DateTimeInterface
    {
        return $this->pollUntil;
    }

    public function setPollUntil(?\DateTimeInterface $pollUntil): self
    {
        $this->pollUntil = $pollUntil;

        return $this;
    }

    public function getPollActive(): ?bool
    {
        return $this->pollActive;
    }

    public function setPollActive(?bool $pollActive): self
    {
        $this->pollActive = $pollActive;

        return $this;
    }


}
