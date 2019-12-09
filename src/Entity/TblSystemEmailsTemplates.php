<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemEmailsTemplates
 *
 * @ORM\Table(name="tbl_system_emails_templates")
 * @ORM\Entity
 */
class TblSystemEmailsTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_emails_templates_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemEmailsTemplatesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_name", type="string", length=100, nullable=true)
     */
    private $templateName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_header", type="text", length=65535, nullable=true)
     */
    private $templateHeader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_content", type="text", length=65535, nullable=true)
     */
    private $templateContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_footer", type="text", length=65535, nullable=true)
     */
    private $templateFooter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_footermessage", type="text", length=65535, nullable=true)
     */
    private $templateFootermessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_framework", type="text", length=65535, nullable=true)
     */
    private $templateFramework;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="template_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $templateActive = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="template_default", type="boolean", nullable=true)
     */
    private $templateDefault = '0';

    public function getTblSystemEmailsTemplatesId(): ?int
    {
        return $this->tblSystemEmailsTemplatesId;
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

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(?int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;

        return $this;
    }

    public function getTemplateHeader(): ?string
    {
        return $this->templateHeader;
    }

    public function setTemplateHeader(?string $templateHeader): self
    {
        $this->templateHeader = $templateHeader;

        return $this;
    }

    public function getTemplateContent(): ?string
    {
        return $this->templateContent;
    }

    public function setTemplateContent(?string $templateContent): self
    {
        $this->templateContent = $templateContent;

        return $this;
    }

    public function getTemplateFooter(): ?string
    {
        return $this->templateFooter;
    }

    public function setTemplateFooter(?string $templateFooter): self
    {
        $this->templateFooter = $templateFooter;

        return $this;
    }

    public function getTemplateFootermessage(): ?string
    {
        return $this->templateFootermessage;
    }

    public function setTemplateFootermessage(?string $templateFootermessage): self
    {
        $this->templateFootermessage = $templateFootermessage;

        return $this;
    }

    public function getTemplateFramework(): ?string
    {
        return $this->templateFramework;
    }

    public function setTemplateFramework(?string $templateFramework): self
    {
        $this->templateFramework = $templateFramework;

        return $this;
    }

    public function getTemplateActive(): ?bool
    {
        return $this->templateActive;
    }

    public function setTemplateActive(?bool $templateActive): self
    {
        $this->templateActive = $templateActive;

        return $this;
    }

    public function getTemplateDefault(): ?bool
    {
        return $this->templateDefault;
    }

    public function setTemplateDefault(?bool $templateDefault): self
    {
        $this->templateDefault = $templateDefault;

        return $this;
    }


}
