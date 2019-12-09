<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSystemPopups
 *
 * @ORM\Table(name="tbl_system_popups")
 * @ORM\Entity
 */
class TblSystemPopups
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_system_popups_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSystemPopupsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_name", type="string", length=100, nullable=true)
     */
    private $popupName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_title", type="string", length=250, nullable=true)
     */
    private $popupTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_title_font", type="string", length=200, nullable=true)
     */
    private $popupTitleFont;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_title_size", type="string", length=45, nullable=true)
     */
    private $popupTitleSize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_title_color", type="string", length=45, nullable=true)
     */
    private $popupTitleColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_title_align", type="string", length=45, nullable=true)
     */
    private $popupTitleAlign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_content", type="text", length=65535, nullable=true)
     */
    private $popupContent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_script", type="text", length=65535, nullable=true)
     */
    private $popupScript;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_background_color", type="string", length=45, nullable=true)
     */
    private $popupBackgroundColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_border_size", type="string", length=45, nullable=true)
     */
    private $popupBorderSize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_border_color", type="string", length=45, nullable=true)
     */
    private $popupBorderColor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="popup_cta", type="boolean", nullable=true, options={"default"="1"})
     */
    private $popupCta = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_cta_title", type="string", length=200, nullable=true)
     */
    private $popupCtaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_cta_anchor", type="string", length=200, nullable=true)
     */
    private $popupCtaAnchor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_cta_font", type="string", length=45, nullable=true)
     */
    private $popupCtaFont;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_cta_font_color", type="string", length=45, nullable=true)
     */
    private $popupCtaFontColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_cta_font_size", type="string", length=45, nullable=true)
     */
    private $popupCtaFontSize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_cta_bg_color", type="string", length=45, nullable=true)
     */
    private $popupCtaBgColor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="popup_active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $popupActive = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="popup_duration", type="integer", nullable=true)
     */
    private $popupDuration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_class", type="string", length=100, nullable=true)
     */
    private $popupClass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_id", type="string", length=100, nullable=true)
     */
    private $popupId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="popup_css", type="string", length=200, nullable=true)
     */
    private $popupCss;

    public function getTblSystemPopupsId(): ?int
    {
        return $this->tblSystemPopupsId;
    }

    public function getPopupName(): ?string
    {
        return $this->popupName;
    }

    public function setPopupName(?string $popupName): self
    {
        $this->popupName = $popupName;

        return $this;
    }

    public function getPopupTitle(): ?string
    {
        return $this->popupTitle;
    }

    public function setPopupTitle(?string $popupTitle): self
    {
        $this->popupTitle = $popupTitle;

        return $this;
    }

    public function getPopupTitleFont(): ?string
    {
        return $this->popupTitleFont;
    }

    public function setPopupTitleFont(?string $popupTitleFont): self
    {
        $this->popupTitleFont = $popupTitleFont;

        return $this;
    }

    public function getPopupTitleSize(): ?string
    {
        return $this->popupTitleSize;
    }

    public function setPopupTitleSize(?string $popupTitleSize): self
    {
        $this->popupTitleSize = $popupTitleSize;

        return $this;
    }

    public function getPopupTitleColor(): ?string
    {
        return $this->popupTitleColor;
    }

    public function setPopupTitleColor(?string $popupTitleColor): self
    {
        $this->popupTitleColor = $popupTitleColor;

        return $this;
    }

    public function getPopupTitleAlign(): ?string
    {
        return $this->popupTitleAlign;
    }

    public function setPopupTitleAlign(?string $popupTitleAlign): self
    {
        $this->popupTitleAlign = $popupTitleAlign;

        return $this;
    }

    public function getPopupContent(): ?string
    {
        return $this->popupContent;
    }

    public function setPopupContent(?string $popupContent): self
    {
        $this->popupContent = $popupContent;

        return $this;
    }

    public function getPopupScript(): ?string
    {
        return $this->popupScript;
    }

    public function setPopupScript(?string $popupScript): self
    {
        $this->popupScript = $popupScript;

        return $this;
    }

    public function getPopupBackgroundColor(): ?string
    {
        return $this->popupBackgroundColor;
    }

    public function setPopupBackgroundColor(?string $popupBackgroundColor): self
    {
        $this->popupBackgroundColor = $popupBackgroundColor;

        return $this;
    }

    public function getPopupBorderSize(): ?string
    {
        return $this->popupBorderSize;
    }

    public function setPopupBorderSize(?string $popupBorderSize): self
    {
        $this->popupBorderSize = $popupBorderSize;

        return $this;
    }

    public function getPopupBorderColor(): ?string
    {
        return $this->popupBorderColor;
    }

    public function setPopupBorderColor(?string $popupBorderColor): self
    {
        $this->popupBorderColor = $popupBorderColor;

        return $this;
    }

    public function getPopupCta(): ?bool
    {
        return $this->popupCta;
    }

    public function setPopupCta(?bool $popupCta): self
    {
        $this->popupCta = $popupCta;

        return $this;
    }

    public function getPopupCtaTitle(): ?string
    {
        return $this->popupCtaTitle;
    }

    public function setPopupCtaTitle(?string $popupCtaTitle): self
    {
        $this->popupCtaTitle = $popupCtaTitle;

        return $this;
    }

    public function getPopupCtaAnchor(): ?string
    {
        return $this->popupCtaAnchor;
    }

    public function setPopupCtaAnchor(?string $popupCtaAnchor): self
    {
        $this->popupCtaAnchor = $popupCtaAnchor;

        return $this;
    }

    public function getPopupCtaFont(): ?string
    {
        return $this->popupCtaFont;
    }

    public function setPopupCtaFont(?string $popupCtaFont): self
    {
        $this->popupCtaFont = $popupCtaFont;

        return $this;
    }

    public function getPopupCtaFontColor(): ?string
    {
        return $this->popupCtaFontColor;
    }

    public function setPopupCtaFontColor(?string $popupCtaFontColor): self
    {
        $this->popupCtaFontColor = $popupCtaFontColor;

        return $this;
    }

    public function getPopupCtaFontSize(): ?string
    {
        return $this->popupCtaFontSize;
    }

    public function setPopupCtaFontSize(?string $popupCtaFontSize): self
    {
        $this->popupCtaFontSize = $popupCtaFontSize;

        return $this;
    }

    public function getPopupCtaBgColor(): ?string
    {
        return $this->popupCtaBgColor;
    }

    public function setPopupCtaBgColor(?string $popupCtaBgColor): self
    {
        $this->popupCtaBgColor = $popupCtaBgColor;

        return $this;
    }

    public function getPopupActive(): ?bool
    {
        return $this->popupActive;
    }

    public function setPopupActive(?bool $popupActive): self
    {
        $this->popupActive = $popupActive;

        return $this;
    }

    public function getPopupDuration(): ?int
    {
        return $this->popupDuration;
    }

    public function setPopupDuration(?int $popupDuration): self
    {
        $this->popupDuration = $popupDuration;

        return $this;
    }

    public function getPopupClass(): ?string
    {
        return $this->popupClass;
    }

    public function setPopupClass(?string $popupClass): self
    {
        $this->popupClass = $popupClass;

        return $this;
    }

    public function getPopupId(): ?string
    {
        return $this->popupId;
    }

    public function setPopupId(?string $popupId): self
    {
        $this->popupId = $popupId;

        return $this;
    }

    public function getPopupCss(): ?string
    {
        return $this->popupCss;
    }

    public function setPopupCss(?string $popupCss): self
    {
        $this->popupCss = $popupCss;

        return $this;
    }


}
