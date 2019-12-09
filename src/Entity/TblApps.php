<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblApps
 *
 * @ORM\Table(name="tbl_apps")
 * @ORM\Entity
 */
class TblApps
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_apps_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblAppsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_system_languages_id", type="integer", nullable=true)
     */
    private $tblSystemLanguagesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_name", type="string", length=255, nullable=true)
     */
    private $appName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_title", type="string", length=255, nullable=true)
     */
    private $appTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_description", type="text", length=65535, nullable=true)
     */
    private $appDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_appstore_url", type="string", length=255, nullable=true)
     */
    private $appAppstoreUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_appstore_id", type="string", length=145, nullable=true)
     */
    private $appAppstoreId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_playstore_url", type="string", length=255, nullable=true)
     */
    private $appPlaystoreUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_playstore_id", type="string", length=145, nullable=true)
     */
    private $appPlaystoreId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_version", type="string", length=45, nullable=true)
     */
    private $appVersion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_push_id", type="string", length=255, nullable=true)
     */
    private $appPushId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_push_secret", type="string", length=145, nullable=true)
     */
    private $appPushSecret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_logo", type="string", length=255, nullable=true)
     */
    private $appLogo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="app_logo_transparency", type="integer", nullable=true, options={"default"="100"})
     */
    private $appLogoTransparency = '100';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="app_logo_show", type="boolean", nullable=true, options={"default"="1"})
     */
    private $appLogoShow = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_background", type="string", length=255, nullable=true)
     */
    private $appBackground;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_background_video", type="string", length=255, nullable=true)
     */
    private $appBackgroundVideo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_background_image", type="string", length=255, nullable=true)
     */
    private $appBackgroundImage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="app_background_slider_interval", type="integer", nullable=true, options={"default"="2"})
     */
    private $appBackgroundSliderInterval = '2';

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_theme", type="string", length=45, nullable=true)
     */
    private $appTheme;

    /**
     * @var float|null
     *
     * @ORM\Column(name="app_timestamp", type="float", precision=10, scale=0, nullable=true)
     */
    private $appTimestamp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="app_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $appActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_apns_env", type="string", length=45, nullable=true)
     */
    private $appApnsEnv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_apns_p12", type="text", length=65535, nullable=true)
     */
    private $appApnsP12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_apns_p12_password", type="string", length=255, nullable=true)
     */
    private $appApnsP12Password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_gcm_key", type="string", length=255, nullable=true)
     */
    private $appGcmKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_google_c2dm_id", type="string", length=45, nullable=true)
     */
    private $appGoogleC2dmId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_onesignal_api", type="string", length=45, nullable=true)
     */
    private $appOnesignalApi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="app_underconstruction", type="boolean", nullable=true)
     */
    private $appUnderconstruction = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="app_settings_public", type="boolean", nullable=true, options={"default"="1"})
     */
    private $appSettingsPublic = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="app_settings_register", type="boolean", nullable=true, options={"default"="1"})
     */
    private $appSettingsRegister = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="app_settings_register_approval", type="boolean", nullable=true)
     */
    private $appSettingsRegisterApproval = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="app_settings_personal", type="boolean", nullable=true, options={"default"="1"})
     */
    private $appSettingsPersonal = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_key", type="string", length=10, nullable=true)
     */
    private $appKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_register_text", type="text", length=65535, nullable=true)
     */
    private $appRegisterText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_register_conditions", type="text", length=65535, nullable=true)
     */
    private $appRegisterConditions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_icon", type="string", length=255, nullable=true)
     */
    private $appIcon = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_openscreen", type="string", length=255, nullable=true)
     */
    private $appOpenscreen = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_icon_default", type="string", length=255, nullable=true)
     */
    private $appIconDefault;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_icon_style", type="string", length=45, nullable=true)
     */
    private $appIconStyle;

    public function getTblAppsId(): ?int
    {
        return $this->tblAppsId;
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

    public function getTblSystemLanguagesId(): ?int
    {
        return $this->tblSystemLanguagesId;
    }

    public function setTblSystemLanguagesId(?int $tblSystemLanguagesId): self
    {
        $this->tblSystemLanguagesId = $tblSystemLanguagesId;

        return $this;
    }

    public function getAppName(): ?string
    {
        return $this->appName;
    }

    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;

        return $this;
    }

    public function getAppTitle(): ?string
    {
        return $this->appTitle;
    }

    public function setAppTitle(?string $appTitle): self
    {
        $this->appTitle = $appTitle;

        return $this;
    }

    public function getAppDescription(): ?string
    {
        return $this->appDescription;
    }

    public function setAppDescription(?string $appDescription): self
    {
        $this->appDescription = $appDescription;

        return $this;
    }

    public function getAppAppstoreUrl(): ?string
    {
        return $this->appAppstoreUrl;
    }

    public function setAppAppstoreUrl(?string $appAppstoreUrl): self
    {
        $this->appAppstoreUrl = $appAppstoreUrl;

        return $this;
    }

    public function getAppAppstoreId(): ?string
    {
        return $this->appAppstoreId;
    }

    public function setAppAppstoreId(?string $appAppstoreId): self
    {
        $this->appAppstoreId = $appAppstoreId;

        return $this;
    }

    public function getAppPlaystoreUrl(): ?string
    {
        return $this->appPlaystoreUrl;
    }

    public function setAppPlaystoreUrl(?string $appPlaystoreUrl): self
    {
        $this->appPlaystoreUrl = $appPlaystoreUrl;

        return $this;
    }

    public function getAppPlaystoreId(): ?string
    {
        return $this->appPlaystoreId;
    }

    public function setAppPlaystoreId(?string $appPlaystoreId): self
    {
        $this->appPlaystoreId = $appPlaystoreId;

        return $this;
    }

    public function getAppVersion(): ?string
    {
        return $this->appVersion;
    }

    public function setAppVersion(?string $appVersion): self
    {
        $this->appVersion = $appVersion;

        return $this;
    }

    public function getAppPushId(): ?string
    {
        return $this->appPushId;
    }

    public function setAppPushId(?string $appPushId): self
    {
        $this->appPushId = $appPushId;

        return $this;
    }

    public function getAppPushSecret(): ?string
    {
        return $this->appPushSecret;
    }

    public function setAppPushSecret(?string $appPushSecret): self
    {
        $this->appPushSecret = $appPushSecret;

        return $this;
    }

    public function getAppLogo(): ?string
    {
        return $this->appLogo;
    }

    public function setAppLogo(?string $appLogo): self
    {
        $this->appLogo = $appLogo;

        return $this;
    }

    public function getAppLogoTransparency(): ?int
    {
        return $this->appLogoTransparency;
    }

    public function setAppLogoTransparency(?int $appLogoTransparency): self
    {
        $this->appLogoTransparency = $appLogoTransparency;

        return $this;
    }

    public function getAppLogoShow(): ?bool
    {
        return $this->appLogoShow;
    }

    public function setAppLogoShow(?bool $appLogoShow): self
    {
        $this->appLogoShow = $appLogoShow;

        return $this;
    }

    public function getAppBackground(): ?string
    {
        return $this->appBackground;
    }

    public function setAppBackground(?string $appBackground): self
    {
        $this->appBackground = $appBackground;

        return $this;
    }

    public function getAppBackgroundVideo(): ?string
    {
        return $this->appBackgroundVideo;
    }

    public function setAppBackgroundVideo(?string $appBackgroundVideo): self
    {
        $this->appBackgroundVideo = $appBackgroundVideo;

        return $this;
    }

    public function getAppBackgroundImage(): ?string
    {
        return $this->appBackgroundImage;
    }

    public function setAppBackgroundImage(?string $appBackgroundImage): self
    {
        $this->appBackgroundImage = $appBackgroundImage;

        return $this;
    }

    public function getAppBackgroundSliderInterval(): ?int
    {
        return $this->appBackgroundSliderInterval;
    }

    public function setAppBackgroundSliderInterval(?int $appBackgroundSliderInterval): self
    {
        $this->appBackgroundSliderInterval = $appBackgroundSliderInterval;

        return $this;
    }

    public function getAppTheme(): ?string
    {
        return $this->appTheme;
    }

    public function setAppTheme(?string $appTheme): self
    {
        $this->appTheme = $appTheme;

        return $this;
    }

    public function getAppTimestamp(): ?float
    {
        return $this->appTimestamp;
    }

    public function setAppTimestamp(?float $appTimestamp): self
    {
        $this->appTimestamp = $appTimestamp;

        return $this;
    }

    public function getAppActive(): ?bool
    {
        return $this->appActive;
    }

    public function setAppActive(?bool $appActive): self
    {
        $this->appActive = $appActive;

        return $this;
    }

    public function getAppApnsEnv(): ?string
    {
        return $this->appApnsEnv;
    }

    public function setAppApnsEnv(?string $appApnsEnv): self
    {
        $this->appApnsEnv = $appApnsEnv;

        return $this;
    }

    public function getAppApnsP12(): ?string
    {
        return $this->appApnsP12;
    }

    public function setAppApnsP12(?string $appApnsP12): self
    {
        $this->appApnsP12 = $appApnsP12;

        return $this;
    }

    public function getAppApnsP12Password(): ?string
    {
        return $this->appApnsP12Password;
    }

    public function setAppApnsP12Password(?string $appApnsP12Password): self
    {
        $this->appApnsP12Password = $appApnsP12Password;

        return $this;
    }

    public function getAppGcmKey(): ?string
    {
        return $this->appGcmKey;
    }

    public function setAppGcmKey(?string $appGcmKey): self
    {
        $this->appGcmKey = $appGcmKey;

        return $this;
    }

    public function getAppGoogleC2dmId(): ?string
    {
        return $this->appGoogleC2dmId;
    }

    public function setAppGoogleC2dmId(?string $appGoogleC2dmId): self
    {
        $this->appGoogleC2dmId = $appGoogleC2dmId;

        return $this;
    }

    public function getAppOnesignalApi(): ?string
    {
        return $this->appOnesignalApi;
    }

    public function setAppOnesignalApi(?string $appOnesignalApi): self
    {
        $this->appOnesignalApi = $appOnesignalApi;

        return $this;
    }

    public function getAppUnderconstruction(): ?bool
    {
        return $this->appUnderconstruction;
    }

    public function setAppUnderconstruction(?bool $appUnderconstruction): self
    {
        $this->appUnderconstruction = $appUnderconstruction;

        return $this;
    }

    public function getAppSettingsPublic(): ?bool
    {
        return $this->appSettingsPublic;
    }

    public function setAppSettingsPublic(?bool $appSettingsPublic): self
    {
        $this->appSettingsPublic = $appSettingsPublic;

        return $this;
    }

    public function getAppSettingsRegister(): ?bool
    {
        return $this->appSettingsRegister;
    }

    public function setAppSettingsRegister(?bool $appSettingsRegister): self
    {
        $this->appSettingsRegister = $appSettingsRegister;

        return $this;
    }

    public function getAppSettingsRegisterApproval(): ?bool
    {
        return $this->appSettingsRegisterApproval;
    }

    public function setAppSettingsRegisterApproval(?bool $appSettingsRegisterApproval): self
    {
        $this->appSettingsRegisterApproval = $appSettingsRegisterApproval;

        return $this;
    }

    public function getAppSettingsPersonal(): ?bool
    {
        return $this->appSettingsPersonal;
    }

    public function setAppSettingsPersonal(?bool $appSettingsPersonal): self
    {
        $this->appSettingsPersonal = $appSettingsPersonal;

        return $this;
    }

    public function getAppKey(): ?string
    {
        return $this->appKey;
    }

    public function setAppKey(?string $appKey): self
    {
        $this->appKey = $appKey;

        return $this;
    }

    public function getAppRegisterText(): ?string
    {
        return $this->appRegisterText;
    }

    public function setAppRegisterText(?string $appRegisterText): self
    {
        $this->appRegisterText = $appRegisterText;

        return $this;
    }

    public function getAppRegisterConditions(): ?string
    {
        return $this->appRegisterConditions;
    }

    public function setAppRegisterConditions(?string $appRegisterConditions): self
    {
        $this->appRegisterConditions = $appRegisterConditions;

        return $this;
    }

    public function getAppIcon(): ?string
    {
        return $this->appIcon;
    }

    public function setAppIcon(?string $appIcon): self
    {
        $this->appIcon = $appIcon;

        return $this;
    }

    public function getAppOpenscreen(): ?string
    {
        return $this->appOpenscreen;
    }

    public function setAppOpenscreen(?string $appOpenscreen): self
    {
        $this->appOpenscreen = $appOpenscreen;

        return $this;
    }

    public function getAppIconDefault(): ?string
    {
        return $this->appIconDefault;
    }

    public function setAppIconDefault(?string $appIconDefault): self
    {
        $this->appIconDefault = $appIconDefault;

        return $this;
    }

    public function getAppIconStyle(): ?string
    {
        return $this->appIconStyle;
    }

    public function setAppIconStyle(?string $appIconStyle): self
    {
        $this->appIconStyle = $appIconStyle;

        return $this;
    }


}
