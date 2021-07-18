<?php

class MessageData
{

    /**
     * @var nonemptystring $MessageId
     */
    protected $MessageId = null;

    /**
     * @var string $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var nonemptystring $RefToMessageId
     */
    protected $RefToMessageId = null;

    /**
     * @var \DateTime $TimeToLive
     */
    protected $TimeToLive = null;

    /**
     * @var int $Timeout
     */
    protected $Timeout = null;

    /**
     * @param nonemptystring $MessageId
     * @param string $Timestamp
     * @param nonemptystring $RefToMessageId
     * @param \DateTime $TimeToLive
     * @param int $Timeout
     */
    public function __construct($MessageId, $Timestamp, $RefToMessageId, \DateTime $TimeToLive, $Timeout)
    {
      $this->MessageId = $MessageId;
      $this->Timestamp = $Timestamp;
      $this->RefToMessageId = $RefToMessageId;
      $this->TimeToLive = $TimeToLive->format(\DateTime::ATOM);
      $this->Timeout = $Timeout;
    }

    /**
     * @return nonemptystring
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param nonemptystring $MessageId
     * @return MessageData
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
      return $this->Timestamp;
    }

    /**
     * @param string $Timestamp
     * @return MessageData
     */
    public function setTimestamp($Timestamp)
    {
      $this->Timestamp = $Timestamp;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getRefToMessageId()
    {
      return $this->RefToMessageId;
    }

    /**
     * @param nonemptystring $RefToMessageId
     * @return MessageData
     */
    public function setRefToMessageId($RefToMessageId)
    {
      $this->RefToMessageId = $RefToMessageId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeToLive()
    {
      if ($this->TimeToLive == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeToLive);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeToLive
     * @return MessageData
     */
    public function setTimeToLive(\DateTime $TimeToLive)
    {
      $this->TimeToLive = $TimeToLive->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
      return $this->Timeout;
    }

    /**
     * @param int $Timeout
     * @return MessageData
     */
    public function setTimeout($Timeout)
    {
      $this->Timeout = $Timeout;
      return $this;
    }

}
