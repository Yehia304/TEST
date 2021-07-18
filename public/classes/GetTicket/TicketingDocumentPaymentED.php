<?php

class TicketingDocumentPaymentED
{

    /**
     * @var PaymentAmountBasic $Base
     */
    protected $Base = null;

    /**
     * @var PaymentAmountBasic $Tax
     */
    protected $Tax = null;

    /**
     * @var PaymentAmountBasic $Total
     */
    protected $Total = null;

    /**
     * @var StringFormOfPayment $Remarks
     */
    protected $Remarks = null;

    /**
     * @var PaymentBankCardED $Card
     */
    protected $Card = null;

    /**
     * @var PaymentCash $Cash
     */
    protected $Cash = null;

    /**
     * @var PaymentBankCheck $Check
     */
    protected $Check = null;

    /**
     * @var PaymentGovernmentTravel $GovernmentTravel
     */
    protected $GovernmentTravel = null;

    /**
     * @var PaymentInvoice $Invoice
     */
    protected $Invoice = null;

    /**
     * @var PaymentMiscellaneous $Miscellaneous
     */
    protected $Miscellaneous = null;

    /**
     * @var PaymentOther $Other
     */
    protected $Other = null;

    /**
     * @var CodePaymentType $type
     */
    protected $type = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @param PaymentAmountBasic $Total
     * @param PaymentBankCardED $Card
     * @param PaymentCash $Cash
     * @param PaymentBankCheck $Check
     * @param PaymentGovernmentTravel $GovernmentTravel
     * @param PaymentInvoice $Invoice
     * @param PaymentMiscellaneous $Miscellaneous
     * @param PaymentOther $Other
     * @param CodePaymentType $type
     * @param int $sequence
     */
    public function __construct($Total, $Card, $Cash, $Check, $GovernmentTravel, $Invoice, $Miscellaneous, $Other, $type, $sequence)
    {
      $this->Total = $Total;
      $this->Card = $Card;
      $this->Cash = $Cash;
      $this->Check = $Check;
      $this->GovernmentTravel = $GovernmentTravel;
      $this->Invoice = $Invoice;
      $this->Miscellaneous = $Miscellaneous;
      $this->Other = $Other;
      $this->type = $type;
      $this->sequence = $sequence;
    }

    /**
     * @return PaymentAmountBasic
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param PaymentAmountBasic $Base
     * @return TicketingDocument.Payment.ED
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return PaymentAmountBasic
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param PaymentAmountBasic $Tax
     * @return TicketingDocument.Payment.ED
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return PaymentAmountBasic
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param PaymentAmountBasic $Total
     * @return TicketingDocument.Payment.ED
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return StringFormOfPayment
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param StringFormOfPayment $Remarks
     * @return TicketingDocument.Payment.ED
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

    /**
     * @return PaymentBankCardED
     */
    public function getCard()
    {
      return $this->Card;
    }

    /**
     * @param PaymentBankCardED $Card
     * @return TicketingDocument.Payment.ED
     */
    public function setCard($Card)
    {
      $this->Card = $Card;
      return $this;
    }

    /**
     * @return PaymentCash
     */
    public function getCash()
    {
      return $this->Cash;
    }

    /**
     * @param PaymentCash $Cash
     * @return TicketingDocument.Payment.ED
     */
    public function setCash($Cash)
    {
      $this->Cash = $Cash;
      return $this;
    }

    /**
     * @return PaymentBankCheck
     */
    public function getCheck()
    {
      return $this->Check;
    }

    /**
     * @param PaymentBankCheck $Check
     * @return TicketingDocument.Payment.ED
     */
    public function setCheck($Check)
    {
      $this->Check = $Check;
      return $this;
    }

    /**
     * @return PaymentGovernmentTravel
     */
    public function getGovernmentTravel()
    {
      return $this->GovernmentTravel;
    }

    /**
     * @param PaymentGovernmentTravel $GovernmentTravel
     * @return TicketingDocument.Payment.ED
     */
    public function setGovernmentTravel($GovernmentTravel)
    {
      $this->GovernmentTravel = $GovernmentTravel;
      return $this;
    }

    /**
     * @return PaymentInvoice
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param PaymentInvoice $Invoice
     * @return TicketingDocument.Payment.ED
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return PaymentMiscellaneous
     */
    public function getMiscellaneous()
    {
      return $this->Miscellaneous;
    }

    /**
     * @param PaymentMiscellaneous $Miscellaneous
     * @return TicketingDocument.Payment.ED
     */
    public function setMiscellaneous($Miscellaneous)
    {
      $this->Miscellaneous = $Miscellaneous;
      return $this;
    }

    /**
     * @return PaymentOther
     */
    public function getOther()
    {
      return $this->Other;
    }

    /**
     * @param PaymentOther $Other
     * @return TicketingDocument.Payment.ED
     */
    public function setOther($Other)
    {
      $this->Other = $Other;
      return $this;
    }

    /**
     * @return CodePaymentType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodePaymentType $type
     * @return TicketingDocument.Payment.ED
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return TicketingDocument.Payment.ED
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

}
