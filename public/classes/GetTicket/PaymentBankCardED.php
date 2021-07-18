<?php

class PaymentBankCardED
{

    /**
     * @var NumberCreditCard $MaskedCardNumber
     */
    protected $MaskedCardNumber = null;

    /**
     * @var Expire_Date $ExpireDate
     */
    protected $ExpireDate = null;

    /**
     * @var CodeApproval $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @var CodeExtendedPayment $ExtendedPayment
     */
    protected $ExtendedPayment = null;

    /**
     * @var StringText $Details
     */
    protected $Details = null;

    /**
     * @var AmountBasic $Authorized
     */
    protected $Authorized = null;

    /**
     * @var CodeAddressVerification $AddressVerification
     */
    protected $AddressVerification = null;

    /**
     * @var IdentifierTransaction $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var CodeOTA $cardType
     */
    protected $cardType = null;

    /**
     * @param NumberCreditCard $MaskedCardNumber
     * @param CodeOTA $cardType
     */
    public function __construct($MaskedCardNumber, $cardType)
    {
      $this->MaskedCardNumber = $MaskedCardNumber;
      $this->cardType = $cardType;
    }

    /**
     * @return NumberCreditCard
     */
    public function getMaskedCardNumber()
    {
      return $this->MaskedCardNumber;
    }

    /**
     * @param NumberCreditCard $MaskedCardNumber
     * @return Payment.BankCard.ED
     */
    public function setMaskedCardNumber($MaskedCardNumber)
    {
      $this->MaskedCardNumber = $MaskedCardNumber;
      return $this;
    }

    /**
     * @return Expire_Date
     */
    public function getExpireDate()
    {
      return $this->ExpireDate;
    }

    /**
     * @param Expire_Date $ExpireDate
     * @return Payment.BankCard.ED
     */
    public function setExpireDate($ExpireDate)
    {
      $this->ExpireDate = $ExpireDate;
      return $this;
    }

    /**
     * @return CodeApproval
     */
    public function getApprovalCode()
    {
      return $this->ApprovalCode;
    }

    /**
     * @param CodeApproval $ApprovalCode
     * @return Payment.BankCard.ED
     */
    public function setApprovalCode($ApprovalCode)
    {
      $this->ApprovalCode = $ApprovalCode;
      return $this;
    }

    /**
     * @return CodeExtendedPayment
     */
    public function getExtendedPayment()
    {
      return $this->ExtendedPayment;
    }

    /**
     * @param CodeExtendedPayment $ExtendedPayment
     * @return Payment.BankCard.ED
     */
    public function setExtendedPayment($ExtendedPayment)
    {
      $this->ExtendedPayment = $ExtendedPayment;
      return $this;
    }

    /**
     * @return StringText
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param StringText $Details
     * @return Payment.BankCard.ED
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return AmountBasic
     */
    public function getAuthorized()
    {
      return $this->Authorized;
    }

    /**
     * @param AmountBasic $Authorized
     * @return Payment.BankCard.ED
     */
    public function setAuthorized($Authorized)
    {
      $this->Authorized = $Authorized;
      return $this;
    }

    /**
     * @return CodeAddressVerification
     */
    public function getAddressVerification()
    {
      return $this->AddressVerification;
    }

    /**
     * @param CodeAddressVerification $AddressVerification
     * @return Payment.BankCard.ED
     */
    public function setAddressVerification($AddressVerification)
    {
      $this->AddressVerification = $AddressVerification;
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
     * @return Payment.BankCard.ED
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

    /**
     * @return CodeOTA
     */
    public function getCardType()
    {
      return $this->cardType;
    }

    /**
     * @param CodeOTA $cardType
     * @return Payment.BankCard.ED
     */
    public function setCardType($cardType)
    {
      $this->cardType = $cardType;
      return $this;
    }

}
