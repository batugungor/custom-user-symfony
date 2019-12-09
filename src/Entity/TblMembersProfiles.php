<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMembersProfiles
 *
 * @ORM\Table(name="tbl_members_profiles")
 * @ORM\Entity
 */
class TblMembersProfiles
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_members_profiles_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblMembersProfilesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_cat_id", type="integer", nullable=true)
     */
    private $tblCompaniesCatId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_members_profiles_id", type="integer", nullable=true)
     */
    private $upperTblMembersProfilesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_name", type="string", length=200, nullable=true)
     */
    private $profileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_description", type="string", length=200, nullable=true)
     */
    private $profileDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_content", type="text", length=65535, nullable=true)
     */
    private $profileContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_image_url", type="string", length=200, nullable=true)
     */
    private $profileImageUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_youtube_url", type="string", length=200, nullable=true)
     */
    private $profileYoutubeUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_external_url", type="string", length=200, nullable=true)
     */
    private $profileExternalUrl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="profile_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $profileActive = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="profile_position", type="integer", nullable=true)
     */
    private $profilePosition;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="profile_show_insights", type="boolean", nullable=true, options={"default"="1"})
     */
    private $profileShowInsights = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="profile_show_percentage", type="boolean", nullable=true, options={"default"="1"})
     */
    private $profileShowPercentage = '1';

    public function getTblMembersProfilesId(): ?int
    {
        return $this->tblMembersProfilesId;
    }

    public function getTblCompaniesCatId(): ?int
    {
        return $this->tblCompaniesCatId;
    }

    public function setTblCompaniesCatId(?int $tblCompaniesCatId): self
    {
        $this->tblCompaniesCatId = $tblCompaniesCatId;

        return $this;
    }

    public function getUpperTblMembersProfilesId(): ?int
    {
        return $this->upperTblMembersProfilesId;
    }

    public function setUpperTblMembersProfilesId(?int $upperTblMembersProfilesId): self
    {
        $this->upperTblMembersProfilesId = $upperTblMembersProfilesId;

        return $this;
    }

    public function getProfileName(): ?string
    {
        return $this->profileName;
    }

    public function setProfileName(?string $profileName): self
    {
        $this->profileName = $profileName;

        return $this;
    }

    public function getProfileDescription(): ?string
    {
        return $this->profileDescription;
    }

    public function setProfileDescription(?string $profileDescription): self
    {
        $this->profileDescription = $profileDescription;

        return $this;
    }

    public function getProfileContent(): ?string
    {
        return $this->profileContent;
    }

    public function setProfileContent(?string $profileContent): self
    {
        $this->profileContent = $profileContent;

        return $this;
    }

    public function getProfileImageUrl(): ?string
    {
        return $this->profileImageUrl;
    }

    public function setProfileImageUrl(?string $profileImageUrl): self
    {
        $this->profileImageUrl = $profileImageUrl;

        return $this;
    }

    public function getProfileYoutubeUrl(): ?string
    {
        return $this->profileYoutubeUrl;
    }

    public function setProfileYoutubeUrl(?string $profileYoutubeUrl): self
    {
        $this->profileYoutubeUrl = $profileYoutubeUrl;

        return $this;
    }

    public function getProfileExternalUrl(): ?string
    {
        return $this->profileExternalUrl;
    }

    public function setProfileExternalUrl(?string $profileExternalUrl): self
    {
        $this->profileExternalUrl = $profileExternalUrl;

        return $this;
    }

    public function getProfileActive(): ?bool
    {
        return $this->profileActive;
    }

    public function setProfileActive(?bool $profileActive): self
    {
        $this->profileActive = $profileActive;

        return $this;
    }

    public function getProfilePosition(): ?int
    {
        return $this->profilePosition;
    }

    public function setProfilePosition(?int $profilePosition): self
    {
        $this->profilePosition = $profilePosition;

        return $this;
    }

    public function getProfileShowInsights(): ?bool
    {
        return $this->profileShowInsights;
    }

    public function setProfileShowInsights(?bool $profileShowInsights): self
    {
        $this->profileShowInsights = $profileShowInsights;

        return $this;
    }

    public function getProfileShowPercentage(): ?bool
    {
        return $this->profileShowPercentage;
    }

    public function setProfileShowPercentage(?bool $profileShowPercentage): self
    {
        $this->profileShowPercentage = $profileShowPercentage;

        return $this;
    }


}
