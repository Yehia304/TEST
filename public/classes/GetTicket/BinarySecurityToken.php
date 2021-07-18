<?php

class BinarySecurityToken
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $valueType
     */
    protected $valueType = null;

    /**
     * @var string $EncodingType
     */
    protected $EncodingType = null;

    /**
     * @param string $_
     * @param string $valueType
     * @param string $EncodingType
     */
    public function __construct($_, $valueType, $EncodingType)
    {
      $this->_ = $_;
      $this->valueType = $valueType;
      $this->EncodingType = $EncodingType;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return BinarySecurityToken
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
      return $this->valueType;
    }

    /**
     * @param string $valueType
     * @return BinarySecurityToken
     */
    public function setValueType($valueType)
    {
      $this->valueType = $valueType;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncodingType()
    {
      return $this->EncodingType;
    }

    /**
     * @param string $EncodingType
     * @return BinarySecurityToken
     */
    public function setEncodingType($EncodingType)
    {
      $this->EncodingType = $EncodingType;
      return $this;
    }

}
