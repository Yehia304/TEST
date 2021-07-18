<?php

class PaymentAmountBasic
{

    /**
     * @var PaymentAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var boolean $ApplyCreditInd
     */
    protected $ApplyCreditInd = null;

    /**
     * @param PaymentAmount $Amount
     */
    public function __construct($Amount)
    {
      $this->Amount = $Amount;
    }

    /**
     * @return PaymentAmount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param PaymentAmount $Amount
     * @return PaymentAmount.Basic
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyCreditInd()
    {
      return $this->ApplyCreditInd;
    }

    /**
     * @param boolean $ApplyCreditInd
     * @return PaymentAmount.Basic
     */
    public function setApplyCreditInd($ApplyCreditInd)
    {
      $this->ApplyCreditInd = $ApplyCreditInd;
      return $this;
    }

}
