<?php

class TicketingDocumentAmountsTicketED
{

    /**
     * @var AmountsNewED $New
     */
    protected $New = null;

    /**
     * @var AmountsOtherED $Other
     */
    protected $Other = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AmountsNewED
     */
    public function getNew()
    {
      return $this->New;
    }

    /**
     * @param AmountsNewED $New
     * @return TicketingDocument.Amounts.Ticket.ED
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

    /**
     * @return AmountsOtherED
     */
    public function getOther()
    {
      return $this->Other;
    }

    /**
     * @param AmountsOtherED $Other
     * @return TicketingDocument.Amounts.Ticket.ED
     */
    public function setOther($Other)
    {
      $this->Other = $Other;
      return $this;
    }

}
