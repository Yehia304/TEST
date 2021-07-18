<?php

class TicketingDocumentAmountsEMD
{

    /**
     * @var AmountsNew $New
     */
    protected $New = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AmountsNew
     */
    public function getNew()
    {
      return $this->New;
    }

    /**
     * @param AmountsNew $New
     * @return TicketingDocument.Amounts.EMD
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

}
