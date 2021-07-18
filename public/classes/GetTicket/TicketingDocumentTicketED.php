<?php

class TicketingDocumentTicketED
{

    /**
     * @var TicketingDocumentDetailsTicketED $Details
     */
    protected $Details = null;

    /**
     * @var TicketingDocumentCustomerED $Customer
     */
    protected $Customer = null;

    /**
     * @var TicketingDocumentAffinityED $Affinity
     */
    protected $Affinity = null;

    /**
     * @var TicketingDocument.ServiceCoupon.Ticket.ED[] $ServiceCoupon
     */
    protected $ServiceCoupon = null;

    /**
     * @var TicketingDocumentRelatedTicketED $RelatedDocument
     */
    protected $RelatedDocument = null;

    /**
     * @var TicketingDocumentAmountsTicketED $Amounts
     */
    protected $Amounts = null;

    /**
     * @var TicketingDocumentTaxesTicketED $Taxes
     */
    protected $Taxes = null;

    /**
     * @var TicketingDocument.Payment.ED[] $Payment
     */
    protected $Payment = null;

    /**
     * @var TicketingDocumentRemarkED $Remark
     */
    protected $Remark = null;

    /**
     * @var FareCalculation $FareCalculation
     */
    protected $FareCalculation = null;

    /**
     * @var CodeDocumentType $type
     */
    protected $type = null;

    /**
     * @var IdentifierTicketingDocument $number
     */
    protected $number = null;

    /**
     * @param TicketingDocument.ServiceCoupon.Ticket.ED[] $ServiceCoupon
     * @param TicketingDocument.Payment.ED[] $Payment
     * @param CodeDocumentType $type
     * @param IdentifierTicketingDocument $number
     */
    public function __construct(array $ServiceCoupon, array $Payment, $type, $number)
    {
      $this->ServiceCoupon = $ServiceCoupon;
      $this->Payment = $Payment;
      $this->type = $type;
      $this->number = $number;
    }

    /**
     * @return TicketingDocumentDetailsTicketED
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param TicketingDocumentDetailsTicketED $Details
     * @return Ticketing.Document.Ticket.ED
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return TicketingDocumentCustomerED
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param TicketingDocumentCustomerED $Customer
     * @return Ticketing.Document.Ticket.ED
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return TicketingDocumentAffinityED
     */
    public function getAffinity()
    {
      return $this->Affinity;
    }

    /**
     * @param TicketingDocumentAffinityED $Affinity
     * @return Ticketing.Document.Ticket.ED
     */
    public function setAffinity($Affinity)
    {
      $this->Affinity = $Affinity;
      return $this;
    }

    /**
     * @return TicketingDocument.ServiceCoupon.Ticket.ED[]
     */
    public function getServiceCoupon()
    {
      return $this->ServiceCoupon;
    }

    /**
     * @param TicketingDocument.ServiceCoupon.Ticket.ED[] $ServiceCoupon
     * @return Ticketing.Document.Ticket.ED
     */
    public function setServiceCoupon(array $ServiceCoupon)
    {
      $this->ServiceCoupon = $ServiceCoupon;
      return $this;
    }

    /**
     * @return TicketingDocumentRelatedTicketED
     */
    public function getRelatedDocument()
    {
      return $this->RelatedDocument;
    }

    /**
     * @param TicketingDocumentRelatedTicketED $RelatedDocument
     * @return Ticketing.Document.Ticket.ED
     */
    public function setRelatedDocument($RelatedDocument)
    {
      $this->RelatedDocument = $RelatedDocument;
      return $this;
    }

    /**
     * @return TicketingDocumentAmountsTicketED
     */
    public function getAmounts()
    {
      return $this->Amounts;
    }

    /**
     * @param TicketingDocumentAmountsTicketED $Amounts
     * @return Ticketing.Document.Ticket.ED
     */
    public function setAmounts($Amounts)
    {
      $this->Amounts = $Amounts;
      return $this;
    }

    /**
     * @return TicketingDocumentTaxesTicketED
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param TicketingDocumentTaxesTicketED $Taxes
     * @return Ticketing.Document.Ticket.ED
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return TicketingDocument.Payment.ED[]
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param TicketingDocument.Payment.ED[] $Payment
     * @return Ticketing.Document.Ticket.ED
     */
    public function setPayment(array $Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return TicketingDocumentRemarkED
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param TicketingDocumentRemarkED $Remark
     * @return Ticketing.Document.Ticket.ED
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return FareCalculation
     */
    public function getFareCalculation()
    {
      return $this->FareCalculation;
    }

    /**
     * @param FareCalculation $FareCalculation
     * @return Ticketing.Document.Ticket.ED
     */
    public function setFareCalculation($FareCalculation)
    {
      $this->FareCalculation = $FareCalculation;
      return $this;
    }

    /**
     * @return CodeDocumentType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodeDocumentType $type
     * @return Ticketing.Document.Ticket.ED
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return IdentifierTicketingDocument
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param IdentifierTicketingDocument $number
     * @return Ticketing.Document.Ticket.ED
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
