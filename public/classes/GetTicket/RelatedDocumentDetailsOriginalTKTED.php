<?php

class RelatedDocumentDetailsOriginalTKTED
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
     * @var IdentifierLocationExtended $IssueCity
     */
    protected $IssueCity = null;

    /**
     * @var IdentifierIndustry $IataNumber
     */
    protected $IataNumber = null;

    /**
     * @var TicketingDocument.Payment.ED[] $OriginalPayment
     */
    protected $OriginalPayment = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @param IdentifierTicketingDocument $Number
     * @param int $sequence
     */
    public function __construct($Number, $sequence)
    {
      $this->Number = $Number;
      $this->sequence = $sequence;
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
     * @return RelatedDocument.Details.Original.TKT.ED
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
     * @return RelatedDocument.Details.Original.TKT.ED
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
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
     * @return RelatedDocument.Details.Original.TKT.ED
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
     * @return RelatedDocument.Details.Original.TKT.ED
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
     * @return RelatedDocument.Details.Original.TKT.ED
     */
    public function setIssueTime($IssueTime)
    {
      $this->IssueTime = $IssueTime;
      return $this;
    }

    /**
     * @return IdentifierLocationExtended
     */
    public function getIssueCity()
    {
      return $this->IssueCity;
    }

    /**
     * @param IdentifierLocationExtended $IssueCity
     * @return RelatedDocument.Details.Original.TKT.ED
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
     * @return RelatedDocument.Details.Original.TKT.ED
     */
    public function setIataNumber($IataNumber)
    {
      $this->IataNumber = $IataNumber;
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
     * @return RelatedDocument.Details.Original.TKT.ED
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
     * @return RelatedDocument.Details.Original.TKT.ED
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

}
