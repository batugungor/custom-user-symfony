<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAppsUnits
 *
 * @ORM\Table(name="tbl_apps_units")
 * @ORM\Entity
 */
class TblAppsUnits
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_units_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsUnitsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_apps_units_id", type="integer", nullable=true)
     */
    private $upperTblAppsUnitsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_id", type="integer", nullable=true)
     */
    private $tblAppsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_units_id", type="integer", nullable=true)
     */
    private $tblUnitsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_forms_id", type="integer", nullable=true)
     */
    private $tblCompaniesFormsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_albums_id", type="integer", nullable=true)
     */
    private $tblAlbumsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unit_db_tbl_id", type="integer", nullable=true)
     */
    private $unitDbTblId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_icon", type="string", length=250, nullable=true)
     */
    private $unitIcon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_displayname", type="string", length=255, nullable=true)
     */
    private $unitDisplayname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_titleheader", type="string", length=255, nullable=true)
     */
    private $unitTitleheader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_content", type="text", length=65535, nullable=true)
     */
    private $unitContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_endpoint", type="string", length=255, nullable=true)
     */
    private $unitEndpoint;

    /**
     * @var float|null
     *
     * @ORM\Column(name="unit_timestamp", type="float", precision=10, scale=0, nullable=true)
     */
    private $unitTimestamp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unit_position", type="integer", nullable=true, options={"default"="1"})
     */
    private $unitPosition = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $unitActive = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_login", type="boolean", nullable=true)
     */
    private $unitLogin = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_visible_without_login", type="boolean", nullable=true, options={"default"="1"})
     */
    private $unitVisibleWithoutLogin = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_theme", type="string", length=45, nullable=true)
     */
    private $unitTheme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_name", type="string", length=200, nullable=true)
     */
    private $unitName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_title", type="string", length=250, nullable=true)
     */
    private $unitTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_title_header", type="string", length=250, nullable=true)
     */
    private $unitTitleHeader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_description", type="string", length=250, nullable=true)
     */
    private $unitDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_image_url", type="string", length=250, nullable=true)
     */
    private $unitImageUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_video_url", type="string", length=250, nullable=true)
     */
    private $unitVideoUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_youtube_url", type="string", length=250, nullable=true)
     */
    private $unitYoutubeUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_external_url", type="string", length=250, nullable=true)
     */
    private $unitExternalUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_external_url_text", type="string", length=250, nullable=true)
     */
    private $unitExternalUrlText;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_link", type="boolean", nullable=true)
     */
    private $unitLink = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_link_url", type="string", length=250, nullable=true)
     */
    private $unitLinkUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_color", type="string", length=45, nullable=true)
     */
    private $unitColor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="unit_deletable", type="boolean", nullable=true, options={"default"="1"})
     */
    private $unitDeletable = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="unit_date_created", type="datetime", nullable=true)
     */
    private $unitDateCreated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="unit_date_until", type="datetime", nullable=true)
     */
    private $unitDateUntil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_order", type="string", length=250, nullable=true)
     */
    private $unitOrder;

    public function getTblAppsUnitsId(): ?int
    {
        return $this->tblAppsUnitsId;
    }

    public function getUpperTblAppsUnitsId(): ?int
    {
        return $this->upperTblAppsUnitsId;
    }

    public function setUpperTblAppsUnitsId(?int $upperTblAppsUnitsId): self
    {
        $this->upperTblAppsUnitsId = $upperTblAppsUnitsId;

        return $this;
    }

    public function getTblAppsId(): ?int
    {
        return $this->tblAppsId;
    }

    public function setTblAppsId(?int $tblAppsId): self
    {
        $this->tblAppsId = $tblAppsId;

        return $this;
    }

    public function getTblUnitsId(): ?int
    {
        return $this->tblUnitsId;
    }

    public function setTblUnitsId(?int $tblUnitsId): self
    {
        $this->tblUnitsId = $tblUnitsId;

        return $this;
    }

    public function getTblCompaniesFormsId(): ?int
    {
        return $this->tblCompaniesFormsId;
    }

    public function setTblCompaniesFormsId(?int $tblCompaniesFormsId): self
    {
        $this->tblCompaniesFormsId = $tblCompaniesFormsId;

        return $this;
    }

    public function getTblAlbumsId(): ?int
    {
        return $this->tblAlbumsId;
    }

    public function setTblAlbumsId(?int $tblAlbumsId): self
    {
        $this->tblAlbumsId = $tblAlbumsId;

        return $this;
    }

    public function getUnitDbTblId(): ?int
    {
        return $this->unitDbTblId;
    }

    public function setUnitDbTblId(?int $unitDbTblId): self
    {
        $this->unitDbTblId = $unitDbTblId;

        return $this;
    }

    public function getUnitIcon(): ?string
    {
        return $this->unitIcon;
    }

    public function setUnitIcon(?string $unitIcon): self
    {
        $this->unitIcon = $unitIcon;

        return $this;
    }

    public function getUnitDisplayname(): ?string
    {
        return $this->unitDisplayname;
    }

    public function setUnitDisplayname(?string $unitDisplayname): self
    {
        $this->unitDisplayname = $unitDisplayname;

        return $this;
    }

    public function getUnitTitleheader(): ?string
    {
        return $this->unitTitleheader;
    }

    public function setUnitTitleheader(?string $unitTitleheader): self
    {
        $this->unitTitleheader = $unitTitleheader;

        return $this;
    }

    public function getUnitContent(): ?string
    {
        return $this->unitContent;
    }

    public function setUnitContent(?string $unitContent): self
    {
        $this->unitContent = $unitContent;

        return $this;
    }

    public function getUnitEndpoint(): ?string
    {
        return $this->unitEndpoint;
    }

    public function setUnitEndpoint(?string $unitEndpoint): self
    {
        $this->unitEndpoint = $unitEndpoint;

        return $this;
    }

    public function getUnitTimestamp(): ?float
    {
        return $this->unitTimestamp;
    }

    public function setUnitTimestamp(?float $unitTimestamp): self
    {
        $this->unitTimestamp = $unitTimestamp;

        return $this;
    }

    public function getUnitPosition(): ?int
    {
        return $this->unitPosition;
    }

    public function setUnitPosition(?int $unitPosition): self
    {
        $this->unitPosition = $unitPosition;

        return $this;
    }

    public function getUnitActive(): ?bool
    {
        return $this->unitActive;
    }

    public function setUnitActive(?bool $unitActive): self
    {
        $this->unitActive = $unitActive;

        return $this;
    }

    public function getUnitLogin(): ?bool
    {
        return $this->unitLogin;
    }

    public function setUnitLogin(?bool $unitLogin): self
    {
        $this->unitLogin = $unitLogin;

        return $this;
    }

    public function getUnitVisibleWithoutLogin(): ?bool
    {
        return $this->unitVisibleWithoutLogin;
    }

    public function setUnitVisibleWithoutLogin(?bool $unitVisibleWithoutLogin): self
    {
        $this->unitVisibleWithoutLogin = $unitVisibleWithoutLogin;

        return $this;
    }

    public function getUnitTheme(): ?string
    {
        return $this->unitTheme;
    }

    public function setUnitTheme(?string $unitTheme): self
    {
        $this->unitTheme = $unitTheme;

        return $this;
    }

    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    public function setUnitName(?string $unitName): self
    {
        $this->unitName = $unitName;

        return $this;
    }

    public function getUnitTitle(): ?string
    {
        return $this->unitTitle;
    }

    public function setUnitTitle(?string $unitTitle): self
    {
        $this->unitTitle = $unitTitle;

        return $this;
    }

    public function getUnitDescription(): ?string
    {
        return $this->unitDescription;
    }

    public function setUnitDescription(?string $unitDescription): self
    {
        $this->unitDescription = $unitDescription;

        return $this;
    }

    public function getUnitImageUrl(): ?string
    {
        return $this->unitImageUrl;
    }

    public function setUnitImageUrl(?string $unitImageUrl): self
    {
        $this->unitImageUrl = $unitImageUrl;

        return $this;
    }

    public function getUnitVideoUrl(): ?string
    {
        return $this->unitVideoUrl;
    }

    public function setUnitVideoUrl(?string $unitVideoUrl): self
    {
        $this->unitVideoUrl = $unitVideoUrl;

        return $this;
    }

    public function getUnitYoutubeUrl(): ?string
    {
        return $this->unitYoutubeUrl;
    }

    public function setUnitYoutubeUrl(?string $unitYoutubeUrl): self
    {
        $this->unitYoutubeUrl = $unitYoutubeUrl;

        return $this;
    }

    public function getUnitExternalUrl(): ?string
    {
        return $this->unitExternalUrl;
    }

    public function setUnitExternalUrl(?string $unitExternalUrl): self
    {
        $this->unitExternalUrl = $unitExternalUrl;

        return $this;
    }

    public function getUnitExternalUrlText(): ?string
    {
        return $this->unitExternalUrlText;
    }

    public function setUnitExternalUrlText(?string $unitExternalUrlText): self
    {
        $this->unitExternalUrlText = $unitExternalUrlText;

        return $this;
    }

    public function getUnitLink(): ?bool
    {
        return $this->unitLink;
    }

    public function setUnitLink(?bool $unitLink): self
    {
        $this->unitLink = $unitLink;

        return $this;
    }

    public function getUnitLinkUrl(): ?string
    {
        return $this->unitLinkUrl;
    }

    public function setUnitLinkUrl(?string $unitLinkUrl): self
    {
        $this->unitLinkUrl = $unitLinkUrl;

        return $this;
    }

    public function getUnitColor(): ?string
    {
        return $this->unitColor;
    }

    public function setUnitColor(?string $unitColor): self
    {
        $this->unitColor = $unitColor;

        return $this;
    }

    public function getUnitDeletable(): ?bool
    {
        return $this->unitDeletable;
    }

    public function setUnitDeletable(?bool $unitDeletable): self
    {
        $this->unitDeletable = $unitDeletable;

        return $this;
    }

    public function getUnitDateCreated(): ?\DateTimeInterface
    {
        return $this->unitDateCreated;
    }

    public function setUnitDateCreated(?\DateTimeInterface $unitDateCreated): self
    {
        $this->unitDateCreated = $unitDateCreated;

        return $this;
    }

    public function getUnitDateUntil(): ?\DateTimeInterface
    {
        return $this->unitDateUntil;
    }

    public function setUnitDateUntil(?\DateTimeInterface $unitDateUntil): self
    {
        $this->unitDateUntil = $unitDateUntil;

        return $this;
    }

    public function getUnitOrder(): ?string
    {
        return $this->unitOrder;
    }

    public function setUnitOrder(?string $unitOrder): self
    {
        $this->unitOrder = $unitOrder;

        return $this;
    }


}
