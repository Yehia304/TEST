<?php

class AmountRate
{

    /**
     * @var Amount $Amount
     */
    protected $Amount = null;

    /**
     * @var Percentage $PercentageRate
     */
    protected $PercentageRate = null;

    /**
     * @var StringShort $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
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
     * @return Amount.Rate
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return Percentage
     */
    public function getPercentageRate()
    {
      return $this->PercentageRate;
    }

    /**
     * @param Percentage $PercentageRate
     * @return Amount.Rate
     */
    public function setPercentageRate($PercentageRate)
    {
      $this->PercentageRate = $PercentageRate;
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
     * @return Amount.Rate
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
