<?php

class TaxDetailsDomestic
{

    /**
     * @var TaxAmount $Amount
     */
    protected $Amount = null;

    /**
     * @var CityCode $AirportCode
     */
    protected $AirportCode = null;

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
     * @var boolean $exempt
     */
    protected $exempt = null;

    /**
     * @param TaxAmount $Amount
     * @param int $sequence
     * @param CodeTax $code
     * @param boolean $exempt
     */
    public function __construct($Amount, $sequence, $code, $exempt)
    {
      $this->Amount = $Amount;
      $this->sequence = $sequence;
      $this->code = $code;
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
     * @return Tax.Details.Domestic
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return CityCode
     */
    public function getAirportCode()
    {
      return $this->AirportCode;
    }

    /**
     * @param CityCode $AirportCode
     * @return Tax.Details.Domestic
     */
    public function setAirportCode($AirportCode)
    {
      $this->AirportCode = $AirportCode;
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
     * @return Tax.Details.Domestic
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
     * @return Tax.Details.Domestic
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
     * @return Tax.Details.Domestic
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
     * @return Tax.Details.Domestic
     */
    public function setExempt($exempt)
    {
      $this->exempt = $exempt;
      return $this;
    }

}
