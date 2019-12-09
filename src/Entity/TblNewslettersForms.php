<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewslettersForms
 *
 * @ORM\Table(name="tbl_newsletters_forms")
 * @ORM\Entity
 */
class TblNewslettersForms
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_forms_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblNewslettersFormsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_groups_id", type="integer", nullable=false)
     */
    private $tblNewslettersGroupsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_name", type="string", length=255, nullable=true)
     */
    private $formName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_title", type="string", length=255, nullable=true)
     */
    private $formTitle;

    /**
     * @var bool
     *
     * @ORM\Column(name="form_title_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $formTitleShow = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_subject", type="string", length=255, nullable=true)
     */
    private $formSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_message", type="text", length=65535, nullable=true)
     */
    private $formMessage;

    /**
     * @var bool
     *
     * @ORM\Column(name="form_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $formActive = '1';

    public function getTblNewslettersFormsId(): ?int
    {
        return $this->tblNewslettersFormsId;
    }

    public function getTblNewslettersGroupsId(): ?int
    {
        return $this->tblNewslettersGroupsId;
    }

    public function setTblNewslettersGroupsId(int $tblNewslettersGroupsId): self
    {
        $this->tblNewslettersGroupsId = $tblNewslettersGroupsId;

        return $this;
    }

    public function getFormName(): ?string
    {
        return $this->formName;
    }

    public function setFormName(?string $formName): self
    {
        $this->formName = $formName;

        return $this;
    }

    public function getFormTitle(): ?string
    {
        return $this->formTitle;
    }

    public function setFormTitle(?string $formTitle): self
    {
        $this->formTitle = $formTitle;

        return $this;
    }

    public function getFormTitleShow(): ?bool
    {
        return $this->formTitleShow;
    }

    public function setFormTitleShow(bool $formTitleShow): self
    {
        $this->formTitleShow = $formTitleShow;

        return $this;
    }

    public function getFormSubject(): ?string
    {
        return $this->formSubject;
    }

    public function setFormSubject(?string $formSubject): self
    {
        $this->formSubject = $formSubject;

        return $this;
    }

    public function getFormMessage(): ?string
    {
        return $this->formMessage;
    }

    public function setFormMessage(?string $formMessage): self
    {
        $this->formMessage = $formMessage;

        return $this;
    }

    public function getFormActive(): ?bool
    {
        return $this->formActive;
    }

    public function setFormActive(bool $formActive): self
    {
        $this->formActive = $formActive;

        return $this;
    }


}
