<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAppsLanguagesCats
 *
 * @ORM\Table(name="tbl_apps_languages_cats")
 * @ORM\Entity
 */
class TblAppsLanguagesCats
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_languages_cats_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsLanguagesCatsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cat_name", type="string", length=250, nullable=true)
     */
    private $catName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cat_var", type="string", length=250, nullable=true)
     */
    private $catVar;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cat_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $catActive = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cat_show", type="boolean", nullable=true, options={"default"="1"})
     */
    private $catShow = '1';

    public function getTblAppsLanguagesCatsId(): ?int
    {
        return $this->tblAppsLanguagesCatsId;
    }

    public function getCatName(): ?string
    {
        return $this->catName;
    }

    public function setCatName(?string $catName): self
    {
        $this->catName = $catName;

        return $this;
    }

    public function getCatVar(): ?string
    {
        return $this->catVar;
    }

    public function setCatVar(?string $catVar): self
    {
        $this->catVar = $catVar;

        return $this;
    }

    public function getCatActive(): ?bool
    {
        return $this->catActive;
    }

    public function setCatActive(?bool $catActive): self
    {
        $this->catActive = $catActive;

        return $this;
    }

    public function getCatShow(): ?bool
    {
        return $this->catShow;
    }

    public function setCatShow(?bool $catShow): self
    {
        $this->catShow = $catShow;

        return $this;
    }


}
