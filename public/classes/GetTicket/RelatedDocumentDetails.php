<?php

class RelatedDocumentDetails
{

    /**
     * @var IdentifierTicketingDocument $Number
     */
    protected $Number = null;

    /**
     * @var StringFormOfPayment $Payment
     */
    protected $Payment = null;

    /**
     * @var NumberCheckDigit $CheckDigit
     */
    protected $CheckDigit = null;

    /**
     * @var StringServiceCoupon $Coupon
     */
    protected $Coupon = null;

    /**
     * @var date $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var time $IssueTime
     */
    protected $IssueTime = null;

    /**
     * @var IdentifierLocation $IssueCity
     */
    protected $IssueCity = null;

    /**
     * @var IdentifierIndustry $IataNumber
     */
    protected $IataNumber = null;

    /**
     * @var AmountsRelatedDocument $Amounts
     */
    protected $Amounts = null;

    /**
     * @var StringTicketingRemark $Remark
     */
    protected $Remark = null;

    /**
     * @var IdentifierTransaction $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var DynamicCurrencyConversion $DynamicCurrencyConversion
     */
    protected $DynamicCurrencyConversion = null;

    /**
     * @var TicketingDocument.Payment.ED[] $OriginalPayment
     */
    protected $OriginalPayment = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var boolean $notInVcr
     */
    protected $notInVcr = null;

    /**
     * @var boolean $paymentConfirmation
     */
    protected $paymentConfirmation = null;

    /**
     * @param IdentifierTicketingDocument $Number
     * @param int $sequence
     * @param boolean $notInVcr
     * @param boolean $paymentConfirmation
     */
    public function __construct($Number, $sequence, $notInVcr, $paymentConfirmation)
    {
      $this->Number = $Number;
      $this->sequence = $sequence;
      $this->notInVcr = $notInVcr;
      $this->paymentConfirmation = $paymentConfirmation;
    }

    /**
     * @return IdentifierTicketingDocument
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param IdentifierTicketingDocument $Number
     * @return RelatedDocument.Details
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return StringFormOfPayment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param StringFormOfPayment $Payment
     * @return RelatedDocument.Details
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return NumberCheckDigit
     */
    public function getCheckDigit()
    {
      return $this->CheckDigit;
    }

    /**
     * @param NumberCheckDigit $CheckDigit
     * @return RelatedDocument.Details
     */
    public function setCheckDigit($CheckDigit)
    {
      $this->CheckDigit = $CheckDigit;
      return $this;
    }

    /**
     * @return StringServiceCoupon
     */
    public function getCoupon()
    {
      return $this->Coupon;
    }

    /**
     * @param StringServiceCoupon $Coupon
     * @return RelatedDocument.Details
     */
    public function setCoupon($Coupon)
    {
      $this->Coupon = $Coupon;
      return $this;
    }

    /**
     * @return date
     */
    public function getIssueDate()
    {
      return $this->IssueDate;
    }

    /**
     * @param date $IssueDate
     * @return RelatedDocument.Details
     */
    public function setIssueDate($IssueDate)
    {
      $this->IssueDate = $IssueDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getIssueTime()
    {
      return $this->IssueTime;
    }

    /**
     * @param time $IssueTime
     * @return RelatedDocument.Details
     */
    public function setIssueTime($IssueTime)
    {
      $this->IssueTime = $IssueTime;
      return $this;
    }

    /**
     * @return IdentifierLocation
     */
    public function getIssueCity()
    {
      return $this->IssueCity;
    }

    /**
     * @param IdentifierLocation $IssueCity
     * @return RelatedDocument.Details
     */
    public function setIssueCity($IssueCity)
    {
      $this->IssueCity = $IssueCity;
      return $this;
    }

    /**
     * @return IdentifierIndustry
     */
    public function getIataNumber()
    {
      return $this->IataNumber;
    }

    /**
     * @param IdentifierIndustry $IataNumber
     * @return RelatedDocument.Details
     */
    public function setIataNumber($IataNumber)
    {
      $this->IataNumber = $IataNumber;
      return $this;
    }

    /**
     * @return AmountsRelatedDocument
     */
    public function getAmounts()
    {
      return $this->Amounts;
    }

    /**
     * @param AmountsRelatedDocument $Amounts
     * @return RelatedDocument.Details
     */
    public function setAmounts($Amounts)
    {
      $this->Amounts = $Amounts;
      return $this;
    }

    /**
     * @return StringTicketingRemark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param StringTicketingRemark $Remark
     * @return RelatedDocument.Details
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return IdentifierTransaction
     */
    public function getTransactionId()
    {
      return $this->TransactionId;
    }

    /**
     * @param IdentifierTransaction $TransactionId
     * @return RelatedDocument.Details
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

    /**
     * @return DynamicCurrencyConversion
     */
    public function getDynamicCurrencyConversion()
    {
      return $this->DynamicCurrencyConversion;
    }

    /**
     * @param DynamicCurrencyConversion $DynamicCurrencyConversion
     * @return RelatedDocument.Details
     */
    public function setDynamicCurrencyConversion($DynamicCurrencyConversion)
    {
      $this->DynamicCurrencyConversion = $DynamicCurrencyConversion;
      return $this;
    }

    /**
     * @return TicketingDocument.Payment.ED[]
     */
    public function getOriginalPayment()
    {
      return $this->OriginalPayment;
    }

    /**
     * @param TicketingDocument.Payment.ED[] $OriginalPayment
     * @return RelatedDocument.Details
     */
    public function setOriginalPayment(array $OriginalPayment = null)
    {
      $this->OriginalPayment = $OriginalPayment;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param int $sequence
     * @return RelatedDocument.Details
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotInVcr()
    {
      return $this->notInVcr;
    }

    /**
     * @param boolean $notInVcr
     * @return RelatedDocument.Details
     */
    public function setNotInVcr($notInVcr)
    {
      $this->notInVcr = $notInVcr;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentConfirmation()
    {
      return $this->paymentConfirmation;
    }

    /**
     * @param boolean $paymentConfirmation
     * @return RelatedDocument.Details
     */
    public function setPaymentConfirmation($paymentConfirmation)
    {
      $this->paymentConfirmation = $paymentConfirmation;
      return $this;
    }

}
