<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAppsBackgrounds
 *
 * @ORM\Table(name="tbl_apps_backgrounds")
 * @ORM\Entity
 */
class TblAppsBackgrounds
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_backgrounds_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsBackgroundsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_apps_id", type="integer", nullable=true)
     */
    private $tblAppsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="background_url", type="string", length=255, nullable=true)
     */
    private $backgroundUrl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="background_position", type="integer", nullable=true, options={"default"="1"})
     */
    private $backgroundPosition = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="background_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $backgroundActive = '1';

    public function getTblAppsBackgroundsId(): ?int
    {
        return $this->tblAppsBackgroundsId;
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

    public function getBackgroundUrl(): ?string
    {
        return $this->backgroundUrl;
    }

    public function setBackgroundUrl(?string $backgroundUrl): self
    {
        $this->backgroundUrl = $backgroundUrl;

        return $this;
    }

    public function getBackgroundPosition(): ?int
    {
        return $this->backgroundPosition;
    }

    public function setBackgroundPosition(?int $backgroundPosition): self
    {
        $this->backgroundPosition = $backgroundPosition;

        return $this;
    }

    public function getBackgroundActive(): ?bool
    {
        return $this->backgroundActive;
    }

    public function setBackgroundActive(?bool $backgroundActive): self
    {
        $this->backgroundActive = $backgroundActive;

        return $this;
    }


}
