<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLogsCaching
 *
 * @ORM\Table(name="tbl_logs_caching")
 * @ORM\Entity
 */
class TblLogsCaching
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_logs_caching_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblLogsCachingId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_url", type="string", length=250, nullable=true)
     */
    private $cacheUrl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cache_date", type="datetime", nullable=true)
     */
    private $cacheDate;

    /**
     * @var int
     *
     * @ORM\Column(name="cache_interval", type="integer", nullable=false, options={"default"="72"})
     */
    private $cacheInterval = '72';

    /**
     * @var bool
     *
     * @ORM\Column(name="cache_done", type="boolean", nullable=false)
     */
    private $cacheDone = '0';

    public function getTblLogsCachingId(): ?int
    {
        return $this->tblLogsCachingId;
    }

    public function getCacheUrl(): ?string
    {
        return $this->cacheUrl;
    }

    public function setCacheUrl(?string $cacheUrl): self
    {
        $this->cacheUrl = $cacheUrl;

        return $this;
    }

    public function getCacheDate(): ?\DateTimeInterface
    {
        return $this->cacheDate;
    }

    public function setCacheDate(?\DateTimeInterface $cacheDate): self
    {
        $this->cacheDate = $cacheDate;

        return $this;
    }

    public function getCacheInterval(): ?int
    {
        return $this->cacheInterval;
    }

    public function setCacheInterval(int $cacheInterval): self
    {
        $this->cacheInterval = $cacheInterval;

        return $this;
    }

    public function getCacheDone(): ?bool
    {
        return $this->cacheDone;
    }

    public function setCacheDone(bool $cacheDone): self
    {
        $this->cacheDone = $cacheDone;

        return $this;
    }


}
