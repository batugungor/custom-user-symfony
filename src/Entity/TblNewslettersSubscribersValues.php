<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewslettersSubscribersValues
 *
 * @ORM\Table(name="tbl_newsletters_subscribers_values")
 * @ORM\Entity
 */
class TblNewslettersSubscribersValues
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_subscribers_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblNewslettersSubscribersId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_newsletters_subscribers_fields_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblNewslettersSubscribersFieldsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_value", type="string", length=255, nullable=true)
     */
    private $fieldValue;

    public function getTblNewslettersSubscribersId(): ?int
    {
        return $this->tblNewslettersSubscribersId;
    }

    public function getTblNewslettersSubscribersFieldsId(): ?int
    {
        return $this->tblNewslettersSubscribersFieldsId;
    }

    public function getFieldValue(): ?string
    {
        return $this->fieldValue;
    }

    public function setFieldValue(?string $fieldValue): self
    {
        $this->fieldValue = $fieldValue;

        return $this;
    }


}
