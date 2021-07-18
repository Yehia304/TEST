<?php

class Acknowledgment
{

    /**
     * @var string $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var nonemptystring $RefToMessageId
     */
    protected $RefToMessageId = null;

    /**
     * @var From $From
     */
    protected $From = null;

    /**
     * @var Reference $Reference
     */
    protected $Reference = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var anyURI $actor
     */
    protected $actor = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var nonemptystring $version
     */
    protected $version = null;

    /**
     * @param string $Timestamp
     * @param nonemptystring $RefToMessageId
     * @param From $From
     * @param Reference $Reference
     * @param string $any
     * @param anyURI $actor
     * @param ID $id
     * @param nonemptystring $version
     */
    public function __construct($Timestamp, $RefToMessageId, $From, $Reference, $any, $actor, $id, $version)
    {
      $this->Timestamp = $Timestamp;
      $this->RefToMessageId = $RefToMessageId;
      $this->From = $From;
      $this->Reference = $Reference;
      $this->any = $any;
      $this->actor = $actor;
      $this->id = $id;
      $this->version = $version;
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
     * @return Acknowledgment
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
     * @return Acknowledgment
     */
    public function setRefToMessageId($RefToMessageId)
    {
      $this->RefToMessageId = $RefToMessageId;
      return $this;
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
     * @return Acknowledgment
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return Reference
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param Reference $Reference
     * @return Acknowledgment
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
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
     * @return Acknowledgment
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getActor()
    {
      return $this->actor;
    }

    /**
     * @param anyURI $actor
     * @return Acknowledgment
     */
    public function setActor($actor)
    {
      $this->actor = $actor;
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
     * @return Acknowledgment
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
     * @return Acknowledgment
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
