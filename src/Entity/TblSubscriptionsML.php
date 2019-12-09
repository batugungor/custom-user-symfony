<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsML
 *
 * @ORM\Table(name="tbl_subscriptions_m_l")
 * @ORM\Entity
 */
class TblSubscriptionsML
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblSubscriptionsId;

    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_modules_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tblSubscriptionsModulesId;

    public function getTblSubscriptionsId(): ?int
    {
        return $this->tblSubscriptionsId;
    }

    public function getTblSubscriptionsModulesId(): ?int
    {
        return $this->tblSubscriptionsModulesId;
    }


}
