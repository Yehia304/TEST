<?php

class FareCalculation
{

    /**
     * @var FareCalculationDetails $New
     */
    protected $New = null;

    /**
     * @param FareCalculationDetails $New
     */
    public function __construct($New)
    {
      $this->New = $New;
    }

    /**
     * @return FareCalculationDetails
     */
    public function getNew()
    {
      return $this->New;
    }

    /**
     * @param FareCalculationDetails $New
     * @return FareCalculation
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

}
