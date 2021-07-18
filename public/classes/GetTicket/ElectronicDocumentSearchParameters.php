<?php

class ElectronicDocumentSearchParameters
{

    /**
     * @var IdentifierTicketingDocument $DocumentNumber
     */
    protected $DocumentNumber = null;

    /**
     * @var CodeDocumentType $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var NumberLineNumber $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @var boolean $CCView
     */
    protected $CCView = null;

    /**
     * @var CodeGetTicketingResultType $resultType
     */
    protected $resultType = null;

    /**
     * @param CodeGetTicketingResultType $resultType
     */
    public function __construct($resultType)
    {
      $this->resultType = $resultType;
    }

    /**
     * @return IdentifierTicketingDocument
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param IdentifierTicketingDocument $DocumentNumber
     * @return ElectronicDocument.SearchParameters
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return CodeDocumentType
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param CodeDocumentType $DocumentType
     * @return ElectronicDocument.SearchParameters
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

    /**
     * @return NumberLineNumber
     */
    public function getLineNumber()
    {
      return $this->LineNumber;
    }

    /**
     * @param NumberLineNumber $LineNumber
     * @return ElectronicDocument.SearchParameters
     */
    public function setLineNumber($LineNumber)
    {
      $this->LineNumber = $LineNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCCView()
    {
      return $this->CCView;
    }

    /**
     * @param boolean $CCView
     * @return ElectronicDocument.SearchParameters
     */
    public function setCCView($CCView)
    {
      $this->CCView = $CCView;
      return $this;
    }

    /**
     * @return CodeGetTicketingResultType
     */
    public function getResultType()
    {
      return $this->resultType;
    }

    /**
     * @param CodeGetTicketingResultType $resultType
     * @return ElectronicDocument.SearchParameters
     */
    public function setResultType($resultType)
    {
      $this->resultType = $resultType;
      return $this;
    }

}
