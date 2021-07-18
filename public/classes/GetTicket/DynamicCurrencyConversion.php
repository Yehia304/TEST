<?php

class DynamicCurrencyConversion
{

    /**
     * @var Amount $Amount
     */
    protected $Amount = null;

    /**
     * @var StringLength1to15 $Text
     */
    protected $Text = null;

    /**
     * @var CurrencyConversionDetails $Rate
     */
    protected $Rate = null;

    /**
     * @param Amount $Amount
     * @param CurrencyConversionDetails $Rate
     */
    public function __construct($Amount, $Rate)
    {
      $this->Amount = $Amount;
      $this->Rate = $Rate;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param Amount $Amount
     * @return DynamicCurrencyConversion
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return StringLength1to15
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param StringLength1to15 $Text
     * @return DynamicCurrencyConversion
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return CurrencyConversionDetails
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param CurrencyConversionDetails $Rate
     * @return DynamicCurrencyConversion
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

}
