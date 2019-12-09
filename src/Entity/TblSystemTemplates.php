<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemTemplates
 *
 * @ORM\Table(name="tbl_system_templates")
 * @ORM\Entity
 */
class TblSystemTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_templates_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemTemplatesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_websites_id", type="integer", nullable=true)
     */
    private $tblSystemWebsitesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_name", type="string", length=255, nullable=true)
     */
    private $templateName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_file", type="string", length=255, nullable=true)
     */
    private $templateFile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_function", type="string", length=255, nullable=true)
     */
    private $templateFunction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_menu", type="string", length=255, nullable=true)
     */
    private $templateMenu;

    /**
     * @var int
     *
     * @ORM\Column(name="template_columns", type="integer", nullable=false, options={"default"="1"})
     */
    private $templateColumns = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_default", type="boolean", nullable=false)
     */
    private $templateDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_company", type="boolean", nullable=false)
     */
    private $templateCompany = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_company_startpage", type="boolean", nullable=false)
     */
    private $templateCompanyStartpage = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_company_insurance", type="boolean", nullable=false)
     */
    private $templateCompanyInsurance = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_company_page", type="boolean", nullable=false)
     */
    private $templateCompanyPage = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_company_sub", type="boolean", nullable=false)
     */
    private $templateCompanySub = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_category", type="boolean", nullable=false)
     */
    private $templateCategory = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_category_sub", type="boolean", nullable=false)
     */
    private $templateCategorySub = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_category_brand", type="boolean", nullable=false)
     */
    private $templateCategoryBrand = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="template_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $templateActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_menu_class", type="string", length=255, nullable=true)
     */
    private $templateMenuClass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_menu_sub_class", type="string", length=255, nullable=true)
     */
    private $templateMenuSubClass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_menu_id", type="string", length=100, nullable=true)
     */
    private $templateMenuId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_block_class", type="string", length=255, nullable=true)
     */
    private $templateBlockClass;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="template_login", type="boolean", nullable=true)
     */
    private $templateLogin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_custom_css", type="text", length=65535, nullable=true)
     */
    private $templateCustomCss;

    public function getTblSystemTemplatesId(): ?int
    {
        return $this->tblSystemTemplatesId;
    }

    public function getTblSystemWebsitesId(): ?int
    {
        return $this->tblSystemWebsitesId;
    }

    public function setTblSystemWebsitesId(?int $tblSystemWebsitesId): self
    {
        $this->tblSystemWebsitesId = $tblSystemWebsitesId;

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

    public function getTemplateFile(): ?string
    {
        return $this->templateFile;
    }

    public function setTemplateFile(?string $templateFile): self
    {
        $this->templateFile = $templateFile;

        return $this;
    }

    public function getTemplateFunction(): ?string
    {
        return $this->templateFunction;
    }

    public function setTemplateFunction(?string $templateFunction): self
    {
        $this->templateFunction = $templateFunction;

        return $this;
    }

    public function getTemplateMenu(): ?string
    {
        return $this->templateMenu;
    }

    public function setTemplateMenu(?string $templateMenu): self
    {
        $this->templateMenu = $templateMenu;

        return $this;
    }

    public function getTemplateColumns(): ?int
    {
        return $this->templateColumns;
    }

    public function setTemplateColumns(int $templateColumns): self
    {
        $this->templateColumns = $templateColumns;

        return $this;
    }

    public function getTemplateDefault(): ?bool
    {
        return $this->templateDefault;
    }

    public function setTemplateDefault(bool $templateDefault): self
    {
        $this->templateDefault = $templateDefault;

        return $this;
    }

    public function getTemplateCompany(): ?bool
    {
        return $this->templateCompany;
    }

    public function setTemplateCompany(bool $templateCompany): self
    {
        $this->templateCompany = $templateCompany;

        return $this;
    }

    public function getTemplateCompanyStartpage(): ?bool
    {
        return $this->templateCompanyStartpage;
    }

    public function setTemplateCompanyStartpage(bool $templateCompanyStartpage): self
    {
        $this->templateCompanyStartpage = $templateCompanyStartpage;

        return $this;
    }

    public function getTemplateCompanyInsurance(): ?bool
    {
        return $this->templateCompanyInsurance;
    }

    public function setTemplateCompanyInsurance(bool $templateCompanyInsurance): self
    {
        $this->templateCompanyInsurance = $templateCompanyInsurance;

        return $this;
    }

    public function getTemplateCompanyPage(): ?bool
    {
        return $this->templateCompanyPage;
    }

    public function setTemplateCompanyPage(bool $templateCompanyPage): self
    {
        $this->templateCompanyPage = $templateCompanyPage;

        return $this;
    }

    public function getTemplateCompanySub(): ?bool
    {
        return $this->templateCompanySub;
    }

    public function setTemplateCompanySub(bool $templateCompanySub): self
    {
        $this->templateCompanySub = $templateCompanySub;

        return $this;
    }

    public function getTemplateCategory(): ?bool
    {
        return $this->templateCategory;
    }

    public function setTemplateCategory(bool $templateCategory): self
    {
        $this->templateCategory = $templateCategory;

        return $this;
    }

    public function getTemplateCategorySub(): ?bool
    {
        return $this->templateCategorySub;
    }

    public function setTemplateCategorySub(bool $templateCategorySub): self
    {
        $this->templateCategorySub = $templateCategorySub;

        return $this;
    }

    public function getTemplateCategoryBrand(): ?bool
    {
        return $this->templateCategoryBrand;
    }

    public function setTemplateCategoryBrand(bool $templateCategoryBrand): self
    {
        $this->templateCategoryBrand = $templateCategoryBrand;

        return $this;
    }

    public function getTemplateActive(): ?bool
    {
        return $this->templateActive;
    }

    public function setTemplateActive(bool $templateActive): self
    {
        $this->templateActive = $templateActive;

        return $this;
    }

    public function getTemplateMenuClass(): ?string
    {
        return $this->templateMenuClass;
    }

    public function setTemplateMenuClass(?string $templateMenuClass): self
    {
        $this->templateMenuClass = $templateMenuClass;

        return $this;
    }

    public function getTemplateMenuSubClass(): ?string
    {
        return $this->templateMenuSubClass;
    }

    public function setTemplateMenuSubClass(?string $templateMenuSubClass): self
    {
        $this->templateMenuSubClass = $templateMenuSubClass;

        return $this;
    }

    public function getTemplateMenuId(): ?string
    {
        return $this->templateMenuId;
    }

    public function setTemplateMenuId(?string $templateMenuId): self
    {
        $this->templateMenuId = $templateMenuId;

        return $this;
    }

    public function getTemplateBlockClass(): ?string
    {
        return $this->templateBlockClass;
    }

    public function setTemplateBlockClass(?string $templateBlockClass): self
    {
        $this->templateBlockClass = $templateBlockClass;

        return $this;
    }

    public function getTemplateLogin(): ?bool
    {
        return $this->templateLogin;
    }

    public function setTemplateLogin(?bool $templateLogin): self
    {
        $this->templateLogin = $templateLogin;

        return $this;
    }

    public function getTemplateCustomCss(): ?string
    {
        return $this->templateCustomCss;
    }

    public function setTemplateCustomCss(?string $templateCustomCss): self
    {
        $this->templateCustomCss = $templateCustomCss;

        return $this;
    }


}
