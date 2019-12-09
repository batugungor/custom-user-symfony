<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesContents
 *
 * @ORM\Table(name="tbl_companies_contents")
 * @ORM\Entity
 */
class TblCompaniesContents
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_contents_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesContentsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_companies_contents_id", type="integer", nullable=true)
     */
    private $upperTblCompaniesContentsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

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
     * @var string|null
     *
     * @ORM\Column(name="content_name", type="string", length=200, nullable=true)
     */
    private $contentName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_title", type="string", length=250, nullable=true)
     */
    private $contentTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_title_header", type="string", length=250, nullable=true)
     */
    private $contentTitleHeader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_description", type="string", length=250, nullable=true)
     */
    private $contentDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_content", type="text", length=65535, nullable=true)
     */
    private $contentContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_icon", type="string", length=250, nullable=true)
     */
    private $contentIcon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_image_url", type="string", length=250, nullable=true)
     */
    private $contentImageUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_video_url", type="string", length=250, nullable=true)
     */
    private $contentVideoUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_youtube_url", type="string", length=250, nullable=true)
     */
    private $contentYoutubeUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_external_url", type="string", length=250, nullable=true)
     */
    private $contentExternalUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_external_url_text", type="string", length=250, nullable=true)
     */
    private $contentExternalUrlText;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="content_link", type="boolean", nullable=true)
     */
    private $contentLink = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_link_url", type="string", length=250, nullable=true)
     */
    private $contentLinkUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_color", type="string", length=45, nullable=true)
     */
    private $contentColor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="content_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $contentActive = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="content_deletable", type="boolean", nullable=true, options={"default"="1"})
     */
    private $contentDeletable = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="content_position", type="integer", nullable=true)
     */
    private $contentPosition;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="content_date_created", type="datetime", nullable=true)
     */
    private $contentDateCreated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="content_date_until", type="datetime", nullable=true)
     */
    private $contentDateUntil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_order", type="string", length=250, nullable=true)
     */
    private $contentOrder;

    public function getTblCompaniesContentsId(): ?int
    {
        return $this->tblCompaniesContentsId;
    }

    public function getUpperTblCompaniesContentsId(): ?int
    {
        return $this->upperTblCompaniesContentsId;
    }

    public function setUpperTblCompaniesContentsId(?int $upperTblCompaniesContentsId): self
    {
        $this->upperTblCompaniesContentsId = $upperTblCompaniesContentsId;

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

    public function getContentName(): ?string
    {
        return $this->contentName;
    }

    public function setContentName(?string $contentName): self
    {
        $this->contentName = $contentName;

        return $this;
    }

    public function getContentTitle(): ?string
    {
        return $this->contentTitle;
    }

    public function setContentTitle(?string $contentTitle): self
    {
        $this->contentTitle = $contentTitle;

        return $this;
    }

    public function getContentTitleHeader(): ?string
    {
        return $this->contentTitleHeader;
    }

    public function setContentTitleHeader(?string $contentTitleHeader): self
    {
        $this->contentTitleHeader = $contentTitleHeader;

        return $this;
    }

    public function getContentDescription(): ?string
    {
        return $this->contentDescription;
    }

    public function setContentDescription(?string $contentDescription): self
    {
        $this->contentDescription = $contentDescription;

        return $this;
    }

    public function getContentContent(): ?string
    {
        return $this->contentContent;
    }

    public function setContentContent(?string $contentContent): self
    {
        $this->contentContent = $contentContent;

        return $this;
    }

    public function getContentIcon(): ?string
    {
        return $this->contentIcon;
    }

    public function setContentIcon(?string $contentIcon): self
    {
        $this->contentIcon = $contentIcon;

        return $this;
    }

    public function getContentImageUrl(): ?string
    {
        return $this->contentImageUrl;
    }

    public function setContentImageUrl(?string $contentImageUrl): self
    {
        $this->contentImageUrl = $contentImageUrl;

        return $this;
    }

    public function getContentVideoUrl(): ?string
    {
        return $this->contentVideoUrl;
    }

    public function setContentVideoUrl(?string $contentVideoUrl): self
    {
        $this->contentVideoUrl = $contentVideoUrl;

        return $this;
    }

    public function getContentYoutubeUrl(): ?string
    {
        return $this->contentYoutubeUrl;
    }

    public function setContentYoutubeUrl(?string $contentYoutubeUrl): self
    {
        $this->contentYoutubeUrl = $contentYoutubeUrl;

        return $this;
    }

    public function getContentExternalUrl(): ?string
    {
        return $this->contentExternalUrl;
    }

    public function setContentExternalUrl(?string $contentExternalUrl): self
    {
        $this->contentExternalUrl = $contentExternalUrl;

        return $this;
    }

    public function getContentExternalUrlText(): ?string
    {
        return $this->contentExternalUrlText;
    }

    public function setContentExternalUrlText(?string $contentExternalUrlText): self
    {
        $this->contentExternalUrlText = $contentExternalUrlText;

        return $this;
    }

    public function getContentLink(): ?bool
    {
        return $this->contentLink;
    }

    public function setContentLink(?bool $contentLink): self
    {
        $this->contentLink = $contentLink;

        return $this;
    }

    public function getContentLinkUrl(): ?string
    {
        return $this->contentLinkUrl;
    }

    public function setContentLinkUrl(?string $contentLinkUrl): self
    {
        $this->contentLinkUrl = $contentLinkUrl;

        return $this;
    }

    public function getContentColor(): ?string
    {
        return $this->contentColor;
    }

    public function setContentColor(?string $contentColor): self
    {
        $this->contentColor = $contentColor;

        return $this;
    }

    public function getContentActive(): ?bool
    {
        return $this->contentActive;
    }

    public function setContentActive(?bool $contentActive): self
    {
        $this->contentActive = $contentActive;

        return $this;
    }

    public function getContentDeletable(): ?bool
    {
        return $this->contentDeletable;
    }

    public function setContentDeletable(?bool $contentDeletable): self
    {
        $this->contentDeletable = $contentDeletable;

        return $this;
    }

    public function getContentPosition(): ?int
    {
        return $this->contentPosition;
    }

    public function setContentPosition(?int $contentPosition): self
    {
        $this->contentPosition = $contentPosition;

        return $this;
    }

    public function getContentDateCreated(): ?\DateTimeInterface
    {
        return $this->contentDateCreated;
    }

    public function setContentDateCreated(?\DateTimeInterface $contentDateCreated): self
    {
        $this->contentDateCreated = $contentDateCreated;

        return $this;
    }

    public function getContentDateUntil(): ?\DateTimeInterface
    {
        return $this->contentDateUntil;
    }

    public function setContentDateUntil(?\DateTimeInterface $contentDateUntil): self
    {
        $this->contentDateUntil = $contentDateUntil;

        return $this;
    }

    public function getContentOrder(): ?string
    {
        return $this->contentOrder;
    }

    public function setContentOrder(?string $contentOrder): self
    {
        $this->contentOrder = $contentOrder;

        return $this;
    }


}
