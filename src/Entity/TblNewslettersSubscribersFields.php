<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewslettersSubscribersFields
 *
 * @ORM\Table(name="tbl_newsletters_subscribers_fields")
 * @ORM\Entity
 */
class TblNewslettersSubscribersFields
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_subscribers_fields_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblNewslettersSubscribersFieldsId;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=255, nullable=false)
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="field_type", type="string", length=100, nullable=false)
     */
    private $fieldType;

    /**
     * @var int
     *
     * @ORM\Column(name="field_order", type="integer", nullable=false)
     */
    private $fieldOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="field_list", type="boolean", nullable=false)
     */
    private $fieldList = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="field_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $fieldActive = '1';

    public function getTblNewslettersSubscribersFieldsId(): ?int
    {
        return $this->tblNewslettersSubscribersFieldsId;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getFieldType(): ?string
    {
        return $this->fieldType;
    }

    public function setFieldType(string $fieldType): self
    {
        $this->fieldType = $fieldType;

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

    public function getFieldList(): ?bool
    {
        return $this->fieldList;
    }

    public function setFieldList(bool $fieldList): self
    {
        $this->fieldList = $fieldList;

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


}
