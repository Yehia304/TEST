<?php

class AmountDetailsED
{

    /**
     * @var Amount $Amount
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
     * @param Amount $Amount
     */
    public function __construct($Amount)
    {
      $this->Amount = $Amount;
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
     * @return Amount.Details.ED
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
     * @return Amount.Details.ED
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
     * @return Amount.Details.ED
     */
    public function setApplyCreditInd($ApplyCreditInd)
    {
      $this->ApplyCreditInd = $ApplyCreditInd;
      return $this;
    }

}
