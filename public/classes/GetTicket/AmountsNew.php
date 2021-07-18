<?php

class AmountsNew
{

    /**
     * @var AmountDetails $Base
     */
    protected $Base = null;

    /**
     * @var AmountDetailsCurrencyConversion $Equivalent
     */
    protected $Equivalent = null;

    /**
     * @var AmountDetails $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @var AmountDetailsRateofExchange $Total
     */
    protected $Total = null;

    /**
     * @var AmountDetails $Net
     */
    protected $Net = null;

    /**
     * @var Tax.Details[] $Tax
     */
    protected $Tax = null;

    /**
     * @param AmountDetails $Base
     * @param AmountDetailsRateofExchange $Total
     */
    public function __construct($Base, $Total)
    {
      $this->Base = $Base;
      $this->Total = $Total;
    }

    /**
     * @return AmountDetails
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param AmountDetails $Base
     * @return Amounts.New
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return AmountDetailsCurrencyConversion
     */
    public function getEquivalent()
    {
      return $this->Equivalent;
    }

    /**
     * @param AmountDetailsCurrencyConversion $Equivalent
     * @return Amounts.New
     */
    public function setEquivalent($Equivalent)
    {
      $this->Equivalent = $Equivalent;
      return $this;
    }

    /**
     * @return AmountDetails
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param AmountDetails $TotalTax
     * @return Amounts.New
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return AmountDetailsRateofExchange
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param AmountDetailsRateofExchange $Total
     * @return Amounts.New
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return AmountDetails
     */
    public function getNet()
    {
      return $this->Net;
    }

    /**
     * @param AmountDetails $Net
     * @return Amounts.New
     */
    public function setNet($Net)
    {
      $this->Net = $Net;
      return $this;
    }

    /**
     * @return Tax.Details[]
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param Tax.Details[] $Tax
     * @return Amounts.New
     */
    public function setTax(array $Tax = null)
    {
      $this->Tax = $Tax;
      return $this;
    }

}
