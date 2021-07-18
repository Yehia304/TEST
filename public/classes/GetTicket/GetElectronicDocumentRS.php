<?php

class GetElectronicDocumentRS
{

    /**
     * @var STL_HeaderRS $STL_HeaderRS
     */
    protected $STL_HeaderRS = null;

    /**
     * @var TicketingAgentED $Agent
     */
    protected $Agent = null;

    /**
     * @var TicketingTransactionInfoED $TransactionInfo
     */
    protected $TransactionInfo = null;

    /**
     * @var DocumentDetailsDisplay $DocumentDetailsDisplay
     */
    protected $DocumentDetailsDisplay = null;

    /**
     * @var DocumentHistoryDisplay $DocumentHistoryDisplay
     */
    protected $DocumentHistoryDisplay = null;

    /**
     * @var Diagnostic[] $Diagnostic
     */
    protected $Diagnostic = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @param STL_HeaderRS $STL_HeaderRS
     * @param TicketingAgentED $Agent
     * @param TicketingTransactionInfoED $TransactionInfo
     * @param DocumentDetailsDisplay $DocumentDetailsDisplay
     * @param DocumentHistoryDisplay $DocumentHistoryDisplay
     * @param string $Version
     */
    public function __construct($STL_HeaderRS, $Agent, $TransactionInfo, $DocumentDetailsDisplay, $DocumentHistoryDisplay, $Version)
    {
      $this->STL_HeaderRS = $STL_HeaderRS;
      $this->Agent = $Agent;
      $this->TransactionInfo = $TransactionInfo;
      $this->DocumentDetailsDisplay = $DocumentDetailsDisplay;
      $this->DocumentHistoryDisplay = $DocumentHistoryDisplay;
      $this->Version = $Version;
    }

    /**
     * @return STL_HeaderRS
     */
    public function getSTL_HeaderRS()
    {
      return $this->STL_HeaderRS;
    }

    /**
     * @param STL_HeaderRS $STL_HeaderRS
     * @return GetElectronicDocumentRS
     */
    public function setSTL_HeaderRS($STL_HeaderRS)
    {
      $this->STL_HeaderRS = $STL_HeaderRS;
      return $this;
    }

    /**
     * @return TicketingAgentED
     */
    public function getAgent()
    {
      return $this->Agent;
    }

    /**
     * @param TicketingAgentED $Agent
     * @return GetElectronicDocumentRS
     */
    public function setAgent($Agent)
    {
      $this->Agent = $Agent;
      return $this;
    }

    /**
     * @return TicketingTransactionInfoED
     */
    public function getTransactionInfo()
    {
      return $this->TransactionInfo;
    }

    /**
     * @param TicketingTransactionInfoED $TransactionInfo
     * @return GetElectronicDocumentRS
     */
    public function setTransactionInfo($TransactionInfo)
    {
      $this->TransactionInfo = $TransactionInfo;
      return $this;
    }

    /**
     * @return DocumentDetailsDisplay
     */
    public function getDocumentDetailsDisplay()
    {
      return $this->DocumentDetailsDisplay;
    }

    /**
     * @param DocumentDetailsDisplay $DocumentDetailsDisplay
     * @return GetElectronicDocumentRS
     */
    public function setDocumentDetailsDisplay($DocumentDetailsDisplay)
    {
      $this->DocumentDetailsDisplay = $DocumentDetailsDisplay;
      return $this;
    }

    /**
     * @return DocumentHistoryDisplay
     */
    public function getDocumentHistoryDisplay()
    {
      return $this->DocumentHistoryDisplay;
    }

    /**
     * @param DocumentHistoryDisplay $DocumentHistoryDisplay
     * @return GetElectronicDocumentRS
     */
    public function setDocumentHistoryDisplay($DocumentHistoryDisplay)
    {
      $this->DocumentHistoryDisplay = $DocumentHistoryDisplay;
      return $this;
    }

    /**
     * @return Diagnostic[]
     */
    public function getDiagnostic()
    {
      return $this->Diagnostic;
    }

    /**
     * @param Diagnostic[] $Diagnostic
     * @return GetElectronicDocumentRS
     */
    public function setDiagnostic(array $Diagnostic = null)
    {
      $this->Diagnostic = $Diagnostic;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return GetElectronicDocumentRS
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
