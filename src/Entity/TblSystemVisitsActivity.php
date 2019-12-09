<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemVisitsActivity
 *
 * @ORM\Table(name="tbl_system_visits_activity")
 * @ORM\Entity
 */
class TblSystemVisitsActivity
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_visits_activity_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemVisitsActivityId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="activity_session", type="integer", nullable=true)
     */
    private $activitySession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_ip", type="string", length=100, nullable=true)
     */
    private $activityIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_browser", type="string", length=255, nullable=true)
     */
    private $activityBrowser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activity_date", type="date", nullable=true)
     */
    private $activityDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activity_time", type="time", nullable=true)
     */
    private $activityTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_domain", type="string", length=255, nullable=true)
     */
    private $activityDomain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_file", type="string", length=255, nullable=true)
     */
    private $activityFile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity_query", type="string", length=255, nullable=true)
     */
    private $activityQuery;

    public function getTblSystemVisitsActivityId(): ?int
    {
        return $this->tblSystemVisitsActivityId;
    }

    public function getActivitySession(): ?int
    {
        return $this->activitySession;
    }

    public function setActivitySession(?int $activitySession): self
    {
        $this->activitySession = $activitySession;

        return $this;
    }

    public function getActivityIp(): ?string
    {
        return $this->activityIp;
    }

    public function setActivityIp(?string $activityIp): self
    {
        $this->activityIp = $activityIp;

        return $this;
    }

    public function getActivityBrowser(): ?string
    {
        return $this->activityBrowser;
    }

    public function setActivityBrowser(?string $activityBrowser): self
    {
        $this->activityBrowser = $activityBrowser;

        return $this;
    }

    public function getActivityDate(): ?\DateTimeInterface
    {
        return $this->activityDate;
    }

    public function setActivityDate(?\DateTimeInterface $activityDate): self
    {
        $this->activityDate = $activityDate;

        return $this;
    }

    public function getActivityTime(): ?\DateTimeInterface
    {
        return $this->activityTime;
    }

    public function setActivityTime(?\DateTimeInterface $activityTime): self
    {
        $this->activityTime = $activityTime;

        return $this;
    }

    public function getActivityDomain(): ?string
    {
        return $this->activityDomain;
    }

    public function setActivityDomain(?string $activityDomain): self
    {
        $this->activityDomain = $activityDomain;

        return $this;
    }

    public function getActivityFile(): ?string
    {
        return $this->activityFile;
    }

    public function setActivityFile(?string $activityFile): self
    {
        $this->activityFile = $activityFile;

        return $this;
    }

    public function getActivityQuery(): ?string
    {
        return $this->activityQuery;
    }

    public function setActivityQuery(?string $activityQuery): self
    {
        $this->activityQuery = $activityQuery;

        return $this;
    }


}
