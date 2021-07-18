<?php

class SystemSpecificResultsFromLLS
{

    /**
     * @var HostCommand $HostCommand
     */
    protected $HostCommand = null;

    /**
     * @var Message.Condition[] $Message
     */
    protected $Message = null;

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
     * @return HostCommand
     */
    public function getHostCommand()
    {
      return $this->HostCommand;
    }

    /**
     * @param HostCommand $HostCommand
     * @return SystemSpecificResultsFromLLS
     */
    public function setHostCommand($HostCommand)
    {
      $this->HostCommand = $HostCommand;
      return $this;
    }

    /**
     * @return Message.Condition[]
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param Message.Condition[] $Message
     * @return SystemSpecificResultsFromLLS
     */
    public function setMessage(array $Message = null)
    {
      $this->Message = $Message;
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
     * @return SystemSpecificResultsFromLLS
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
     * @return SystemSpecificResultsFromLLS
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
     * @return SystemSpecificResultsFromLLS
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
     * @return SystemSpecificResultsFromLLS
     */
    public function setDocURL($DocURL)
    {
      $this->DocURL = $DocURL;
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
     * @return SystemSpecificResultsFromLLS
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
      return $this;
    }

}
