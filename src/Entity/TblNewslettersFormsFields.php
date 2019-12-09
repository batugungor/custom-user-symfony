<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewslettersFormsFields
 *
 * @ORM\Table(name="tbl_newsletters_forms_fields")
 * @ORM\Entity
 */
class TblNewslettersFormsFields
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_forms_fields_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblNewslettersFormsFieldsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_forms_id", type="integer", nullable=false)
     */
    private $tblNewslettersFormsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_newsletters_subscribers_fields_id", type="integer", nullable=true)
     */
    private $tblNewslettersSubscribersFieldsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_name", type="string", length=255, nullable=true)
     */
    private $fieldName;

    /**
     * @var bool
     *
     * @ORM\Column(name="field_name_bold", type="boolean", nullable=false)
     */
    private $fieldNameBold = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="field_name_show", type="boolean", nullable=false, options={"default"="1"})
     */
    private $fieldNameShow = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_description", type="text", length=65535, nullable=true)
     */
    private $fieldDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_options", type="string", length=2000, nullable=true)
     */
    private $fieldOptions;

    /**
     * @var int|null
     *
     * @ORM\Column(name="field_width", type="integer", nullable=true)
     */
    private $fieldWidth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="field_height", type="integer", nullable=true)
     */
    private $fieldHeight;

    /**
     * @var bool
     *
     * @ORM\Column(name="field_line_above", type="boolean", nullable=false)
     */
    private $fieldLineAbove = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="field_line_below", type="boolean", nullable=false)
     */
    private $fieldLineBelow = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="field_order", type="integer", nullable=false)
     */
    private $fieldOrder = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="field_column", type="integer", nullable=false, options={"default"="1"})
     */
    private $fieldColumn = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="field_required", type="boolean", nullable=false)
     */
    private $fieldRequired = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="field_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $fieldActive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="field_description_bold", type="boolean", nullable=false)
     */
    private $fieldDescriptionBold = '0';

    public function getTblNewslettersFormsFieldsId(): ?int
    {
        return $this->tblNewslettersFormsFieldsId;
    }

    public function getTblNewslettersFormsId(): ?int
    {
        return $this->tblNewslettersFormsId;
    }

    public function setTblNewslettersFormsId(int $tblNewslettersFormsId): self
    {
        $this->tblNewslettersFormsId = $tblNewslettersFormsId;

        return $this;
    }

    public function getTblNewslettersSubscribersFieldsId(): ?int
    {
        return $this->tblNewslettersSubscribersFieldsId;
    }

    public function setTblNewslettersSubscribersFieldsId(?int $tblNewslettersSubscribersFieldsId): self
    {
        $this->tblNewslettersSubscribersFieldsId = $tblNewslettersSubscribersFieldsId;

        return $this;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getFieldNameBold(): ?bool
    {
        return $this->fieldNameBold;
    }

    public function setFieldNameBold(bool $fieldNameBold): self
    {
        $this->fieldNameBold = $fieldNameBold;

        return $this;
    }

    public function getFieldNameShow(): ?bool
    {
        return $this->fieldNameShow;
    }

    public function setFieldNameShow(bool $fieldNameShow): self
    {
        $this->fieldNameShow = $fieldNameShow;

        return $this;
    }

    public function getFieldDescription(): ?string
    {
        return $this->fieldDescription;
    }

    public function setFieldDescription(?string $fieldDescription): self
    {
        $this->fieldDescription = $fieldDescription;

        return $this;
    }

    public function getFieldOptions(): ?string
    {
        return $this->fieldOptions;
    }

    public function setFieldOptions(?string $fieldOptions): self
    {
        $this->fieldOptions = $fieldOptions;

        return $this;
    }

    public function getFieldWidth(): ?int
    {
        return $this->fieldWidth;
    }

    public function setFieldWidth(?int $fieldWidth): self
    {
        $this->fieldWidth = $fieldWidth;

        return $this;
    }

    public function getFieldHeight(): ?int
    {
        return $this->fieldHeight;
    }

    public function setFieldHeight(?int $fieldHeight): self
    {
        $this->fieldHeight = $fieldHeight;

        return $this;
    }

    public function getFieldLineAbove(): ?bool
    {
        return $this->fieldLineAbove;
    }

    public function setFieldLineAbove(bool $fieldLineAbove): self
    {
        $this->fieldLineAbove = $fieldLineAbove;

        return $this;
    }

    public function getFieldLineBelow(): ?bool
    {
        return $this->fieldLineBelow;
    }

    public function setFieldLineBelow(bool $fieldLineBelow): self
    {
        $this->fieldLineBelow = $fieldLineBelow;

        return $this;
    }

    public function getFieldOrder(): ?int
    {
        return $this->fieldOrder;
    }

    public function setFieldOrder(int $fieldOrder): self
    {
        $this->fieldOrder = $fieldOrder;

        return $this;
    }

    public function getFieldColumn(): ?int
    {
        return $this->fieldColumn;
    }

    public function setFieldColumn(int $fieldColumn): self
    {
        $this->fieldColumn = $fieldColumn;

        return $this;
    }

    public function getFieldRequired(): ?bool
    {
        return $this->fieldRequired;
    }

    public function setFieldRequired(bool $fieldRequired): self
    {
        $this->fieldRequired = $fieldRequired;

        return $this;
    }

    public function getFieldActive(): ?bool
    {
        return $this->fieldActive;
    }

    public function setFieldActive(bool $fieldActive): self
    {
        $this->fieldActive = $fieldActive;

        return $this;
    }

    public function getFieldDescriptionBold(): ?bool
    {
        return $this->fieldDescriptionBold;
    }

    public function setFieldDescriptionBold(bool $fieldDescriptionBold): self
    {
        $this->fieldDescriptionBold = $fieldDescriptionBold;

        return $this;
    }


}
