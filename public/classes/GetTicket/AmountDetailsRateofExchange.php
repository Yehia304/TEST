<?php

class AmountDetailsRateofExchange extends AmountDetails
{

    /**
     * @var CurrencyConversionDetails $RateOfExchange
     */
    protected $RateOfExchange = null;

    /**
     * @param Amount $Amount
     */
    public function __construct($Amount)
    {
      parent::__construct($Amount);
    }

    /**
     * @return CurrencyConversionDetails
     */
    public function getRateOfExchange()
    {
      return $this->RateOfExchange;
    }

    /**
     * @param CurrencyConversionDetails $RateOfExchange
     * @return Amount.Details.RateofExchange
     */
    public function setRateOfExchange($RateOfExchange)
    {
      $this->RateOfExchange = $RateOfExchange;
      return $this;
    }

}
