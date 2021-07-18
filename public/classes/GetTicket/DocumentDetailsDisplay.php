<?php

class DocumentDetailsDisplay
{

    /**
     * @var TicketingDocumentTicketED $Ticket
     */
    protected $Ticket = null;

    /**
     * @var TicketingDocumentEMDED $ElectronicMiscDocument
     */
    protected $ElectronicMiscDocument = null;

    /**
     * @param TicketingDocumentTicketED $Ticket
     * @param TicketingDocumentEMDED $ElectronicMiscDocument
     */
    public function __construct($Ticket, $ElectronicMiscDocument)
    {
      $this->Ticket = $Ticket;
      $this->ElectronicMiscDocument = $ElectronicMiscDocument;
    }

    /**
     * @return TicketingDocumentTicketED
     */
    public function getTicket()
    {
      return $this->Ticket;
    }

    /**
     * @param TicketingDocumentTicketED $Ticket
     * @return DocumentDetailsDisplay
     */
    public function setTicket($Ticket)
    {
      $this->Ticket = $Ticket;
      return $this;
    }

    /**
     * @return TicketingDocumentEMDED
     */
    public function getElectronicMiscDocument()
    {
      return $this->ElectronicMiscDocument;
    }

    /**
     * @param TicketingDocumentEMDED $ElectronicMiscDocument
     * @return DocumentDetailsDisplay
     */
    public function setElectronicMiscDocument($ElectronicMiscDocument)
    {
      $this->ElectronicMiscDocument = $ElectronicMiscDocument;
      return $this;
    }

}
