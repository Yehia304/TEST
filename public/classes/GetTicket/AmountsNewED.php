<?php

class AmountsNewED
{

    /**
     * @var AmountDetailsED $Base
     */
    protected $Base = null;

    /**
     * @var AmountDetailsED $Equivalent
     */
    protected $Equivalent = null;

    /**
     * @var AmountDetailsED $Total
     */
    protected $Total = null;

    /**
     * @param AmountDetailsED $Base
     * @param AmountDetailsED $Total
     */
    public function __construct($Base, $Total)
    {
      $this->Base = $Base;
      $this->Total = $Total;
    }

    /**
     * @return AmountDetailsED
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param AmountDetailsED $Base
     * @return Amounts.New.ED
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return AmountDetailsED
     */
    public function getEquivalent()
    {
      return $this->Equivalent;
    }

    /**
     * @param AmountDetailsED $Equivalent
     * @return Amounts.New.ED
     */
    public function setEquivalent($Equivalent)
    {
      $this->Equivalent = $Equivalent;
      return $this;
    }

    /**
     * @return AmountDetailsED
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param AmountDetailsED $Total
     * @return Amounts.New.ED
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

}
