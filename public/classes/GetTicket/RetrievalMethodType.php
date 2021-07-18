<?php

class RetrievalMethodType
{

    /**
     * @var TransformsType $Transforms
     */
    protected $Transforms = null;

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
     * @param anyURI $URI
     * @param anyURI $Type
     */
    public function __construct($Transforms, $URI, $Type)
    {
      $this->Transforms = $Transforms;
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
     * @return RetrievalMethodType
     */
    public function setTransforms($Transforms)
    {
      $this->Transforms = $Transforms;
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
     * @return RetrievalMethodType
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
     * @return RetrievalMethodType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
