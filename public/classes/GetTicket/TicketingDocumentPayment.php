<?php

class TicketingDocumentPayment
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
     * @var IdentifierPaymentAccount $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var IdentifierDeployment $DeploymentId
     */
    protected $DeploymentId = null;

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
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var CodePaymentType $type
     */
    protected $type = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var CodeFopVCR $code
     */
    protected $code = null;

    /**
     * @var boolean $missingPayAmtInd
     */
    protected $missingPayAmtInd = null;

    /**
     * @var boolean $paymentConfirmation
     */
    protected $paymentConfirmation = null;

    /**
     * @param PaymentAmountBasic $Total
     * @param PaymentBankCardED $Card
     * @param PaymentCash $Cash
     * @param PaymentBankCheck $Check
     * @param PaymentGovernmentTravel $GovernmentTravel
     * @param PaymentInvoice $Invoice
     * @param PaymentMiscellaneous $Miscellaneous
     * @param PaymentOther $Other
     * @param ID $id
     * @param CodePaymentType $type
     * @param int $sequence
     * @param CodeFopVCR $code
     * @param boolean $missingPayAmtInd
     * @param boolean $paymentConfirmation
     */
    public function __construct($Total, $Card, $Cash, $Check, $GovernmentTravel, $Invoice, $Miscellaneous, $Other, $id, $type, $sequence, $code, $missingPayAmtInd, $paymentConfirmation)
    {
      $this->Total = $Total;
      $this->Card = $Card;
      $this->Cash = $Cash;
      $this->Check = $Check;
      $this->GovernmentTravel = $GovernmentTravel;
      $this->Invoice = $Invoice;
      $this->Miscellaneous = $Miscellaneous;
      $this->Other = $Other;
      $this->id = $id;
      $this->type = $type;
      $this->sequence = $sequence;
      $this->code = $code;
      $this->missingPayAmtInd = $missingPayAmtInd;
      $this->paymentConfirmation = $paymentConfirmation;
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

    /**
     * @return IdentifierPaymentAccount
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param IdentifierPaymentAccount $AccountCode
     * @return TicketingDocument.Payment
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return IdentifierDeployment
     */
    public function getDeploymentId()
    {
      return $this->DeploymentId;
    }

    /**
     * @param IdentifierDeployment $DeploymentId
     * @return TicketingDocument.Payment
     */
    public function setDeploymentId($DeploymentId)
    {
      $this->DeploymentId = $DeploymentId;
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
     */
    public function setOther($Other)
    {
      $this->Other = $Other;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return TicketingDocument.Payment
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return TicketingDocument.Payment
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
     * @return TicketingDocument.Payment
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return CodeFopVCR
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param CodeFopVCR $code
     * @return TicketingDocument.Payment
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMissingPayAmtInd()
    {
      return $this->missingPayAmtInd;
    }

    /**
     * @param boolean $missingPayAmtInd
     * @return TicketingDocument.Payment
     */
    public function setMissingPayAmtInd($missingPayAmtInd)
    {
      $this->missingPayAmtInd = $missingPayAmtInd;
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
     * @return TicketingDocument.Payment
     */
    public function setPaymentConfirmation($paymentConfirmation)
    {
      $this->paymentConfirmation = $paymentConfirmation;
      return $this;
    }

}
