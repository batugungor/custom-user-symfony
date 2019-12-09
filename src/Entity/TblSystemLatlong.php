<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemLatlong
 *
 * @ORM\Table(name="tbl_system_latlong")
 * @ORM\Entity
 */
class TblSystemLatlong
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_latlong_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemLatlongId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latlong_query", type="string", length=255, nullable=true)
     */
    private $latlongQuery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latlong_querytogoogle", type="string", length=255, nullable=true)
     */
    private $latlongQuerytogoogle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latlong_formatted_address", type="string", length=255, nullable=true)
     */
    private $latlongFormattedAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latlong_location", type="string", length=255, nullable=true)
     */
    private $latlongLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latlong_lat", type="string", length=45, nullable=true)
     */
    private $latlongLat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latlong_long", type="string", length=45, nullable=true)
     */
    private $latlongLong;

    /**
     * @var int
     *
     * @ORM\Column(name="latlong_results", type="integer", nullable=false, options={"default"="1"})
     */
    private $latlongResults = '1';

    public function getTblSystemLatlongId(): ?int
    {
        return $this->tblSystemLatlongId;
    }

    public function getLatlongQuery(): ?string
    {
        return $this->latlongQuery;
    }

    public function setLatlongQuery(?string $latlongQuery): self
    {
        $this->latlongQuery = $latlongQuery;

        return $this;
    }

    public function getLatlongQuerytogoogle(): ?string
    {
        return $this->latlongQuerytogoogle;
    }

    public function setLatlongQuerytogoogle(?string $latlongQuerytogoogle): self
    {
        $this->latlongQuerytogoogle = $latlongQuerytogoogle;

        return $this;
    }

    public function getLatlongFormattedAddress(): ?string
    {
        return $this->latlongFormattedAddress;
    }

    public function setLatlongFormattedAddress(?string $latlongFormattedAddress): self
    {
        $this->latlongFormattedAddress = $latlongFormattedAddress;

        return $this;
    }

    public function getLatlongLocation(): ?string
    {
        return $this->latlongLocation;
    }

    public function setLatlongLocation(?string $latlongLocation): self
    {
        $this->latlongLocation = $latlongLocation;

        return $this;
    }

    public function getLatlongLat(): ?string
    {
        return $this->latlongLat;
    }

    public function setLatlongLat(?string $latlongLat): self
    {
        $this->latlongLat = $latlongLat;

        return $this;
    }

    public function getLatlongLong(): ?string
    {
        return $this->latlongLong;
    }

    public function setLatlongLong(?string $latlongLong): self
    {
        $this->latlongLong = $latlongLong;

        return $this;
    }

    public function getLatlongResults(): ?int
    {
        return $this->latlongResults;
    }

    public function setLatlongResults(int $latlongResults): self
    {
        $this->latlongResults = $latlongResults;

        return $this;
    }


}
