<?php

class TaxMisc
{

    /**
     * @var TaxAmountCoupon $Amount
     */
    protected $Amount = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var CodeTax $code
     */
    protected $code = null;

    /**
     * @var boolean $exempt
     */
    protected $exempt = null;

    /**
     * @var CodeTaxStatus $status
     */
    protected $status = null;

    /**
     * @param TaxAmountCoupon $Amount
     * @param int $sequence
     * @param CodeTax $code
     * @param boolean $exempt
     * @param CodeTaxStatus $status
     */
    public function __construct($Amount, $sequence, $code, $exempt, $status)
    {
      $this->Amount = $Amount;
      $this->sequence = $sequence;
      $this->code = $code;
      $this->exempt = $exempt;
      $this->status = $status;
    }

    /**
     * @return TaxAmountCoupon
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param TaxAmountCoupon $Amount
     * @return Tax.Misc
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return Tax.Misc
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
     * @return Tax.Misc
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return Tax.Misc
     */
    public function setExempt($exempt)
    {
      $this->exempt = $exempt;
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
     * @return Tax.Misc
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
