<?php

class TaxDetails
{

    /**
     * @var TaxAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var boolean $ApplyCreditInd
     */
    protected $ApplyCreditInd = null;

    /**
     * @var StringShort $Text
     */
    protected $Text = null;

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
     * @var string $name
     */
    protected $name = null;

    /**
     * @param TaxAmount $Amount
     * @param int $sequence
     * @param CodeTax $code
     * @param CodeTaxStatus $status
     * @param boolean $exempt
     * @param string $name
     */
    public function __construct($Amount, $sequence, $code, $status, $exempt, $name)
    {
      $this->Amount = $Amount;
      $this->sequence = $sequence;
      $this->code = $code;
      $this->status = $status;
      $this->exempt = $exempt;
      $this->name = $name;
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
     * @return Tax.Details
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
     * @return Tax.Details
     */
    public function setApplyCreditInd($ApplyCreditInd)
    {
      $this->ApplyCreditInd = $ApplyCreditInd;
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
     * @return Tax.Details
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return Tax.Details
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
     * @return Tax.Details
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
     * @return Tax.Details
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
     * @return Tax.Details
     */
    public function setExempt($exempt)
    {
      $this->exempt = $exempt;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return Tax.Details
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
