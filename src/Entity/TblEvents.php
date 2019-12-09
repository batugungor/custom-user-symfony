<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblEvents
 *
 * @ORM\Table(name="tbl_events")
 * @ORM\Entity
 */
class TblEvents
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_events_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblEventsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_websites_id", type="integer", nullable=false)
     */
    private $tblSystemWebsitesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_name", type="string", length=255, nullable=true)
     */
    private $eventName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_title", type="string", length=255, nullable=true)
     */
    private $eventTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_location", type="string", length=255, nullable=true)
     */
    private $eventLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_description", type="text", length=65535, nullable=true)
     */
    private $eventDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_image", type="string", length=255, nullable=true)
     */
    private $eventImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_link", type="string", length=255, nullable=true)
     */
    private $eventLink;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="event_date_from", type="datetime", nullable=true)
     */
    private $eventDateFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="event_date_end", type="datetime", nullable=true)
     */
    private $eventDateEnd;

    /**
     * @var bool
     *
     * @ORM\Column(name="event_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $eventActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url", type="string", length=255, nullable=true)
     */
    private $seoUrl;

    public function getTblEventsId(): ?int
    {
        return $this->tblEventsId;
    }

    public function getTblSystemWebsitesId(): ?int
    {
        return $this->tblSystemWebsitesId;
    }

    public function setTblSystemWebsitesId(int $tblSystemWebsitesId): self
    {
        $this->tblSystemWebsitesId = $tblSystemWebsitesId;

        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    public function setEventName(?string $eventName): self
    {
        $this->eventName = $eventName;

        return $this;
    }

    public function getEventTitle(): ?string
    {
        return $this->eventTitle;
    }

    public function setEventTitle(?string $eventTitle): self
    {
        $this->eventTitle = $eventTitle;

        return $this;
    }

    public function getEventLocation(): ?string
    {
        return $this->eventLocation;
    }

    public function setEventLocation(?string $eventLocation): self
    {
        $this->eventLocation = $eventLocation;

        return $this;
    }

    public function getEventDescription(): ?string
    {
        return $this->eventDescription;
    }

    public function setEventDescription(?string $eventDescription): self
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    public function getEventImage(): ?string
    {
        return $this->eventImage;
    }

    public function setEventImage(?string $eventImage): self
    {
        $this->eventImage = $eventImage;

        return $this;
    }

    public function getEventLink(): ?string
    {
        return $this->eventLink;
    }

    public function setEventLink(?string $eventLink): self
    {
        $this->eventLink = $eventLink;

        return $this;
    }

    public function getEventDateFrom(): ?\DateTimeInterface
    {
        return $this->eventDateFrom;
    }

    public function setEventDateFrom(?\DateTimeInterface $eventDateFrom): self
    {
        $this->eventDateFrom = $eventDateFrom;

        return $this;
    }

    public function getEventDateEnd(): ?\DateTimeInterface
    {
        return $this->eventDateEnd;
    }

    public function setEventDateEnd(?\DateTimeInterface $eventDateEnd): self
    {
        $this->eventDateEnd = $eventDateEnd;

        return $this;
    }

    public function getEventActive(): ?bool
    {
        return $this->eventActive;
    }

    public function setEventActive(bool $eventActive): self
    {
        $this->eventActive = $eventActive;

        return $this;
    }

    public function getSeoUrl(): ?string
    {
        return $this->seoUrl;
    }

    public function setSeoUrl(?string $seoUrl): self
    {
        $this->seoUrl = $seoUrl;

        return $this;
    }


}
