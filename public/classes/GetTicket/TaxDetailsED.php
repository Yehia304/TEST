<?php

class TaxDetailsED
{

    /**
     * @var TaxAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var StringShort $Text
     */
    protected $Text = null;

    /**
     * @var boolean $ApplyCreditInd
     */
    protected $ApplyCreditInd = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var CodeTax $code
     */
    protected $code = null;

    /**
     * @var CodeTaxStatus $status
     */
    protected $status = null;

    /**
     * @var boolean $exempt
     */
    protected $exempt = null;

    /**
     * @param TaxAmount $Amount
     * @param int $sequence
     * @param CodeTax $code
     * @param CodeTaxStatus $status
     * @param boolean $exempt
     */
    public function __construct($Amount, $sequence, $code, $status, $exempt)
    {
      $this->Amount = $Amount;
      $this->sequence = $sequence;
      $this->code = $code;
      $this->status = $status;
      $this->exempt = $exempt;
    }

    /**
     * @return TaxAmount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param TaxAmount $Amount
     * @return Tax.Details.ED
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return StringShort
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param StringShort $Text
     * @return Tax.Details.ED
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return Tax.Details.ED
     */
    public function setApplyCreditInd($ApplyCreditInd)
    {
      $this->ApplyCreditInd = $ApplyCreditInd;
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
     * @return Tax.Details.ED
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return CodeTax
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param CodeTax $code
     * @return Tax.Details.ED
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return CodeTaxStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param CodeTaxStatus $status
     * @return Tax.Details.ED
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExempt()
    {
      return $this->exempt;
    }

    /**
     * @param boolean $exempt
     * @return Tax.Details.ED
     */
    public function setExempt($exempt)
    {
      $this->exempt = $exempt;
      return $this;
    }

}
