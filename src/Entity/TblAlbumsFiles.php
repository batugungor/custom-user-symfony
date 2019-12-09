<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAlbumsFiles
 *
 * @ORM\Table(name="tbl_albums_files")
 * @ORM\Entity
 */
class TblAlbumsFiles
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_albums_files_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAlbumsFilesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_albums_id", type="integer", nullable=true)
     */
    private $tblAlbumsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_url", type="string", length=255, nullable=true)
     */
    private $imageUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="video_url", type="string", length=255, nullable=true)
     */
    private $videoUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_title", type="string", length=255, nullable=true)
     */
    private $fileTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_description", type="text", length=65535, nullable=true)
     */
    private $fileDescription;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="file_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $fileActive = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="file_date_created", type="datetime", nullable=true)
     */
    private $fileDateCreated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="file_date_edited", type="datetime", nullable=true)
     */
    private $fileDateEdited;

    /**
     * @var int|null
     *
     * @ORM\Column(name="file_position", type="integer", nullable=true)
     */
    private $filePosition = '0';

    public function getTblAlbumsFilesId(): ?int
    {
        return $this->tblAlbumsFilesId;
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

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    public function getFileTitle(): ?string
    {
        return $this->fileTitle;
    }

    public function setFileTitle(?string $fileTitle): self
    {
        $this->fileTitle = $fileTitle;

        return $this;
    }

    public function getFileDescription(): ?string
    {
        return $this->fileDescription;
    }

    public function setFileDescription(?string $fileDescription): self
    {
        $this->fileDescription = $fileDescription;

        return $this;
    }

    public function getFileActive(): ?bool
    {
        return $this->fileActive;
    }

    public function setFileActive(?bool $fileActive): self
    {
        $this->fileActive = $fileActive;

        return $this;
    }

    public function getFileDateCreated(): ?\DateTimeInterface
    {
        return $this->fileDateCreated;
    }

    public function setFileDateCreated(?\DateTimeInterface $fileDateCreated): self
    {
        $this->fileDateCreated = $fileDateCreated;

        return $this;
    }

    public function getFileDateEdited(): ?\DateTimeInterface
    {
        return $this->fileDateEdited;
    }

    public function setFileDateEdited(?\DateTimeInterface $fileDateEdited): self
    {
        $this->fileDateEdited = $fileDateEdited;

        return $this;
    }

    public function getFilePosition(): ?int
    {
        return $this->filePosition;
    }

    public function setFilePosition(?int $filePosition): self
    {
        $this->filePosition = $filePosition;

        return $this;
    }


}
