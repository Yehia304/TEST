<?php

class TicketingDocumentRelatedTicketED
{

    /**
     * @var RelatedDocument.Basic[] $Conjunctive
     */
    protected $Conjunctive = null;

    /**
     * @var RelatedDocumentDetailsOriginalTKTED $Original
     */
    protected $Original = null;

    /**
     * @var RelatedDocument.Details.ED[] $Exchange
     */
    protected $Exchange = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RelatedDocument.Basic[]
     */
    public function getConjunctive()
    {
      return $this->Conjunctive;
    }

    /**
     * @param RelatedDocument.Basic[] $Conjunctive
     * @return TicketingDocument.Related.Ticket.ED
     */
    public function setConjunctive(array $Conjunctive = null)
    {
      $this->Conjunctive = $Conjunctive;
      return $this;
    }

    /**
     * @return RelatedDocumentDetailsOriginalTKTED
     */
    public function getOriginal()
    {
      return $this->Original;
    }

    /**
     * @param RelatedDocumentDetailsOriginalTKTED $Original
     * @return TicketingDocument.Related.Ticket.ED
     */
    public function setOriginal($Original)
    {
      $this->Original = $Original;
      return $this;
    }

    /**
     * @return RelatedDocument.Details.ED[]
     */
    public function getExchange()
    {
      return $this->Exchange;
    }

    /**
     * @param RelatedDocument.Details.ED[] $Exchange
     * @return TicketingDocument.Related.Ticket.ED
     */
    public function setExchange(array $Exchange = null)
    {
      $this->Exchange = $Exchange;
      return $this;
    }

}
