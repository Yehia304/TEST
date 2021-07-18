<?php

class DocumentHistoryDisplay
{

    /**
     * @var TicketingDocumentHistoryED $History
     */
    protected $History = null;

    /**
     * @param TicketingDocumentHistoryED $History
     */
    public function __construct($History)
    {
      $this->History = $History;
    }

    /**
     * @return TicketingDocumentHistoryED
     */
    public function getHistory()
    {
      return $this->History;
    }

    /**
     * @param TicketingDocumentHistoryED $History
     * @return DocumentHistoryDisplay
     */
    public function setHistory($History)
    {
      $this->History = $History;
      return $this;
    }

}
