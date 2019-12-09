<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAppsLanguages
 *
 * @ORM\Table(name="tbl_apps_languages")
 * @ORM\Entity
 */
class TblAppsLanguages
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_languages_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsLanguagesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_languages_id", type="integer", nullable=true)
     */
    private $tblSystemLanguagesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_languages_cats_id", type="integer", nullable=true)
     */
    private $tblAppsLanguagesCatsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_id", type="integer", nullable=true)
     */
    private $tblAppsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang_var", type="string", length=255, nullable=true)
     */
    private $langVar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang_value", type="string", length=2550, nullable=true)
     */
    private $langValue;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lang_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $langActive = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lang_default", type="boolean", nullable=true)
     */
    private $langDefault = '0';

    public function getTblAppsLanguagesId(): ?int
    {
        return $this->tblAppsLanguagesId;
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

    public function getTblAppsLanguagesCatsId(): ?int
    {
        return $this->tblAppsLanguagesCatsId;
    }

    public function setTblAppsLanguagesCatsId(?int $tblAppsLanguagesCatsId): self
    {
        $this->tblAppsLanguagesCatsId = $tblAppsLanguagesCatsId;

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

    public function getLangVar(): ?string
    {
        return $this->langVar;
    }

    public function setLangVar(?string $langVar): self
    {
        $this->langVar = $langVar;

        return $this;
    }

    public function getLangValue(): ?string
    {
        return $this->langValue;
    }

    public function setLangValue(?string $langValue): self
    {
        $this->langValue = $langValue;

        return $this;
    }

    public function getLangActive(): ?bool
    {
        return $this->langActive;
    }

    public function setLangActive(?bool $langActive): self
    {
        $this->langActive = $langActive;

        return $this;
    }

    public function getLangDefault(): ?bool
    {
        return $this->langDefault;
    }

    public function setLangDefault(?bool $langDefault): self
    {
        $this->langDefault = $langDefault;

        return $this;
    }


}
