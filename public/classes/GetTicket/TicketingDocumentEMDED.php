<?php

class TicketingDocumentEMDED
{

    /**
     * @var TicketingDocumentIndicatorsEMD $Indicators
     */
    protected $Indicators = null;

    /**
     * @var TicketingDocumentDetailsEMDED $Details
     */
    protected $Details = null;

    /**
     * @var TicketingDocumentCustomerED $Customer
     */
    protected $Customer = null;

    /**
     * @var TicketingDocument.Miscellaneous.ED[] $Miscellaneous
     */
    protected $Miscellaneous = null;

    /**
     * @var TicketingDocumentAmountsEMD $Amounts
     */
    protected $Amounts = null;

    /**
     * @var TicketingDocumentTaxesEMD $Taxes
     */
    protected $Taxes = null;

    /**
     * @var TicketingDocument.Payment.ED[] $Payment
     */
    protected $Payment = null;

    /**
     * @var TicketingDocument.Remark.EMD[] $Remark
     */
    protected $Remark = null;

    /**
     * @var TicketingDocumentRelated $RelatedDocument
     */
    protected $RelatedDocument = null;

    /**
     * @var TicketingDocumentValueCalculation $ValueCalculation
     */
    protected $ValueCalculation = null;

    /**
     * @var CodeDocumentType $type
     */
    protected $type = null;

    /**
     * @var IdentifierTicketingDocument $number
     */
    protected $number = null;

    /**
     * @param TicketingDocumentDetailsEMDED $Details
     * @param TicketingDocumentCustomerED $Customer
     * @param TicketingDocument.Miscellaneous.ED[] $Miscellaneous
     * @param TicketingDocumentAmountsEMD $Amounts
     * @param TicketingDocument.Payment.ED[] $Payment
     * @param TicketingDocumentValueCalculation $ValueCalculation
     * @param CodeDocumentType $type
     * @param IdentifierTicketingDocument $number
     */
    public function __construct($Details, $Customer, array $Miscellaneous, $Amounts, array $Payment, $ValueCalculation, $type, $number)
    {
      $this->Details = $Details;
      $this->Customer = $Customer;
      $this->Miscellaneous = $Miscellaneous;
      $this->Amounts = $Amounts;
      $this->Payment = $Payment;
      $this->ValueCalculation = $ValueCalculation;
      $this->type = $type;
      $this->number = $number;
    }

    /**
     * @return TicketingDocumentIndicatorsEMD
     */
    public function getIndicators()
    {
      return $this->Indicators;
    }

    /**
     * @param TicketingDocumentIndicatorsEMD $Indicators
     * @return Ticketing.Document.EMD.ED
     */
    public function setIndicators($Indicators)
    {
      $this->Indicators = $Indicators;
      return $this;
    }

    /**
     * @return TicketingDocumentDetailsEMDED
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param TicketingDocumentDetailsEMDED $Details
     * @return Ticketing.Document.EMD.ED
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
     * @return Ticketing.Document.EMD.ED
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return TicketingDocument.Miscellaneous.ED[]
     */
    public function getMiscellaneous()
    {
      return $this->Miscellaneous;
    }

    /**
     * @param TicketingDocument.Miscellaneous.ED[] $Miscellaneous
     * @return Ticketing.Document.EMD.ED
     */
    public function setMiscellaneous(array $Miscellaneous)
    {
      $this->Miscellaneous = $Miscellaneous;
      return $this;
    }

    /**
     * @return TicketingDocumentAmountsEMD
     */
    public function getAmounts()
    {
      return $this->Amounts;
    }

    /**
     * @param TicketingDocumentAmountsEMD $Amounts
     * @return Ticketing.Document.EMD.ED
     */
    public function setAmounts($Amounts)
    {
      $this->Amounts = $Amounts;
      return $this;
    }

    /**
     * @return TicketingDocumentTaxesEMD
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param TicketingDocumentTaxesEMD $Taxes
     * @return Ticketing.Document.EMD.ED
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
     * @return Ticketing.Document.EMD.ED
     */
    public function setPayment(array $Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return TicketingDocument.Remark.EMD[]
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param TicketingDocument.Remark.EMD[] $Remark
     * @return Ticketing.Document.EMD.ED
     */
    public function setRemark(array $Remark = null)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return TicketingDocumentRelated
     */
    public function getRelatedDocument()
    {
      return $this->RelatedDocument;
    }

    /**
     * @param TicketingDocumentRelated $RelatedDocument
     * @return Ticketing.Document.EMD.ED
     */
    public function setRelatedDocument($RelatedDocument)
    {
      $this->RelatedDocument = $RelatedDocument;
      return $this;
    }

    /**
     * @return TicketingDocumentValueCalculation
     */
    public function getValueCalculation()
    {
      return $this->ValueCalculation;
    }

    /**
     * @param TicketingDocumentValueCalculation $ValueCalculation
     * @return Ticketing.Document.EMD.ED
     */
    public function setValueCalculation($ValueCalculation)
    {
      $this->ValueCalculation = $ValueCalculation;
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
     * @return Ticketing.Document.EMD.ED
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
     * @return Ticketing.Document.EMD.ED
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
