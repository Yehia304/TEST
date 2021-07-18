<?php

class AmountBasicBankerSellingRate extends AmountBasic
{

    /**
     * @var CurrencyConversionDetails $BankerSellingRate
     */
    protected $BankerSellingRate = null;

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
    public function getBankerSellingRate()
    {
      return $this->BankerSellingRate;
    }

    /**
     * @param CurrencyConversionDetails $BankerSellingRate
     * @return Amount.Basic.BankerSellingRate
     */
    public function setBankerSellingRate($BankerSellingRate)
    {
      $this->BankerSellingRate = $BankerSellingRate;
      return $this;
    }

}
