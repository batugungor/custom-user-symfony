<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesForms
 *
 * @ORM\Table(name="tbl_companies_forms")
 * @ORM\Entity
 */
class TblCompaniesForms
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_forms_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesFormsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_companies_forms_id", type="integer", nullable=true)
     */
    private $upperTblCompaniesFormsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_emails_templates_id", type="integer", nullable=true)
     */
    private $tblSystemEmailsTemplatesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

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
     * @ORM\Column(name="form_sentto_email", type="string", length=255, nullable=true)
     */
    private $formSenttoEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_sentto_copy", type="string", length=255, nullable=true)
     */
    private $formSenttoCopy;

    /**
     * @var string
     *
     * @ORM\Column(name="form_subject", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="form_columns", type="boolean", nullable=false, options={"default"="1"})
     */
    private $formColumns = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="form_profile", type="boolean", nullable=false)
     */
    private $formProfile = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="form_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $formActive = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="form_sent_copy", type="boolean", nullable=true, options={"default"="1"})
     */
    private $formSentCopy = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_sent_copy_from", type="string", length=145, nullable=true)
     */
    private $formSentCopyFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_sent_copy_from_email", type="string", length=145, nullable=true)
     */
    private $formSentCopyFromEmail;

    public function getTblCompaniesFormsId(): ?int
    {
        return $this->tblCompaniesFormsId;
    }

    public function getUpperTblCompaniesFormsId(): ?int
    {
        return $this->upperTblCompaniesFormsId;
    }

    public function setUpperTblCompaniesFormsId(?int $upperTblCompaniesFormsId): self
    {
        $this->upperTblCompaniesFormsId = $upperTblCompaniesFormsId;

        return $this;
    }

    public function getTblSystemEmailsTemplatesId(): ?int
    {
        return $this->tblSystemEmailsTemplatesId;
    }

    public function setTblSystemEmailsTemplatesId(?int $tblSystemEmailsTemplatesId): self
    {
        $this->tblSystemEmailsTemplatesId = $tblSystemEmailsTemplatesId;

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

    public function getFormSenttoEmail(): ?string
    {
        return $this->formSenttoEmail;
    }

    public function setFormSenttoEmail(?string $formSenttoEmail): self
    {
        $this->formSenttoEmail = $formSenttoEmail;

        return $this;
    }

    public function getFormSenttoCopy(): ?string
    {
        return $this->formSenttoCopy;
    }

    public function setFormSenttoCopy(?string $formSenttoCopy): self
    {
        $this->formSenttoCopy = $formSenttoCopy;

        return $this;
    }

    public function getFormSubject(): ?string
    {
        return $this->formSubject;
    }

    public function setFormSubject(string $formSubject): self
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

    public function getFormColumns(): ?bool
    {
        return $this->formColumns;
    }

    public function setFormColumns(bool $formColumns): self
    {
        $this->formColumns = $formColumns;

        return $this;
    }

    public function getFormProfile(): ?bool
    {
        return $this->formProfile;
    }

    public function setFormProfile(bool $formProfile): self
    {
        $this->formProfile = $formProfile;

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

    public function getFormSentCopy(): ?bool
    {
        return $this->formSentCopy;
    }

    public function setFormSentCopy(?bool $formSentCopy): self
    {
        $this->formSentCopy = $formSentCopy;

        return $this;
    }

    public function getFormSentCopyFrom(): ?string
    {
        return $this->formSentCopyFrom;
    }

    public function setFormSentCopyFrom(?string $formSentCopyFrom): self
    {
        $this->formSentCopyFrom = $formSentCopyFrom;

        return $this;
    }

    public function getFormSentCopyFromEmail(): ?string
    {
        return $this->formSentCopyFromEmail;
    }

    public function setFormSentCopyFromEmail(?string $formSentCopyFromEmail): self
    {
        $this->formSentCopyFromEmail = $formSentCopyFromEmail;

        return $this;
    }


}
