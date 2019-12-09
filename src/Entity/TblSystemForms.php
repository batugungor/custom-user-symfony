<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemForms
 *
 * @ORM\Table(name="tbl_system_forms")
 * @ORM\Entity
 */
class TblSystemForms
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_forms_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemFormsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_emails_templates_id", type="integer", nullable=true)
     */
    private $tblSystemEmailsTemplatesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

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
     * @ORM\Column(name="form_sentto_name", type="string", length=255, nullable=true)
     */
    private $formSenttoName;

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
     * @ORM\Column(name="form_antispam", type="boolean", nullable=false, options={"default"="1"})
     */
    private $formAntispam = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_spamtext", type="string", length=500, nullable=true)
     */
    private $formSpamtext;

    /**
     * @var bool
     *
     * @ORM\Column(name="form_priority", type="boolean", nullable=false, options={"default"="1"})
     */
    private $formPriority = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="form_visitors", type="boolean", nullable=false)
     */
    private $formVisitors = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="form_apply", type="boolean", nullable=false)
     */
    private $formApply = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="form_show_buttons", type="boolean", nullable=false, options={"default"="1"})
     */
    private $formShowButtons = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="form_show_ip", type="boolean", nullable=false)
     */
    private $formShowIp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="form_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $formActive = '1';

    public function getTblSystemFormsId(): ?int
    {
        return $this->tblSystemFormsId;
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

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(?int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

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

    public function getFormSenttoName(): ?string
    {
        return $this->formSenttoName;
    }

    public function setFormSenttoName(?string $formSenttoName): self
    {
        $this->formSenttoName = $formSenttoName;

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

    public function getFormAntispam(): ?bool
    {
        return $this->formAntispam;
    }

    public function setFormAntispam(bool $formAntispam): self
    {
        $this->formAntispam = $formAntispam;

        return $this;
    }

    public function getFormSpamtext(): ?string
    {
        return $this->formSpamtext;
    }

    public function setFormSpamtext(?string $formSpamtext): self
    {
        $this->formSpamtext = $formSpamtext;

        return $this;
    }

    public function getFormPriority(): ?bool
    {
        return $this->formPriority;
    }

    public function setFormPriority(bool $formPriority): self
    {
        $this->formPriority = $formPriority;

        return $this;
    }

    public function getFormVisitors(): ?bool
    {
        return $this->formVisitors;
    }

    public function setFormVisitors(bool $formVisitors): self
    {
        $this->formVisitors = $formVisitors;

        return $this;
    }

    public function getFormApply(): ?bool
    {
        return $this->formApply;
    }

    public function setFormApply(bool $formApply): self
    {
        $this->formApply = $formApply;

        return $this;
    }

    public function getFormShowButtons(): ?bool
    {
        return $this->formShowButtons;
    }

    public function setFormShowButtons(bool $formShowButtons): self
    {
        $this->formShowButtons = $formShowButtons;

        return $this;
    }

    public function getFormShowIp(): ?bool
    {
        return $this->formShowIp;
    }

    public function setFormShowIp(bool $formShowIp): self
    {
        $this->formShowIp = $formShowIp;

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
