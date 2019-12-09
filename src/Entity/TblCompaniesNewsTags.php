<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesNewsTags
 *
 * @ORM\Table(name="tbl_companies_news_tags")
 * @ORM\Entity
 */
class TblCompaniesNewsTags
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_news_tags_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesNewsTagsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_languages_id", type="integer", nullable=true)
     */
    private $tblSystemLanguagesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag_name", type="string", length=255, nullable=true)
     */
    private $tagName;

    /**
     * @var bool
     *
     * @ORM\Column(name="tag_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $tagActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=255, nullable=true)
     */
    private $seoUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_keywords", type="string", length=255, nullable=true)
     */
    private $seoKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_description", type="string", length=200, nullable=true)
     */
    private $seoDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="seo_words", type="integer", nullable=false)
     */
    private $seoWords = '0';

    public function getTblCompaniesNewsTagsId(): ?int
    {
        return $this->tblCompaniesNewsTagsId;
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

    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    public function setTagName(?string $tagName): self
    {
        $this->tagName = $tagName;

        return $this;
    }

    public function getTagActive(): ?bool
    {
        return $this->tagActive;
    }

    public function setTagActive(bool $tagActive): self
    {
        $this->tagActive = $tagActive;

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

    public function getSeoKeywords(): ?string
    {
        return $this->seoKeywords;
    }

    public function setSeoKeywords(?string $seoKeywords): self
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    public function getSeoDescription(): ?string
    {
        return $this->seoDescription;
    }

    public function setSeoDescription(?string $seoDescription): self
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    public function getSeoWords(): ?int
    {
        return $this->seoWords;
    }

    public function setSeoWords(int $seoWords): self
    {
        $this->seoWords = $seoWords;

        return $this;
    }


}
