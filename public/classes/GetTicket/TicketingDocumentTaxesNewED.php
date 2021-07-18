<?php

class TicketingDocumentTaxesNewED
{

    /**
     * @var Tax.Details.ED[] $Tax
     */
    protected $Tax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Tax.Details.ED[]
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param Tax.Details.ED[] $Tax
     * @return TicketingDocument.Taxes.New.ED
     */
    public function setTax(array $Tax = null)
    {
      $this->Tax = $Tax;
      return $this;
    }

}
