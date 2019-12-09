<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemRss
 *
 * @ORM\Table(name="tbl_system_rss")
 * @ORM\Entity
 */
class TblSystemRss
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_rss_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemRssId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rss_table", type="string", length=100, nullable=true)
     */
    private $rssTable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rss_table_id", type="integer", nullable=true)
     */
    private $rssTableId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rss_title", type="string", length=255, nullable=true)
     */
    private $rssTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rss_content", type="string", length=255, nullable=true)
     */
    private $rssContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rss_author", type="string", length=255, nullable=true)
     */
    private $rssAuthor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rss_url", type="string", length=255, nullable=true)
     */
    private $rssUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rss_twitter", type="string", length=255, nullable=true)
     */
    private $rssTwitter;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rss_datetime", type="datetime", nullable=true)
     */
    private $rssDatetime;

    public function getTblSystemRssId(): ?int
    {
        return $this->tblSystemRssId;
    }

    public function getRssTable(): ?string
    {
        return $this->rssTable;
    }

    public function setRssTable(?string $rssTable): self
    {
        $this->rssTable = $rssTable;

        return $this;
    }

    public function getRssTableId(): ?int
    {
        return $this->rssTableId;
    }

    public function setRssTableId(?int $rssTableId): self
    {
        $this->rssTableId = $rssTableId;

        return $this;
    }

    public function getRssTitle(): ?string
    {
        return $this->rssTitle;
    }

    public function setRssTitle(?string $rssTitle): self
    {
        $this->rssTitle = $rssTitle;

        return $this;
    }

    public function getRssContent(): ?string
    {
        return $this->rssContent;
    }

    public function setRssContent(?string $rssContent): self
    {
        $this->rssContent = $rssContent;

        return $this;
    }

    public function getRssAuthor(): ?string
    {
        return $this->rssAuthor;
    }

    public function setRssAuthor(?string $rssAuthor): self
    {
        $this->rssAuthor = $rssAuthor;

        return $this;
    }

    public function getRssUrl(): ?string
    {
        return $this->rssUrl;
    }

    public function setRssUrl(?string $rssUrl): self
    {
        $this->rssUrl = $rssUrl;

        return $this;
    }

    public function getRssTwitter(): ?string
    {
        return $this->rssTwitter;
    }

    public function setRssTwitter(?string $rssTwitter): self
    {
        $this->rssTwitter = $rssTwitter;

        return $this;
    }

    public function getRssDatetime(): ?\DateTimeInterface
    {
        return $this->rssDatetime;
    }

    public function setRssDatetime(?\DateTimeInterface $rssDatetime): self
    {
        $this->rssDatetime = $rssDatetime;

        return $this;
    }


}
