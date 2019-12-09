<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesCustomersProfiles
 *
 * @ORM\Table(name="tbl_companies_customers_profiles")
 * @ORM\Entity
 */
class TblCompaniesCustomersProfiles
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_customers_profiles_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesCustomersProfilesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="upper_tbl_companies_customers_profiles_id", type="integer", nullable=true)
     */
    private $upperTblCompaniesCustomersProfilesId;

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

    public function getTblCompaniesCustomersProfilesId(): ?int
    {
        return $this->tblCompaniesCustomersProfilesId;
    }

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(?int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getUpperTblCompaniesCustomersProfilesId(): ?int
    {
        return $this->upperTblCompaniesCustomersProfilesId;
    }

    public function setUpperTblCompaniesCustomersProfilesId(?int $upperTblCompaniesCustomersProfilesId): self
    {
        $this->upperTblCompaniesCustomersProfilesId = $upperTblCompaniesCustomersProfilesId;

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


}
