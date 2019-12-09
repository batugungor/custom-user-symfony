<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesCustomersNotes
 *
 * @ORM\Table(name="tbl_companies_customers_notes")
 * @ORM\Entity
 */
class TblCompaniesCustomersNotes
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_customers_notes_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesCustomersNotesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_customers_id", type="integer", nullable=true)
     */
    private $tblCompaniesCustomersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=true)
     */
    private $tblCompaniesUsersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_title", type="string", length=150, nullable=true)
     */
    private $noteTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_message", type="text", length=65535, nullable=true)
     */
    private $noteMessage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="note_date", type="datetime", nullable=true)
     */
    private $noteDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="note_deleted", type="boolean", nullable=true)
     */
    private $noteDeleted = '0';

    public function getTblCompaniesCustomersNotesId(): ?int
    {
        return $this->tblCompaniesCustomersNotesId;
    }

    public function getTblCompaniesCustomersId(): ?int
    {
        return $this->tblCompaniesCustomersId;
    }

    public function setTblCompaniesCustomersId(?int $tblCompaniesCustomersId): self
    {
        $this->tblCompaniesCustomersId = $tblCompaniesCustomersId;

        return $this;
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

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(?int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getNoteTitle(): ?string
    {
        return $this->noteTitle;
    }

    public function setNoteTitle(?string $noteTitle): self
    {
        $this->noteTitle = $noteTitle;

        return $this;
    }

    public function getNoteMessage(): ?string
    {
        return $this->noteMessage;
    }

    public function setNoteMessage(?string $noteMessage): self
    {
        $this->noteMessage = $noteMessage;

        return $this;
    }

    public function getNoteDate(): ?\DateTimeInterface
    {
        return $this->noteDate;
    }

    public function setNoteDate(?\DateTimeInterface $noteDate): self
    {
        $this->noteDate = $noteDate;

        return $this;
    }

    public function getNoteDeleted(): ?bool
    {
        return $this->noteDeleted;
    }

    public function setNoteDeleted(?bool $noteDeleted): self
    {
        $this->noteDeleted = $noteDeleted;

        return $this;
    }


}
