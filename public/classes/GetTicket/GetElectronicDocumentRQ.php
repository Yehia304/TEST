<?php

class GetElectronicDocumentRQ
{

    /**
     * @var STL_HeaderRQ $STL_HeaderRQ
     */
    protected $STL_HeaderRQ = null;

    /**
     * @var POS $POS
     */
    protected $POS = null;

    /**
     * @var ElectronicDocumentSearchParameters $SearchParameters
     */
    protected $SearchParameters = null;

    /**
     * @var Diagnostic[] $Diagnostic
     */
    protected $Diagnostic = null;

    /**
     * @var CodeGetTicketingRequestType $requestType
     */
    protected $requestType = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @param STL_HeaderRQ $STL_HeaderRQ
     * @param POS $POS
     * @param ElectronicDocumentSearchParameters $SearchParameters
     * @param CodeGetTicketingRequestType $requestType
     * @param string $Version
     */
    public function __construct($STL_HeaderRQ, $POS, $SearchParameters, $requestType, $Version)
    {
      $this->STL_HeaderRQ = $STL_HeaderRQ;
      $this->POS = $POS;
      $this->SearchParameters = $SearchParameters;
      $this->requestType = $requestType;
      $this->Version = $Version;
    }

    /**
     * @return STL_HeaderRQ
     */
    public function getSTL_HeaderRQ()
    {
      return $this->STL_HeaderRQ;
    }

    /**
     * @param STL_HeaderRQ $STL_HeaderRQ
     * @return GetElectronicDocumentRQ
     */
    public function setSTL_HeaderRQ($STL_HeaderRQ)
    {
      $this->STL_HeaderRQ = $STL_HeaderRQ;
      return $this;
    }

    /**
     * @return POS
     */
    public function getPOS()
    {
      return $this->POS;
    }

    /**
     * @param POS $POS
     * @return GetElectronicDocumentRQ
     */
    public function setPOS($POS)
    {
      $this->POS = $POS;
      return $this;
    }

    /**
     * @return ElectronicDocumentSearchParameters
     */
    public function getSearchParameters()
    {
      return $this->SearchParameters;
    }

    /**
     * @param ElectronicDocumentSearchParameters $SearchParameters
     * @return GetElectronicDocumentRQ
     */
    public function setSearchParameters($SearchParameters)
    {
      $this->SearchParameters = $SearchParameters;
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
     * @return GetElectronicDocumentRQ
     */
    public function setDiagnostic(array $Diagnostic = null)
    {
      $this->Diagnostic = $Diagnostic;
      return $this;
    }

    /**
     * @return CodeGetTicketingRequestType
     */
    public function getRequestType()
    {
      return $this->requestType;
    }

    /**
     * @param CodeGetTicketingRequestType $requestType
     * @return GetElectronicDocumentRQ
     */
    public function setRequestType($requestType)
    {
      $this->requestType = $requestType;
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
     * @return GetElectronicDocumentRQ
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
