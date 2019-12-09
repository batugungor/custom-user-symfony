<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsMessages
 *
 * @ORM\Table(name="tbl_subscriptions_messages")
 * @ORM\Entity
 */
class TblSubscriptionsMessages
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_messages_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsMessagesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_name", type="string", length=200, nullable=true)
     */
    private $messageName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_title", type="string", length=250, nullable=true)
     */
    private $messageTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_message", type="text", length=65535, nullable=true)
     */
    private $messageMessage;

    /**
     * @var bool
     *
     * @ORM\Column(name="message_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $messageActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_link", type="string", length=255, nullable=true)
     */
    private $messageLink;

    public function getTblSubscriptionsMessagesId(): ?int
    {
        return $this->tblSubscriptionsMessagesId;
    }

    public function getMessageName(): ?string
    {
        return $this->messageName;
    }

    public function setMessageName(?string $messageName): self
    {
        $this->messageName = $messageName;

        return $this;
    }

    public function getMessageTitle(): ?string
    {
        return $this->messageTitle;
    }

    public function setMessageTitle(?string $messageTitle): self
    {
        $this->messageTitle = $messageTitle;

        return $this;
    }

    public function getMessageMessage(): ?string
    {
        return $this->messageMessage;
    }

    public function setMessageMessage(?string $messageMessage): self
    {
        $this->messageMessage = $messageMessage;

        return $this;
    }

    public function getMessageActive(): ?bool
    {
        return $this->messageActive;
    }

    public function setMessageActive(bool $messageActive): self
    {
        $this->messageActive = $messageActive;

        return $this;
    }

    public function getMessageLink(): ?string
    {
        return $this->messageLink;
    }

    public function setMessageLink(?string $messageLink): self
    {
        $this->messageLink = $messageLink;

        return $this;
    }


}
