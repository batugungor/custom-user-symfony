<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemWebsitesDomains
 *
 * @ORM\Table(name="tbl_system_websites_domains")
 * @ORM\Entity
 */
class TblSystemWebsitesDomains
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_websites_domains_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemWebsitesDomainsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_websites_id", type="integer", nullable=false)
     */
    private $tblSystemWebsitesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain_name", type="string", length=255, nullable=true)
     */
    private $domainName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain_folder", type="string", length=100, nullable=true)
     */
    private $domainFolder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain_script", type="string", length=100, nullable=true)
     */
    private $domainScript;

    /**
     * @var bool
     *
     * @ORM\Column(name="domain_default", type="boolean", nullable=false)
     */
    private $domainDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="domain_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $domainActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=255, nullable=true)
     */
    private $seoUrl;

    public function getTblSystemWebsitesDomainsId(): ?int
    {
        return $this->tblSystemWebsitesDomainsId;
    }

    public function getTblSystemWebsitesId(): ?int
    {
        return $this->tblSystemWebsitesId;
    }

    public function setTblSystemWebsitesId(int $tblSystemWebsitesId): self
    {
        $this->tblSystemWebsitesId = $tblSystemWebsitesId;

        return $this;
    }

    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;

        return $this;
    }

    public function getDomainFolder(): ?string
    {
        return $this->domainFolder;
    }

    public function setDomainFolder(?string $domainFolder): self
    {
        $this->domainFolder = $domainFolder;

        return $this;
    }

    public function getDomainScript(): ?string
    {
        return $this->domainScript;
    }

    public function setDomainScript(?string $domainScript): self
    {
        $this->domainScript = $domainScript;

        return $this;
    }

    public function getDomainDefault(): ?bool
    {
        return $this->domainDefault;
    }

    public function setDomainDefault(bool $domainDefault): self
    {
        $this->domainDefault = $domainDefault;

        return $this;
    }

    public function getDomainActive(): ?bool
    {
        return $this->domainActive;
    }

    public function setDomainActive(bool $domainActive): self
    {
        $this->domainActive = $domainActive;

        return $this;
    }

    public function getSeoUrl(): ?string
    {
        return $this->seoUrl;
    }

    public function setSeoUrl(?string $seoUrl): self
    {
        $this->seoUrl = $seoUrl;

        return $this;
    }


}
