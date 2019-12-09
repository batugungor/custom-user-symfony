<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCompaniesServicesInvoices
 *
 * @ORM\Table(name="tbl_companies_services_invoices")
 * @ORM\Entity
 */
class TblCompaniesServicesInvoices
{
    /**
     * @var int
     *
     * @ORM\Column(name="tbl_companies_services_invoices_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tblCompaniesServicesInvoicesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_customers_id", type="integer", nullable=true)
     */
    private $tblCompaniesCustomersId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_services_contracts_id", type="integer", nullable=true)
     */
    private $tblCompaniesServicesContractsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_id", type="string", length=255, nullable=true)
     */
    private $invoiceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_name", type="string", length=255, nullable=true)
     */
    private $invoiceName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_email", type="string", length=255, nullable=true)
     */
    private $invoiceEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_iban", type="string", length=100, nullable=true)
     */
    private $invoiceIban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_iban_name", type="string", length=255, nullable=true)
     */
    private $invoiceIbanName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_address", type="string", length=255, nullable=true)
     */
    private $invoiceAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_postal", type="string", length=45, nullable=true)
     */
    private $invoicePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_city", type="string", length=255, nullable=true)
     */
    private $invoiceCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_country", type="string", length=255, nullable=true)
     */
    private $invoiceCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_paymethod", type="string", length=100, nullable=true)
     */
    private $invoicePaymethod;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="invoice_date", type="date", nullable=true)
     */
    private $invoiceDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="invoice_date_payment", type="date", nullable=true)
     */
    private $invoiceDatePayment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_price", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $invoicePrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_price_tax", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $invoicePriceTax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_price_total", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $invoicePriceTotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_reversal_fee", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $invoiceReversalFee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invoice_tax", type="integer", nullable=true)
     */
    private $invoiceTax;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_sent", type="boolean", nullable=true)
     */
    private $invoiceSent = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_sent_data", type="text", length=65535, nullable=true)
     */
    private $invoiceSentData;

    /**
     * @var bool
     *
     * @ORM\Column(name="invoice_payed", type="boolean", nullable=false)
     */
    private $invoicePayed = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="invoice_payed_date", type="datetime", nullable=true)
     */
    private $invoicePayedDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="invoice_cancelled", type="boolean", nullable=false)
     */
    private $invoiceCancelled = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_reversed", type="boolean", nullable=true)
     */
    private $invoiceReversed = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="invoice_reversed_date", type="date", nullable=true)
     */
    private $invoiceReversedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_reversed_code", type="string", length=100, nullable=true)
     */
    private $invoiceReversedCode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_bailiff", type="boolean", nullable=true)
     */
    private $invoiceBailiff = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_bailiff_sent", type="boolean", nullable=true)
     */
    private $invoiceBailiffSent = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="invoice_bailiff_sent_date", type="datetime", nullable=true)
     */
    private $invoiceBailiffSentDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_delayed", type="boolean", nullable=true)
     */
    private $invoiceDelayed = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="invoice_delayed_days", type="integer", nullable=true)
     */
    private $invoiceDelayedDays;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_check", type="boolean", nullable=true, options={"default"="1"})
     */
    private $invoiceCheck = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_error", type="boolean", nullable=true)
     */
    private $invoiceError = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_error_message", type="string", length=255, nullable=true)
     */
    private $invoiceErrorMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_id", type="string", length=100, nullable=true)
     */
    private $transactionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence_number", type="integer", nullable=true)
     */
    private $sequenceNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="response_id", type="integer", nullable=true)
     */
    private $responseId;

    /**
     * @var string
     *
     * @ORM\Column(name="response_status", type="string", length=250, nullable=false)
     */
    private $responseStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="response_status_nl", type="string", length=250, nullable=false)
     */
    private $responseStatusNl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="response_check", type="date", nullable=true)
     */
    private $responseCheck;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_transactionid", type="string", length=255, nullable=true)
     */
    private $responseTransactionid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_amount", type="string", length=255, nullable=true)
     */
    private $responseAmount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_currency", type="string", length=255, nullable=true)
     */
    private $responseCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_payed", type="string", length=255, nullable=true)
     */
    private $responsePayed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_custname", type="string", length=255, nullable=true)
     */
    private $responseCustname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_custaccount", type="string", length=255, nullable=true)
     */
    private $responseCustaccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_custcity", type="string", length=255, nullable=true)
     */
    private $responseCustcity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_payment_url", type="string", length=255, nullable=true)
     */
    private $responsePaymentUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_payment_hash", type="string", length=255, nullable=true)
     */
    private $responsePaymentHash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_total", type="text", length=65535, nullable=true)
     */
    private $responseTotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_postback", type="text", length=65535, nullable=true)
     */
    private $responsePostback;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_called", type="boolean", nullable=true)
     */
    private $invoiceCalled = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="invoice_called_date", type="datetime", nullable=true)
     */
    private $invoiceCalledDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_called_note", type="string", length=250, nullable=true)
     */
    private $invoiceCalledNote;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invoice_called_spoken", type="boolean", nullable=true)
     */
    private $invoiceCalledSpoken = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_invoice", type="text", length=65535, nullable=true)
     */
    private $invoiceInvoice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_email_response", type="text", length=65535, nullable=true)
     */
    private $invoiceEmailResponse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_email_reponse_id", type="text", length=65535, nullable=true)
     */
    private $invoiceEmailReponseId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="invoice_email_reponse_message", type="text", length=65535, nullable=true)
     */
    private $invoiceEmailReponseMessage;

    public function getTblCompaniesServicesInvoicesId(): ?int
    {
        return $this->tblCompaniesServicesInvoicesId;
    }

    public function getTblCompaniesCustomersId(): ?int
    {
        return $this->tblCompaniesCustomersId;
    }

    public function setTblCompaniesCustomersId(?int $tblCompaniesCustomersId): self
    {
        $this->tblCompaniesCustomersId = $tblCompaniesCustomersId;

        return $this;
    }

    public function getTblCompaniesServicesContractsId(): ?int
    {
        return $this->tblCompaniesServicesContractsId;
    }

    public function setTblCompaniesServicesContractsId(?int $tblCompaniesServicesContractsId): self
    {
        $this->tblCompaniesServicesContractsId = $tblCompaniesServicesContractsId;

        return $this;
    }

    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    public function setInvoiceId(?string $invoiceId): self
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    public function getInvoiceName(): ?string
    {
        return $this->invoiceName;
    }

    public function setInvoiceName(?string $invoiceName): self
    {
        $this->invoiceName = $invoiceName;

        return $this;
    }

    public function getInvoiceEmail(): ?string
    {
        return $this->invoiceEmail;
    }

    public function setInvoiceEmail(?string $invoiceEmail): self
    {
        $this->invoiceEmail = $invoiceEmail;

        return $this;
    }

    public function getInvoiceIban(): ?string
    {
        return $this->invoiceIban;
    }

    public function setInvoiceIban(?string $invoiceIban): self
    {
        $this->invoiceIban = $invoiceIban;

        return $this;
    }

    public function getInvoiceIbanName(): ?string
    {
        return $this->invoiceIbanName;
    }

    public function setInvoiceIbanName(?string $invoiceIbanName): self
    {
        $this->invoiceIbanName = $invoiceIbanName;

        return $this;
    }

    public function getInvoiceAddress(): ?string
    {
        return $this->invoiceAddress;
    }

    public function setInvoiceAddress(?string $invoiceAddress): self
    {
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }

    public function getInvoicePostal(): ?string
    {
        return $this->invoicePostal;
    }

    public function setInvoicePostal(?string $invoicePostal): self
    {
        $this->invoicePostal = $invoicePostal;

        return $this;
    }

    public function getInvoiceCity(): ?string
    {
        return $this->invoiceCity;
    }

    public function setInvoiceCity(?string $invoiceCity): self
    {
        $this->invoiceCity = $invoiceCity;

        return $this;
    }

    public function getInvoiceCountry(): ?string
    {
        return $this->invoiceCountry;
    }

    public function setInvoiceCountry(?string $invoiceCountry): self
    {
        $this->invoiceCountry = $invoiceCountry;

        return $this;
    }

    public function getInvoicePaymethod(): ?string
    {
        return $this->invoicePaymethod;
    }

    public function setInvoicePaymethod(?string $invoicePaymethod): self
    {
        $this->invoicePaymethod = $invoicePaymethod;

        return $this;
    }

    public function getInvoiceDate(): ?\DateTimeInterface
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(?\DateTimeInterface $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getInvoiceDatePayment(): ?\DateTimeInterface
    {
        return $this->invoiceDatePayment;
    }

    public function setInvoiceDatePayment(?\DateTimeInterface $invoiceDatePayment): self
    {
        $this->invoiceDatePayment = $invoiceDatePayment;

        return $this;
    }

    public function getInvoicePrice()
    {
        return $this->invoicePrice;
    }

    public function setInvoicePrice($invoicePrice): self
    {
        $this->invoicePrice = $invoicePrice;

        return $this;
    }

    public function getInvoicePriceTax()
    {
        return $this->invoicePriceTax;
    }

    public function setInvoicePriceTax($invoicePriceTax): self
    {
        $this->invoicePriceTax = $invoicePriceTax;

        return $this;
    }

    public function getInvoicePriceTotal()
    {
        return $this->invoicePriceTotal;
    }

    public function setInvoicePriceTotal($invoicePriceTotal): self
    {
        $this->invoicePriceTotal = $invoicePriceTotal;

        return $this;
    }

    public function getInvoiceReversalFee()
    {
        return $this->invoiceReversalFee;
    }

    public function setInvoiceReversalFee($invoiceReversalFee): self
    {
        $this->invoiceReversalFee = $invoiceReversalFee;

        return $this;
    }

    public function getInvoiceTax(): ?int
    {
        return $this->invoiceTax;
    }

    public function setInvoiceTax(?int $invoiceTax): self
    {
        $this->invoiceTax = $invoiceTax;

        return $this;
    }

    public function getInvoiceSent(): ?bool
    {
        return $this->invoiceSent;
    }

    public function setInvoiceSent(?bool $invoiceSent): self
    {
        $this->invoiceSent = $invoiceSent;

        return $this;
    }

    public function getInvoiceSentData(): ?string
    {
        return $this->invoiceSentData;
    }

    public function setInvoiceSentData(?string $invoiceSentData): self
    {
        $this->invoiceSentData = $invoiceSentData;

        return $this;
    }

    public function getInvoicePayed(): ?bool
    {
        return $this->invoicePayed;
    }

    public function setInvoicePayed(bool $invoicePayed): self
    {
        $this->invoicePayed = $invoicePayed;

        return $this;
    }

    public function getInvoicePayedDate(): ?\DateTimeInterface
    {
        return $this->invoicePayedDate;
    }

    public function setInvoicePayedDate(?\DateTimeInterface $invoicePayedDate): self
    {
        $this->invoicePayedDate = $invoicePayedDate;

        return $this;
    }

    public function getInvoiceCancelled(): ?bool
    {
        return $this->invoiceCancelled;
    }

    public function setInvoiceCancelled(bool $invoiceCancelled): self
    {
        $this->invoiceCancelled = $invoiceCancelled;

        return $this;
    }

    public function getInvoiceReversed(): ?bool
    {
        return $this->invoiceReversed;
    }

    public function setInvoiceReversed(?bool $invoiceReversed): self
    {
        $this->invoiceReversed = $invoiceReversed;

        return $this;
    }

    public function getInvoiceReversedDate(): ?\DateTimeInterface
    {
        return $this->invoiceReversedDate;
    }

    public function setInvoiceReversedDate(?\DateTimeInterface $invoiceReversedDate): self
    {
        $this->invoiceReversedDate = $invoiceReversedDate;

        return $this;
    }

    public function getInvoiceReversedCode(): ?string
    {
        return $this->invoiceReversedCode;
    }

    public function setInvoiceReversedCode(?string $invoiceReversedCode): self
    {
        $this->invoiceReversedCode = $invoiceReversedCode;

        return $this;
    }

    public function getInvoiceBailiff(): ?bool
    {
        return $this->invoiceBailiff;
    }

    public function setInvoiceBailiff(?bool $invoiceBailiff): self
    {
        $this->invoiceBailiff = $invoiceBailiff;

        return $this;
    }

    public function getInvoiceBailiffSent(): ?bool
    {
        return $this->invoiceBailiffSent;
    }

    public function setInvoiceBailiffSent(?bool $invoiceBailiffSent): self
    {
        $this->invoiceBailiffSent = $invoiceBailiffSent;

        return $this;
    }

    public function getInvoiceBailiffSentDate(): ?\DateTimeInterface
    {
        return $this->invoiceBailiffSentDate;
    }

    public function setInvoiceBailiffSentDate(?\DateTimeInterface $invoiceBailiffSentDate): self
    {
        $this->invoiceBailiffSentDate = $invoiceBailiffSentDate;

        return $this;
    }

    public function getInvoiceDelayed(): ?bool
    {
        return $this->invoiceDelayed;
    }

    public function setInvoiceDelayed(?bool $invoiceDelayed): self
    {
        $this->invoiceDelayed = $invoiceDelayed;

        return $this;
    }

    public function getInvoiceDelayedDays(): ?int
    {
        return $this->invoiceDelayedDays;
    }

    public function setInvoiceDelayedDays(?int $invoiceDelayedDays): self
    {
        $this->invoiceDelayedDays = $invoiceDelayedDays;

        return $this;
    }

    public function getInvoiceCheck(): ?bool
    {
        return $this->invoiceCheck;
    }

    public function setInvoiceCheck(?bool $invoiceCheck): self
    {
        $this->invoiceCheck = $invoiceCheck;

        return $this;
    }

    public function getInvoiceError(): ?bool
    {
        return $this->invoiceError;
    }

    public function setInvoiceError(?bool $invoiceError): self
    {
        $this->invoiceError = $invoiceError;

        return $this;
    }

    public function getInvoiceErrorMessage(): ?string
    {
        return $this->invoiceErrorMessage;
    }

    public function setInvoiceErrorMessage(?string $invoiceErrorMessage): self
    {
        $this->invoiceErrorMessage = $invoiceErrorMessage;

        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(?int $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getResponseId(): ?int
    {
        return $this->responseId;
    }

    public function setResponseId(?int $responseId): self
    {
        $this->responseId = $responseId;

        return $this;
    }

    public function getResponseStatus(): ?string
    {
        return $this->responseStatus;
    }

    public function setResponseStatus(string $responseStatus): self
    {
        $this->responseStatus = $responseStatus;

        return $this;
    }

    public function getResponseStatusNl(): ?string
    {
        return $this->responseStatusNl;
    }

    public function setResponseStatusNl(string $responseStatusNl): self
    {
        $this->responseStatusNl = $responseStatusNl;

        return $this;
    }

    public function getResponseCheck(): ?\DateTimeInterface
    {
        return $this->responseCheck;
    }

    public function setResponseCheck(?\DateTimeInterface $responseCheck): self
    {
        $this->responseCheck = $responseCheck;

        return $this;
    }

    public function getResponseTransactionid(): ?string
    {
        return $this->responseTransactionid;
    }

    public function setResponseTransactionid(?string $responseTransactionid): self
    {
        $this->responseTransactionid = $responseTransactionid;

        return $this;
    }

    public function getResponseAmount(): ?string
    {
        return $this->responseAmount;
    }

    public function setResponseAmount(?string $responseAmount): self
    {
        $this->responseAmount = $responseAmount;

        return $this;
    }

    public function getResponseCurrency(): ?string
    {
        return $this->responseCurrency;
    }

    public function setResponseCurrency(?string $responseCurrency): self
    {
        $this->responseCurrency = $responseCurrency;

        return $this;
    }

    public function getResponsePayed(): ?string
    {
        return $this->responsePayed;
    }

    public function setResponsePayed(?string $responsePayed): self
    {
        $this->responsePayed = $responsePayed;

        return $this;
    }

    public function getResponseCustname(): ?string
    {
        return $this->responseCustname;
    }

    public function setResponseCustname(?string $responseCustname): self
    {
        $this->responseCustname = $responseCustname;

        return $this;
    }

    public function getResponseCustaccount(): ?string
    {
        return $this->responseCustaccount;
    }

    public function setResponseCustaccount(?string $responseCustaccount): self
    {
        $this->responseCustaccount = $responseCustaccount;

        return $this;
    }

    public function getResponseCustcity(): ?string
    {
        return $this->responseCustcity;
    }

    public function setResponseCustcity(?string $responseCustcity): self
    {
        $this->responseCustcity = $responseCustcity;

        return $this;
    }

    public function getResponsePaymentUrl(): ?string
    {
        return $this->responsePaymentUrl;
    }

    public function setResponsePaymentUrl(?string $responsePaymentUrl): self
    {
        $this->responsePaymentUrl = $responsePaymentUrl;

        return $this;
    }

    public function getResponsePaymentHash(): ?string
    {
        return $this->responsePaymentHash;
    }

    public function setResponsePaymentHash(?string $responsePaymentHash): self
    {
        $this->responsePaymentHash = $responsePaymentHash;

        return $this;
    }

    public function getResponseTotal(): ?string
    {
        return $this->responseTotal;
    }

    public function setResponseTotal(?string $responseTotal): self
    {
        $this->responseTotal = $responseTotal;

        return $this;
    }

    public function getResponsePostback(): ?string
    {
        return $this->responsePostback;
    }

    public function setResponsePostback(?string $responsePostback): self
    {
        $this->responsePostback = $responsePostback;

        return $this;
    }

    public function getInvoiceCalled(): ?bool
    {
        return $this->invoiceCalled;
    }

    public function setInvoiceCalled(?bool $invoiceCalled): self
    {
        $this->invoiceCalled = $invoiceCalled;

        return $this;
    }

    public function getInvoiceCalledDate(): ?\DateTimeInterface
    {
        return $this->invoiceCalledDate;
    }

    public function setInvoiceCalledDate(?\DateTimeInterface $invoiceCalledDate): self
    {
        $this->invoiceCalledDate = $invoiceCalledDate;

        return $this;
    }

    public function getInvoiceCalledNote(): ?string
    {
        return $this->invoiceCalledNote;
    }

    public function setInvoiceCalledNote(?string $invoiceCalledNote): self
    {
        $this->invoiceCalledNote = $invoiceCalledNote;

        return $this;
    }

    public function getInvoiceCalledSpoken(): ?bool
    {
        return $this->invoiceCalledSpoken;
    }

    public function setInvoiceCalledSpoken(?bool $invoiceCalledSpoken): self
    {
        $this->invoiceCalledSpoken = $invoiceCalledSpoken;

        return $this;
    }

    public function getInvoiceInvoice(): ?string
    {
        return $this->invoiceInvoice;
    }

    public function setInvoiceInvoice(?string $invoiceInvoice): self
    {
        $this->invoiceInvoice = $invoiceInvoice;

        return $this;
    }

    public function getInvoiceEmailResponse(): ?string
    {
        return $this->invoiceEmailResponse;
    }

    public function setInvoiceEmailResponse(?string $invoiceEmailResponse): self
    {
        $this->invoiceEmailResponse = $invoiceEmailResponse;

        return $this;
    }

    public function getInvoiceEmailReponseId(): ?string
    {
        return $this->invoiceEmailReponseId;
    }

    public function setInvoiceEmailReponseId(?string $invoiceEmailReponseId): self
    {
        $this->invoiceEmailReponseId = $invoiceEmailReponseId;

        return $this;
    }

    public function getInvoiceEmailReponseMessage(): ?string
    {
        return $this->invoiceEmailReponseMessage;
    }

    public function setInvoiceEmailReponseMessage(?string $invoiceEmailReponseMessage): self
    {
        $this->invoiceEmailReponseMessage = $invoiceEmailReponseMessage;

        return $this;
    }


}
