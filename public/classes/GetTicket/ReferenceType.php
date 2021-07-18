<?php

class ReferenceType
{

    /**
     * @var TransformsType $Transforms
     */
    protected $Transforms = null;

    /**
     * @var DigestMethodType $DigestMethod
     */
    protected $DigestMethod = null;

    /**
     * @var DigestValueType $DigestValue
     */
    protected $DigestValue = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @var anyURI $URI
     */
    protected $URI = null;

    /**
     * @var anyURI $Type
     */
    protected $Type = null;

    /**
     * @param TransformsType $Transforms
     * @param DigestMethodType $DigestMethod
     * @param DigestValueType $DigestValue
     * @param ID $Id
     * @param anyURI $URI
     * @param anyURI $Type
     */
    public function __construct($Transforms, $DigestMethod, $DigestValue, $Id, $URI, $Type)
    {
      $this->Transforms = $Transforms;
      $this->DigestMethod = $DigestMethod;
      $this->DigestValue = $DigestValue;
      $this->Id = $Id;
      $this->URI = $URI;
      $this->Type = $Type;
    }

    /**
     * @return TransformsType
     */
    public function getTransforms()
    {
      return $this->Transforms;
    }

    /**
     * @param TransformsType $Transforms
     * @return ReferenceType
     */
    public function setTransforms($Transforms)
    {
      $this->Transforms = $Transforms;
      return $this;
    }

    /**
     * @return DigestMethodType
     */
    public function getDigestMethod()
    {
      return $this->DigestMethod;
    }

    /**
     * @param DigestMethodType $DigestMethod
     * @return ReferenceType
     */
    public function setDigestMethod($DigestMethod)
    {
      $this->DigestMethod = $DigestMethod;
      return $this;
    }

    /**
     * @return DigestValueType
     */
    public function getDigestValue()
    {
      return $this->DigestValue;
    }

    /**
     * @param DigestValueType $DigestValue
     * @return ReferenceType
     */
    public function setDigestValue($DigestValue)
    {
      $this->DigestValue = $DigestValue;
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
     * @return ReferenceType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getURI()
    {
      return $this->URI;
    }

    /**
     * @param anyURI $URI
     * @return ReferenceType
     */
    public function setURI($URI)
    {
      $this->URI = $URI;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anyURI $Type
     * @return ReferenceType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
