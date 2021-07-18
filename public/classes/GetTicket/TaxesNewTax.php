<?php

class TaxesNewTax
{

    /**
     * @var Tax.Details[] $Tax
     */
    protected $Tax = null;

    
    public function __construct()
    {
    
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
     * @return Taxes.New.Tax
     */
    public function setTax(array $Tax = null)
    {
      $this->Tax = $Tax;
      return $this;
    }

}
