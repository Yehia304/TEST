<?php

class AmountsRelatedDocument
{

    /**
     * @var AmountBasic $Original
     */
    protected $Original = null;

    /**
     * @var AmountBasic $Base
     */
    protected $Base = null;

    /**
     * @var AmountBasic $Equivalent
     */
    protected $Equivalent = null;

    /**
     * @var AmountBasic $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @var AmountBasic $Total
     */
    protected $Total = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AmountBasic
     */
    public function getOriginal()
    {
      return $this->Original;
    }

    /**
     * @param AmountBasic $Original
     * @return Amounts.RelatedDocument
     */
    public function setOriginal($Original)
    {
      $this->Original = $Original;
      return $this;
    }

    /**
     * @return AmountBasic
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param AmountBasic $Base
     * @return Amounts.RelatedDocument
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return AmountBasic
     */
    public function getEquivalent()
    {
      return $this->Equivalent;
    }

    /**
     * @param AmountBasic $Equivalent
     * @return Amounts.RelatedDocument
     */
    public function setEquivalent($Equivalent)
    {
      $this->Equivalent = $Equivalent;
      return $this;
    }

    /**
     * @return AmountBasic
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param AmountBasic $TotalTax
     * @return Amounts.RelatedDocument
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return AmountBasic
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param AmountBasic $Total
     * @return Amounts.RelatedDocument
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

}
