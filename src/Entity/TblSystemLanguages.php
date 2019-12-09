<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemLanguages
 *
 * @ORM\Table(name="tbl_system_languages")
 * @ORM\Entity
 */
class TblSystemLanguages
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_languages_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemLanguagesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="language_code", type="string", length=45, nullable=true)
     */
    private $languageCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="language_name", type="string", length=240, nullable=true)
     */
    private $languageName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="language_nativename", type="string", length=240, nullable=true)
     */
    private $languageNativename;

    public function getTblSystemLanguagesId(): ?int
    {
        return $this->tblSystemLanguagesId;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(?string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getLanguageName(): ?string
    {
        return $this->languageName;
    }

    public function setLanguageName(?string $languageName): self
    {
        $this->languageName = $languageName;

        return $this;
    }

    public function getLanguageNativename(): ?string
    {
        return $this->languageNativename;
    }

    public function setLanguageNativename(?string $languageNativename): self
    {
        $this->languageNativename = $languageNativename;

        return $this;
    }


}
