<?php

class MessageHeader
{

    /**
     * @var From $From
     */
    protected $From = null;

    /**
     * @var To $To
     */
    protected $To = null;

    /**
     * @var nonemptystring $CPAId
     */
    protected $CPAId = null;

    /**
     * @var nonemptystring $ConversationId
     */
    protected $ConversationId = null;

    /**
     * @var Service $Service
     */
    protected $Service = null;

    /**
     * @var nonemptystring $Action
     */
    protected $Action = null;

    /**
     * @var MessageData $MessageData
     */
    protected $MessageData = null;

    /**
     * @var anyType $DuplicateElimination
     */
    protected $DuplicateElimination = null;

    /**
     * @var Description $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var nonemptystring $version
     */
    protected $version = null;

    /**
     * @param From $From
     * @param To $To
     * @param nonemptystring $CPAId
     * @param nonemptystring $ConversationId
     * @param Service $Service
     * @param nonemptystring $Action
     * @param MessageData $MessageData
     * @param anyType $DuplicateElimination
     * @param Description $Description
     * @param string $any
     * @param ID $id
     * @param nonemptystring $version
     */
    public function __construct($From, $To, $CPAId, $ConversationId, $Service, $Action, $MessageData, $DuplicateElimination, $Description, $any, $id, $version)
    {
      $this->From = $From;
      $this->To = $To;
      $this->CPAId = $CPAId;
      $this->ConversationId = $ConversationId;
      $this->Service = $Service;
      $this->Action = $Action;
      $this->MessageData = $MessageData;
      $this->DuplicateElimination = $DuplicateElimination;
      $this->Description = $Description;
      $this->any = $any;
      $this->id = $id;
      $this->version = $version;
    }

    /**
     * @return From
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param From $From
     * @return MessageHeader
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return To
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param To $To
     * @return MessageHeader
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getCPAId()
    {
      return $this->CPAId;
    }

    /**
     * @param nonemptystring $CPAId
     * @return MessageHeader
     */
    public function setCPAId($CPAId)
    {
      $this->CPAId = $CPAId;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getConversationId()
    {
      return $this->ConversationId;
    }

    /**
     * @param nonemptystring $ConversationId
     * @return MessageHeader
     */
    public function setConversationId($ConversationId)
    {
      $this->ConversationId = $ConversationId;
      return $this;
    }

    /**
     * @return Service
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param Service $Service
     * @return MessageHeader
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param nonemptystring $Action
     * @return MessageHeader
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return MessageData
     */
    public function getMessageData()
    {
      return $this->MessageData;
    }

    /**
     * @param MessageData $MessageData
     * @return MessageHeader
     */
    public function setMessageData($MessageData)
    {
      $this->MessageData = $MessageData;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getDuplicateElimination()
    {
      return $this->DuplicateElimination;
    }

    /**
     * @param anyType $DuplicateElimination
     * @return MessageHeader
     */
    public function setDuplicateElimination($DuplicateElimination)
    {
      $this->DuplicateElimination = $DuplicateElimination;
      return $this;
    }

    /**
     * @return Description
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param Description $Description
     * @return MessageHeader
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return MessageHeader
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return MessageHeader
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param nonemptystring $version
     * @return MessageHeader
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
