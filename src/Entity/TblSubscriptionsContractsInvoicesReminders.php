<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubscriptionsContractsInvoicesReminders
 *
 * @ORM\Table(name="tbl_subscriptions_contracts_invoices_reminders")
 * @ORM\Entity
 */
class TblSubscriptionsContractsInvoicesReminders
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_subscriptions_contracts_invoices_reminders_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblSubscriptionsContractsInvoicesRemindersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_subscriptions_contracts_invoices_id", type="integer", nullable=true)
     */
    private $tblSubscriptionsContractsInvoicesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_title", type="string", length=100, nullable=true)
     */
    private $reminderTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_message", type="text", length=65535, nullable=true)
     */
    private $reminderMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_to", type="string", length=100, nullable=true)
     */
    private $reminderTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reminder_to_email", type="string", length=100, nullable=true)
     */
    private $reminderToEmail;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reminder_sent", type="boolean", nullable=true)
     */
    private $reminderSent = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reminder_sent_date", type="datetime", nullable=true)
     */
    private $reminderSentDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reminder_date", type="datetime", nullable=true)
     */
    private $reminderDate;

    public function getTblSubscriptionsContractsInvoicesRemindersId(): ?int
    {
        return $this->tblSubscriptionsContractsInvoicesRemindersId;
    }

    public function getTblSubscriptionsContractsInvoicesId(): ?int
    {
        return $this->tblSubscriptionsContractsInvoicesId;
    }

    public function setTblSubscriptionsContractsInvoicesId(?int $tblSubscriptionsContractsInvoicesId): self
    {
        $this->tblSubscriptionsContractsInvoicesId = $tblSubscriptionsContractsInvoicesId;

        return $this;
    }

    public function getReminderTitle(): ?string
    {
        return $this->reminderTitle;
    }

    public function setReminderTitle(?string $reminderTitle): self
    {
        $this->reminderTitle = $reminderTitle;

        return $this;
    }

    public function getReminderMessage(): ?string
    {
        return $this->reminderMessage;
    }

    public function setReminderMessage(?string $reminderMessage): self
    {
        $this->reminderMessage = $reminderMessage;

        return $this;
    }

    public function getReminderTo(): ?string
    {
        return $this->reminderTo;
    }

    public function setReminderTo(?string $reminderTo): self
    {
        $this->reminderTo = $reminderTo;

        return $this;
    }

    public function getReminderToEmail(): ?string
    {
        return $this->reminderToEmail;
    }

    public function setReminderToEmail(?string $reminderToEmail): self
    {
        $this->reminderToEmail = $reminderToEmail;

        return $this;
    }

    public function getReminderSent(): ?bool
    {
        return $this->reminderSent;
    }

    public function setReminderSent(?bool $reminderSent): self
    {
        $this->reminderSent = $reminderSent;

        return $this;
    }

    public function getReminderSentDate(): ?\DateTimeInterface
    {
        return $this->reminderSentDate;
    }

    public function setReminderSentDate(?\DateTimeInterface $reminderSentDate): self
    {
        $this->reminderSentDate = $reminderSentDate;

        return $this;
    }

    public function getReminderDate(): ?\DateTimeInterface
    {
        return $this->reminderDate;
    }

    public function setReminderDate(?\DateTimeInterface $reminderDate): self
    {
        $this->reminderDate = $reminderDate;

        return $this;
    }


}
