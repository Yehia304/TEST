<?php

class SystemSpecificResults
{

    /**
     * @var ErrorMessage $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var TextShort $ShortText
     */
    protected $ShortText = null;

    /**
     * @var TextLong $Element
     */
    protected $Element = null;

    /**
     * @var Identifier $RecordID
     */
    protected $RecordID = null;

    /**
     * @var anyURI $DocURL
     */
    protected $DocURL = null;

    /**
     * @var DiagnosticResults $DiagnosticResults
     */
    protected $DiagnosticResults = null;

    /**
     * @var \DateTime $timeStamp
     */
    protected $timeStamp = null;

    /**
     * @param \DateTime $timeStamp
     */
    public function __construct(\DateTime $timeStamp)
    {
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
    }

    /**
     * @return ErrorMessage
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param ErrorMessage $ErrorMessage
     * @return SystemSpecificResults
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return TextShort
     */
    public function getShortText()
    {
      return $this->ShortText;
    }

    /**
     * @param TextShort $ShortText
     * @return SystemSpecificResults
     */
    public function setShortText($ShortText)
    {
      $this->ShortText = $ShortText;
      return $this;
    }

    /**
     * @return TextLong
     */
    public function getElement()
    {
      return $this->Element;
    }

    /**
     * @param TextLong $Element
     * @return SystemSpecificResults
     */
    public function setElement($Element)
    {
      $this->Element = $Element;
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getRecordID()
    {
      return $this->RecordID;
    }

    /**
     * @param Identifier $RecordID
     * @return SystemSpecificResults
     */
    public function setRecordID($RecordID)
    {
      $this->RecordID = $RecordID;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDocURL()
    {
      return $this->DocURL;
    }

    /**
     * @param anyURI $DocURL
     * @return SystemSpecificResults
     */
    public function setDocURL($DocURL)
    {
      $this->DocURL = $DocURL;
      return $this;
    }

    /**
     * @return DiagnosticResults
     */
    public function getDiagnosticResults()
    {
      return $this->DiagnosticResults;
    }

    /**
     * @param DiagnosticResults $DiagnosticResults
     * @return SystemSpecificResults
     */
    public function setDiagnosticResults($DiagnosticResults)
    {
      $this->DiagnosticResults = $DiagnosticResults;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStamp()
    {
      if ($this->timeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timeStamp
     * @return SystemSpecificResults
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
      return $this;
    }

}
