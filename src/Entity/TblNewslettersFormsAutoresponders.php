<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewslettersFormsAutoresponders
 *
 * @ORM\Table(name="tbl_newsletters_forms_autoresponders")
 * @ORM\Entity
 */
class TblNewslettersFormsAutoresponders
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_forms_autoresponders_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblNewslettersFormsAutorespondersId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_forms_id", type="integer", nullable=false)
     */
    private $tblNewslettersFormsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="responder_name", type="string", length=255, nullable=true)
     */
    private $responderName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="responder_subject", type="string", length=255, nullable=true)
     */
    private $responderSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="responder_message", type="text", length=65535, nullable=true)
     */
    private $responderMessage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="responder_days", type="integer", nullable=true)
     */
    private $responderDays = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="responder_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $responderActive = '1';

    public function getTblNewslettersFormsAutorespondersId(): ?int
    {
        return $this->tblNewslettersFormsAutorespondersId;
    }

    public function getTblNewslettersFormsId(): ?int
    {
        return $this->tblNewslettersFormsId;
    }

    public function setTblNewslettersFormsId(int $tblNewslettersFormsId): self
    {
        $this->tblNewslettersFormsId = $tblNewslettersFormsId;

        return $this;
    }

    public function getResponderName(): ?string
    {
        return $this->responderName;
    }

    public function setResponderName(?string $responderName): self
    {
        $this->responderName = $responderName;

        return $this;
    }

    public function getResponderSubject(): ?string
    {
        return $this->responderSubject;
    }

    public function setResponderSubject(?string $responderSubject): self
    {
        $this->responderSubject = $responderSubject;

        return $this;
    }

    public function getResponderMessage(): ?string
    {
        return $this->responderMessage;
    }

    public function setResponderMessage(?string $responderMessage): self
    {
        $this->responderMessage = $responderMessage;

        return $this;
    }

    public function getResponderDays(): ?int
    {
        return $this->responderDays;
    }

    public function setResponderDays(?int $responderDays): self
    {
        $this->responderDays = $responderDays;

        return $this;
    }

    public function getResponderActive(): ?bool
    {
        return $this->responderActive;
    }

    public function setResponderActive(bool $responderActive): self
    {
        $this->responderActive = $responderActive;

        return $this;
    }


}
