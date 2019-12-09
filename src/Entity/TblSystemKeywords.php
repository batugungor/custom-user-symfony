<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemKeywords
 *
 * @ORM\Table(name="tbl_system_keywords")
 * @ORM\Entity
 */
class TblSystemKeywords
{
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="word", type="string", length=255, nullable=true)
     */
    private $word;

    /**
     * @var int
     *
     * @ORM\Column(name="wordcnt", type="integer", nullable=false)
     */
    private $wordcnt = '0';

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(?string $word): self
    {
        $this->word = $word;

        return $this;
    }

    public function getWordcnt(): ?int
    {
        return $this->wordcnt;
    }

    public function setWordcnt(int $wordcnt): self
    {
        $this->wordcnt = $wordcnt;

        return $this;
    }


}
