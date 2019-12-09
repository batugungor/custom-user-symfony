<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesStartpageLinks
 *
 * @ORM\Table(name="tbl_companies_startpage_links")
 * @ORM\Entity
 */
class TblCompaniesStartpageLinks
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_startpage_links_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesStartpageLinksId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_startpage_blocks_id", type="integer", nullable=false)
     */
    private $tblCompaniesStartpageBlocksId;

    /**
     * @var string
     *
     * @ORM\Column(name="link_name", type="string", length=255, nullable=false)
     */
    private $linkName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_description", type="text", length=65535, nullable=true)
     */
    private $linkDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_image", type="string", length=250, nullable=true)
     */
    private $linkImage;

    /**
     * @var string
     *
     * @ORM\Column(name="link_link", type="string", length=255, nullable=false)
     */
    private $linkLink;

    /**
     * @var bool
     *
     * @ORM\Column(name="link_order", type="boolean", nullable=false, options={"default"="1"})
     */
    private $linkOrder = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="link_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $linkActive = '1';

    public function getTblCompaniesStartpageLinksId(): ?int
    {
        return $this->tblCompaniesStartpageLinksId;
    }

    public function getTblCompaniesStartpageBlocksId(): ?int
    {
        return $this->tblCompaniesStartpageBlocksId;
    }

    public function setTblCompaniesStartpageBlocksId(int $tblCompaniesStartpageBlocksId): self
    {
        $this->tblCompaniesStartpageBlocksId = $tblCompaniesStartpageBlocksId;

        return $this;
    }

    public function getLinkName(): ?string
    {
        return $this->linkName;
    }

    public function setLinkName(string $linkName): self
    {
        $this->linkName = $linkName;

        return $this;
    }

    public function getLinkDescription(): ?string
    {
        return $this->linkDescription;
    }

    public function setLinkDescription(?string $linkDescription): self
    {
        $this->linkDescription = $linkDescription;

        return $this;
    }

    public function getLinkImage(): ?string
    {
        return $this->linkImage;
    }

    public function setLinkImage(?string $linkImage): self
    {
        $this->linkImage = $linkImage;

        return $this;
    }

    public function getLinkLink(): ?string
    {
        return $this->linkLink;
    }

    public function setLinkLink(string $linkLink): self
    {
        $this->linkLink = $linkLink;

        return $this;
    }

    public function getLinkOrder(): ?bool
    {
        return $this->linkOrder;
    }

    public function setLinkOrder(bool $linkOrder): self
    {
        $this->linkOrder = $linkOrder;

        return $this;
    }

    public function getLinkActive(): ?bool
    {
        return $this->linkActive;
    }

    public function setLinkActive(bool $linkActive): self
    {
        $this->linkActive = $linkActive;

        return $this;
    }


}
