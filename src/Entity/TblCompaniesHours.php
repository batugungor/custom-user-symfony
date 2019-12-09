<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesHours
 *
 * @ORM\Table(name="tbl_companies_hours")
 * @ORM\Entity
 */
class TblCompaniesHours
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_hours_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesHoursId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=false)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hours_name", type="string", length=200, nullable=true)
     */
    private $hoursName;

    /**
     * @var int
     *
     * @ORM\Column(name="hours_day", type="integer", nullable=false)
     */
    private $hoursDay;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hours_open", type="time", nullable=true)
     */
    private $hoursOpen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hours_close", type="time", nullable=true)
     */
    private $hoursClose;

    /**
     * @var bool
     *
     * @ORM\Column(name="hours_closed", type="boolean", nullable=false, options={"default"="1"})
     */
    private $hoursClosed = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="hours_closed_text", type="string", length=200, nullable=true)
     */
    private $hoursClosedText;

    /**
     * @var bool
     *
     * @ORM\Column(name="hours_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $hoursActive = '1';

    public function getTblCompaniesHoursId(): ?int
    {
        return $this->tblCompaniesHoursId;
    }

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getHoursName(): ?string
    {
        return $this->hoursName;
    }

    public function setHoursName(?string $hoursName): self
    {
        $this->hoursName = $hoursName;

        return $this;
    }

    public function getHoursDay(): ?int
    {
        return $this->hoursDay;
    }

    public function setHoursDay(int $hoursDay): self
    {
        $this->hoursDay = $hoursDay;

        return $this;
    }

    public function getHoursOpen(): ?\DateTimeInterface
    {
        return $this->hoursOpen;
    }

    public function setHoursOpen(?\DateTimeInterface $hoursOpen): self
    {
        $this->hoursOpen = $hoursOpen;

        return $this;
    }

    public function getHoursClose(): ?\DateTimeInterface
    {
        return $this->hoursClose;
    }

    public function setHoursClose(?\DateTimeInterface $hoursClose): self
    {
        $this->hoursClose = $hoursClose;

        return $this;
    }

    public function getHoursClosed(): ?bool
    {
        return $this->hoursClosed;
    }

    public function setHoursClosed(bool $hoursClosed): self
    {
        $this->hoursClosed = $hoursClosed;

        return $this;
    }

    public function getHoursClosedText(): ?string
    {
        return $this->hoursClosedText;
    }

    public function setHoursClosedText(?string $hoursClosedText): self
    {
        $this->hoursClosedText = $hoursClosedText;

        return $this;
    }

    public function getHoursActive(): ?bool
    {
        return $this->hoursActive;
    }

    public function setHoursActive(bool $hoursActive): self
    {
        $this->hoursActive = $hoursActive;

        return $this;
    }


}
