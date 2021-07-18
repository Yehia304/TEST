<?php

class TicketingDocumentValueCalculation
{

    /**
     * @var FareCalculationDetails $New
     */
    protected $New = null;

    
    public function __construct()
    {
    
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
     * @return TicketingDocument.ValueCalculation
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

}
