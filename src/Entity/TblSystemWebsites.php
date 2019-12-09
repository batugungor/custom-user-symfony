<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemWebsites
 *
 * @ORM\Table(name="tbl_system_websites")
 * @ORM\Entity
 */
class TblSystemWebsites
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_websites_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemWebsitesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_templates_id", type="integer", nullable=true)
     */
    private $tblSystemTemplatesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_languages_id", type="integer", nullable=true)
     */
    private $tblSystemLanguagesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_name", type="string", length=100, nullable=true)
     */
    private $websiteName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_title", type="string", length=255, nullable=true)
     */
    private $websiteTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_keywords", type="string", length=2000, nullable=true)
     */
    private $websiteKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_description", type="string", length=2000, nullable=true)
     */
    private $websiteDescription;

    /**
     * @var bool
     *
     * @ORM\Column(name="website_default", type="boolean", nullable=false)
     */
    private $websiteDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="website_active", type="boolean", nullable=false)
     */
    private $websiteActive = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_og_image", type="string", length=255, nullable=true)
     */
    private $websiteOgImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_analytics", type="text", length=65535, nullable=true)
     */
    private $websiteAnalytics;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_cdn_images", type="string", length=250, nullable=true)
     */
    private $websiteCdnImages;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_cdn_templates", type="string", length=250, nullable=true)
     */
    private $websiteCdnTemplates;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_cdn_container", type="string", length=100, nullable=true)
     */
    private $websiteCdnContainer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_mail_server", type="string", length=100, nullable=true)
     */
    private $websiteMailServer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_mail_port", type="string", length=45, nullable=true)
     */
    private $websiteMailPort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_mail_user", type="string", length=100, nullable=true)
     */
    private $websiteMailUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_mail_pass", type="string", length=100, nullable=true)
     */
    private $websiteMailPass;

    public function getTblSystemWebsitesId(): ?int
    {
        return $this->tblSystemWebsitesId;
    }

    public function getTblSystemTemplatesId(): ?int
    {
        return $this->tblSystemTemplatesId;
    }

    public function setTblSystemTemplatesId(?int $tblSystemTemplatesId): self
    {
        $this->tblSystemTemplatesId = $tblSystemTemplatesId;

        return $this;
    }

    public function getTblSystemLanguagesId(): ?int
    {
        return $this->tblSystemLanguagesId;
    }

    public function setTblSystemLanguagesId(?int $tblSystemLanguagesId): self
    {
        $this->tblSystemLanguagesId = $tblSystemLanguagesId;

        return $this;
    }

    public function getWebsiteName(): ?string
    {
        return $this->websiteName;
    }

    public function setWebsiteName(?string $websiteName): self
    {
        $this->websiteName = $websiteName;

        return $this;
    }

    public function getWebsiteTitle(): ?string
    {
        return $this->websiteTitle;
    }

    public function setWebsiteTitle(?string $websiteTitle): self
    {
        $this->websiteTitle = $websiteTitle;

        return $this;
    }

    public function getWebsiteKeywords(): ?string
    {
        return $this->websiteKeywords;
    }

    public function setWebsiteKeywords(?string $websiteKeywords): self
    {
        $this->websiteKeywords = $websiteKeywords;

        return $this;
    }

    public function getWebsiteDescription(): ?string
    {
        return $this->websiteDescription;
    }

    public function setWebsiteDescription(?string $websiteDescription): self
    {
        $this->websiteDescription = $websiteDescription;

        return $this;
    }

    public function getWebsiteDefault(): ?bool
    {
        return $this->websiteDefault;
    }

    public function setWebsiteDefault(bool $websiteDefault): self
    {
        $this->websiteDefault = $websiteDefault;

        return $this;
    }

    public function getWebsiteActive(): ?bool
    {
        return $this->websiteActive;
    }

    public function setWebsiteActive(bool $websiteActive): self
    {
        $this->websiteActive = $websiteActive;

        return $this;
    }

    public function getWebsiteOgImage(): ?string
    {
        return $this->websiteOgImage;
    }

    public function setWebsiteOgImage(?string $websiteOgImage): self
    {
        $this->websiteOgImage = $websiteOgImage;

        return $this;
    }

    public function getWebsiteAnalytics(): ?string
    {
        return $this->websiteAnalytics;
    }

    public function setWebsiteAnalytics(?string $websiteAnalytics): self
    {
        $this->websiteAnalytics = $websiteAnalytics;

        return $this;
    }

    public function getWebsiteCdnImages(): ?string
    {
        return $this->websiteCdnImages;
    }

    public function setWebsiteCdnImages(?string $websiteCdnImages): self
    {
        $this->websiteCdnImages = $websiteCdnImages;

        return $this;
    }

    public function getWebsiteCdnTemplates(): ?string
    {
        return $this->websiteCdnTemplates;
    }

    public function setWebsiteCdnTemplates(?string $websiteCdnTemplates): self
    {
        $this->websiteCdnTemplates = $websiteCdnTemplates;

        return $this;
    }

    public function getWebsiteCdnContainer(): ?string
    {
        return $this->websiteCdnContainer;
    }

    public function setWebsiteCdnContainer(?string $websiteCdnContainer): self
    {
        $this->websiteCdnContainer = $websiteCdnContainer;

        return $this;
    }

    public function getWebsiteMailServer(): ?string
    {
        return $this->websiteMailServer;
    }

    public function setWebsiteMailServer(?string $websiteMailServer): self
    {
        $this->websiteMailServer = $websiteMailServer;

        return $this;
    }

    public function getWebsiteMailPort(): ?string
    {
        return $this->websiteMailPort;
    }

    public function setWebsiteMailPort(?string $websiteMailPort): self
    {
        $this->websiteMailPort = $websiteMailPort;

        return $this;
    }

    public function getWebsiteMailUser(): ?string
    {
        return $this->websiteMailUser;
    }

    public function setWebsiteMailUser(?string $websiteMailUser): self
    {
        $this->websiteMailUser = $websiteMailUser;

        return $this;
    }

    public function getWebsiteMailPass(): ?string
    {
        return $this->websiteMailPass;
    }

    public function setWebsiteMailPass(?string $websiteMailPass): self
    {
        $this->websiteMailPass = $websiteMailPass;

        return $this;
    }


}
