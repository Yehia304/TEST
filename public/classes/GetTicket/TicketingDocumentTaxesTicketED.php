<?php

class TicketingDocumentTaxesTicketED
{

    /**
     * @var TicketingDocumentTaxesNewED $New
     */
    protected $New = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketingDocumentTaxesNewED
     */
    public function getNew()
    {
      return $this->New;
    }

    /**
     * @param TicketingDocumentTaxesNewED $New
     * @return TicketingDocument.Taxes.Ticket.ED
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

}
