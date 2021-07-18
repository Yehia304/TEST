<?php

class Amount
{

    /**
     * @var _amount $_
     */
    protected $_ = null;

    /**
     * @var CodeCurrencyType $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var NumberDecimalPlace $decimalPlace
     */
    protected $decimalPlace = null;

    /**
     * @param _amount $_
     * @param CodeCurrencyType $currencyCode
     * @param NumberDecimalPlace $decimalPlace
     */
    public function __construct($_, $currencyCode, $decimalPlace)
    {
      $this->_ = $_;
      $this->currencyCode = $currencyCode;
      $this->decimalPlace = $decimalPlace;
    }

    /**
     * @return _amount
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param _amount $_
     * @return Amount
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return CodeCurrencyType
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param CodeCurrencyType $currencyCode
     * @return Amount
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return NumberDecimalPlace
     */
    public function getDecimalPlace()
    {
      return $this->decimalPlace;
    }

    /**
     * @param NumberDecimalPlace $decimalPlace
     * @return Amount
     */
    public function setDecimalPlace($decimalPlace)
    {
      $this->decimalPlace = $decimalPlace;
      return $this;
    }

}
