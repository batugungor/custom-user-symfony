<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblStartpageTidbits
 *
 * @ORM\Table(name="tbl_startpage_tidbits")
 * @ORM\Entity
 */
class TblStartpageTidbits
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_startpage_tidbits_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblStartpageTidbitsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="permanent_tbl_startpage_id", type="integer", nullable=true)
     */
    private $permanentTblStartpageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="permanent_tbl_startpage_blocks_id", type="integer", nullable=true)
     */
    private $permanentTblStartpageBlocksId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="permanent_tbl_startpage_links_id", type="integer", nullable=true)
     */
    private $permanentTblStartpageLinksId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="permanent_tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $permanentTblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="permanent_tbl_companies_cat_sub_id", type="integer", nullable=true)
     */
    private $permanentTblCompaniesCatSubId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="permanent_tbl_companies_cat_brands_id", type="integer", nullable=true)
     */
    private $permanentTblCompaniesCatBrandsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="random_tbl_startpage_id", type="integer", nullable=true)
     */
    private $randomTblStartpageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="random_tbl_startpage_blocks_id", type="integer", nullable=true)
     */
    private $randomTblStartpageBlocksId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="random_tbl_startpage_links_id", type="integer", nullable=true)
     */
    private $randomTblStartpageLinksId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="random_tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $randomTblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="random_tbl_companies_cat_sub_id", type="integer", nullable=true)
     */
    private $randomTblCompaniesCatSubId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="random_tbl_companies_cat_brands_id", type="integer", nullable=true)
     */
    private $randomTblCompaniesCatBrandsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tidbit_title", type="string", length=250, nullable=true)
     */
    private $tidbitTitle;

    /**
     * @var bool
     *
     * @ORM\Column(name="tidbit_title_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $tidbitTitleShow = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tidbit_image", type="string", length=250, nullable=true)
     */
    private $tidbitImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tidbit_text", type="text", length=65535, nullable=true)
     */
    private $tidbitText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tidbit_youtube", type="string", length=250, nullable=true)
     */
    private $tidbitYoutube;

    /**
     * @var bool
     *
     * @ORM\Column(name="tidbit_link", type="boolean", nullable=false, options={"default"="1"})
     */
    private $tidbitLink = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="tidbit_random", type="boolean", nullable=false, options={"default"="1"})
     */
    private $tidbitRandom = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="tidbit_visitors", type="boolean", nullable=false, options={"default"="1"})
     */
    private $tidbitVisitors = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="tidbit_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $tidbitActive = '1';

    public function getTblStartpageTidbitsId(): ?int
    {
        return $this->tblStartpageTidbitsId;
    }

    public function getPermanentTblStartpageId(): ?int
    {
        return $this->permanentTblStartpageId;
    }

    public function setPermanentTblStartpageId(?int $permanentTblStartpageId): self
    {
        $this->permanentTblStartpageId = $permanentTblStartpageId;

        return $this;
    }

    public function getPermanentTblStartpageBlocksId(): ?int
    {
        return $this->permanentTblStartpageBlocksId;
    }

    public function setPermanentTblStartpageBlocksId(?int $permanentTblStartpageBlocksId): self
    {
        $this->permanentTblStartpageBlocksId = $permanentTblStartpageBlocksId;

        return $this;
    }

    public function getPermanentTblStartpageLinksId(): ?int
    {
        return $this->permanentTblStartpageLinksId;
    }

    public function setPermanentTblStartpageLinksId(?int $permanentTblStartpageLinksId): self
    {
        $this->permanentTblStartpageLinksId = $permanentTblStartpageLinksId;

        return $this;
    }

    public function getPermanentTblCompaniesCatId(): ?int
    {
        return $this->permanentTblCompaniesCatId;
    }

    public function setPermanentTblCompaniesCatId(?int $permanentTblCompaniesCatId): self
    {
        $this->permanentTblCompaniesCatId = $permanentTblCompaniesCatId;

        return $this;
    }

    public function getPermanentTblCompaniesCatSubId(): ?int
    {
        return $this->permanentTblCompaniesCatSubId;
    }

    public function setPermanentTblCompaniesCatSubId(?int $permanentTblCompaniesCatSubId): self
    {
        $this->permanentTblCompaniesCatSubId = $permanentTblCompaniesCatSubId;

        return $this;
    }

    public function getPermanentTblCompaniesCatBrandsId(): ?int
    {
        return $this->permanentTblCompaniesCatBrandsId;
    }

    public function setPermanentTblCompaniesCatBrandsId(?int $permanentTblCompaniesCatBrandsId): self
    {
        $this->permanentTblCompaniesCatBrandsId = $permanentTblCompaniesCatBrandsId;

        return $this;
    }

    public function getRandomTblStartpageId(): ?int
    {
        return $this->randomTblStartpageId;
    }

    public function setRandomTblStartpageId(?int $randomTblStartpageId): self
    {
        $this->randomTblStartpageId = $randomTblStartpageId;

        return $this;
    }

    public function getRandomTblStartpageBlocksId(): ?int
    {
        return $this->randomTblStartpageBlocksId;
    }

    public function setRandomTblStartpageBlocksId(?int $randomTblStartpageBlocksId): self
    {
        $this->randomTblStartpageBlocksId = $randomTblStartpageBlocksId;

        return $this;
    }

    public function getRandomTblStartpageLinksId(): ?int
    {
        return $this->randomTblStartpageLinksId;
    }

    public function setRandomTblStartpageLinksId(?int $randomTblStartpageLinksId): self
    {
        $this->randomTblStartpageLinksId = $randomTblStartpageLinksId;

        return $this;
    }

    public function getRandomTblCompaniesCatId(): ?int
    {
        return $this->randomTblCompaniesCatId;
    }

    public function setRandomTblCompaniesCatId(?int $randomTblCompaniesCatId): self
    {
        $this->randomTblCompaniesCatId = $randomTblCompaniesCatId;

        return $this;
    }

    public function getRandomTblCompaniesCatSubId(): ?int
    {
        return $this->randomTblCompaniesCatSubId;
    }

    public function setRandomTblCompaniesCatSubId(?int $randomTblCompaniesCatSubId): self
    {
        $this->randomTblCompaniesCatSubId = $randomTblCompaniesCatSubId;

        return $this;
    }

    public function getRandomTblCompaniesCatBrandsId(): ?int
    {
        return $this->randomTblCompaniesCatBrandsId;
    }

    public function setRandomTblCompaniesCatBrandsId(?int $randomTblCompaniesCatBrandsId): self
    {
        $this->randomTblCompaniesCatBrandsId = $randomTblCompaniesCatBrandsId;

        return $this;
    }

    public function getTidbitTitle(): ?string
    {
        return $this->tidbitTitle;
    }

    public function setTidbitTitle(?string $tidbitTitle): self
    {
        $this->tidbitTitle = $tidbitTitle;

        return $this;
    }

    public function getTidbitTitleShow(): ?bool
    {
        return $this->tidbitTitleShow;
    }

    public function setTidbitTitleShow(bool $tidbitTitleShow): self
    {
        $this->tidbitTitleShow = $tidbitTitleShow;

        return $this;
    }

    public function getTidbitImage(): ?string
    {
        return $this->tidbitImage;
    }

    public function setTidbitImage(?string $tidbitImage): self
    {
        $this->tidbitImage = $tidbitImage;

        return $this;
    }

    public function getTidbitText(): ?string
    {
        return $this->tidbitText;
    }

    public function setTidbitText(?string $tidbitText): self
    {
        $this->tidbitText = $tidbitText;

        return $this;
    }

    public function getTidbitYoutube(): ?string
    {
        return $this->tidbitYoutube;
    }

    public function setTidbitYoutube(?string $tidbitYoutube): self
    {
        $this->tidbitYoutube = $tidbitYoutube;

        return $this;
    }

    public function getTidbitLink(): ?bool
    {
        return $this->tidbitLink;
    }

    public function setTidbitLink(bool $tidbitLink): self
    {
        $this->tidbitLink = $tidbitLink;

        return $this;
    }

    public function getTidbitRandom(): ?bool
    {
        return $this->tidbitRandom;
    }

    public function setTidbitRandom(bool $tidbitRandom): self
    {
        $this->tidbitRandom = $tidbitRandom;

        return $this;
    }

    public function getTidbitVisitors(): ?bool
    {
        return $this->tidbitVisitors;
    }

    public function setTidbitVisitors(bool $tidbitVisitors): self
    {
        $this->tidbitVisitors = $tidbitVisitors;

        return $this;
    }

    public function getTidbitActive(): ?bool
    {
        return $this->tidbitActive;
    }

    public function setTidbitActive(bool $tidbitActive): self
    {
        $this->tidbitActive = $tidbitActive;

        return $this;
    }


}
