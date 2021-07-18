<?php

class CurrencyConversionDetails
{

    /**
     * @var float $_
     */
    protected $_ = null;

    /**
     * @var NumberDecimalPlace $decimalPlace
     */
    protected $decimalPlace = null;

    /**
     * @param float $_
     * @param NumberDecimalPlace $decimalPlace
     */
    public function __construct($_, $decimalPlace)
    {
      $this->_ = $_;
      $this->decimalPlace = $decimalPlace;
    }

    /**
     * @return float
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param float $_
     * @return CurrencyConversion.Details
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return CurrencyConversion.Details
     */
    public function setDecimalPlace($decimalPlace)
    {
      $this->decimalPlace = $decimalPlace;
      return $this;
    }

}
