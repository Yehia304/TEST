<?php

class MessageOrder
{

    /**
     * @var sequenceNumbertype $SequenceNumber
     */
    protected $SequenceNumber = null;

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
     * @param sequenceNumbertype $SequenceNumber
     * @param string $any
     * @param ID $id
     * @param nonemptystring $version
     */
    public function __construct($SequenceNumber, $any, $id, $version)
    {
      $this->SequenceNumber = $SequenceNumber;
      $this->any = $any;
      $this->id = $id;
      $this->version = $version;
    }

    /**
     * @return sequenceNumbertype
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param sequenceNumbertype $SequenceNumber
     * @return MessageOrder
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
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
     * @return MessageOrder
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
     * @return MessageOrder
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
     * @return MessageOrder
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
