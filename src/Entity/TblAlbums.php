<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAlbums
 *
 * @ORM\Table(name="tbl_albums")
 * @ORM\Entity
 */
class TblAlbums
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_albums_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAlbumsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_albums_id", type="integer", nullable=true)
     */
    private $upperTblAlbumsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="album_name", type="string", length=255, nullable=true)
     */
    private $albumName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="album_title", type="string", length=255, nullable=true)
     */
    private $albumTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="album_description", type="text", length=65535, nullable=true)
     */
    private $albumDescription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="album_time", type="time", nullable=true, options={"default"="12:00:00"})
     */
    private $albumTime = '12:00:00';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="album_profile", type="boolean", nullable=true)
     */
    private $albumProfile = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="album_interval", type="integer", nullable=true, options={"default"="6"})
     */
    private $albumInterval = '6';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="album_index", type="boolean", nullable=true, options={"default"="1"})
     */
    private $albumIndex = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="album_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $albumActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=255, nullable=true)
     */
    private $seoUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_og_title", type="string", length=255, nullable=true)
     */
    private $seoOgTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_og_description", type="string", length=255, nullable=true)
     */
    private $seoOgDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_description", type="string", length=255, nullable=true)
     */
    private $seoDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_browser_title", type="string", length=255, nullable=true)
     */
    private $seoBrowserTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_h1_title", type="string", length=255, nullable=true)
     */
    private $seoH1Title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_anchor_title", type="string", length=255, nullable=true)
     */
    private $seoAnchorTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_breadcrumb_title", type="string", length=255, nullable=true)
     */
    private $seoBreadcrumbTitle;

    /**
     * @var float|null
     *
     * @ORM\Column(name="album_timestamp", type="float", precision=10, scale=0, nullable=true)
     */
    private $albumTimestamp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="album_position", type="integer", nullable=true)
     */
    private $albumPosition;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="album_images", type="boolean", nullable=true, options={"default"="1"})
     */
    private $albumImages = '1';

    public function getTblAlbumsId(): ?int
    {
        return $this->tblAlbumsId;
    }

    public function getUpperTblAlbumsId(): ?int
    {
        return $this->upperTblAlbumsId;
    }

    public function setUpperTblAlbumsId(?int $upperTblAlbumsId): self
    {
        $this->upperTblAlbumsId = $upperTblAlbumsId;

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

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(?int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getAlbumName(): ?string
    {
        return $this->albumName;
    }

    public function setAlbumName(?string $albumName): self
    {
        $this->albumName = $albumName;

        return $this;
    }

    public function getAlbumTitle(): ?string
    {
        return $this->albumTitle;
    }

    public function setAlbumTitle(?string $albumTitle): self
    {
        $this->albumTitle = $albumTitle;

        return $this;
    }

    public function getAlbumDescription(): ?string
    {
        return $this->albumDescription;
    }

    public function setAlbumDescription(?string $albumDescription): self
    {
        $this->albumDescription = $albumDescription;

        return $this;
    }

    public function getAlbumTime(): ?\DateTimeInterface
    {
        return $this->albumTime;
    }

    public function setAlbumTime(?\DateTimeInterface $albumTime): self
    {
        $this->albumTime = $albumTime;

        return $this;
    }

    public function getAlbumProfile(): ?bool
    {
        return $this->albumProfile;
    }

    public function setAlbumProfile(?bool $albumProfile): self
    {
        $this->albumProfile = $albumProfile;

        return $this;
    }

    public function getAlbumInterval(): ?int
    {
        return $this->albumInterval;
    }

    public function setAlbumInterval(?int $albumInterval): self
    {
        $this->albumInterval = $albumInterval;

        return $this;
    }

    public function getAlbumIndex(): ?bool
    {
        return $this->albumIndex;
    }

    public function setAlbumIndex(?bool $albumIndex): self
    {
        $this->albumIndex = $albumIndex;

        return $this;
    }

    public function getAlbumActive(): ?bool
    {
        return $this->albumActive;
    }

    public function setAlbumActive(?bool $albumActive): self
    {
        $this->albumActive = $albumActive;

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

    public function getSeoOgTitle(): ?string
    {
        return $this->seoOgTitle;
    }

    public function setSeoOgTitle(?string $seoOgTitle): self
    {
        $this->seoOgTitle = $seoOgTitle;

        return $this;
    }

    public function getSeoOgDescription(): ?string
    {
        return $this->seoOgDescription;
    }

    public function setSeoOgDescription(?string $seoOgDescription): self
    {
        $this->seoOgDescription = $seoOgDescription;

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

    public function getSeoBrowserTitle(): ?string
    {
        return $this->seoBrowserTitle;
    }

    public function setSeoBrowserTitle(?string $seoBrowserTitle): self
    {
        $this->seoBrowserTitle = $seoBrowserTitle;

        return $this;
    }

    public function getSeoH1Title(): ?string
    {
        return $this->seoH1Title;
    }

    public function setSeoH1Title(?string $seoH1Title): self
    {
        $this->seoH1Title = $seoH1Title;

        return $this;
    }

    public function getSeoAnchorTitle(): ?string
    {
        return $this->seoAnchorTitle;
    }

    public function setSeoAnchorTitle(?string $seoAnchorTitle): self
    {
        $this->seoAnchorTitle = $seoAnchorTitle;

        return $this;
    }

    public function getSeoBreadcrumbTitle(): ?string
    {
        return $this->seoBreadcrumbTitle;
    }

    public function setSeoBreadcrumbTitle(?string $seoBreadcrumbTitle): self
    {
        $this->seoBreadcrumbTitle = $seoBreadcrumbTitle;

        return $this;
    }

    public function getAlbumTimestamp(): ?float
    {
        return $this->albumTimestamp;
    }

    public function setAlbumTimestamp(?float $albumTimestamp): self
    {
        $this->albumTimestamp = $albumTimestamp;

        return $this;
    }

    public function getAlbumPosition(): ?int
    {
        return $this->albumPosition;
    }

    public function setAlbumPosition(?int $albumPosition): self
    {
        $this->albumPosition = $albumPosition;

        return $this;
    }

    public function getAlbumImages(): ?bool
    {
        return $this->albumImages;
    }

    public function setAlbumImages(?bool $albumImages): self
    {
        $this->albumImages = $albumImages;

        return $this;
    }


}
