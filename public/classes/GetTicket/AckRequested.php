<?php

class AckRequested
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var anyURI $actor
     */
    protected $actor = null;

    /**
     * @var boolean $signed
     */
    protected $signed = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var nonemptystring $version
     */
    protected $version = null;

    /**
     * @param string $any
     * @param anyURI $actor
     * @param boolean $signed
     * @param ID $id
     * @param nonemptystring $version
     */
    public function __construct($any, $actor, $signed, $id, $version)
    {
      $this->any = $any;
      $this->actor = $actor;
      $this->signed = $signed;
      $this->id = $id;
      $this->version = $version;
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
     * @return AckRequested
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
     * @return AckRequested
     */
    public function setActor($actor)
    {
      $this->actor = $actor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSigned()
    {
      return $this->signed;
    }

    /**
     * @param boolean $signed
     * @return AckRequested
     */
    public function setSigned($signed)
    {
      $this->signed = $signed;
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
     * @return AckRequested
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
     * @return AckRequested
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
