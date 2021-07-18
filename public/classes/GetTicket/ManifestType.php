<?php

class ManifestType
{

    /**
     * @var ReferenceType $Reference
     */
    protected $Reference = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param ReferenceType $Reference
     * @param ID $Id
     */
    public function __construct($Reference, $Id)
    {
      $this->Reference = $Reference;
      $this->Id = $Id;
    }

    /**
     * @return ReferenceType
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param ReferenceType $Reference
     * @return ManifestType
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param ID $Id
     * @return ManifestType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
