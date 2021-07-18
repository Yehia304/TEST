<?php

class Telephone
{

    /**
     * @var PhoneNumber $_
     */
    protected $_ = null;

    /**
     * @var UNKNOWN $location
     */
    protected $location = null;

    /**
     * @var StringLength1to5 $use
     */
    protected $use = null;

    /**
     * @var UNKNOWN $countryCode
     */
    protected $countryCode = null;

    /**
     * @var UNKNOWN $extension
     */
    protected $extension = null;

    /**
     * @var UNKNOWN $remark
     */
    protected $remark = null;

    /**
     * @param PhoneNumber $_
     * @param UNKNOWN $location
     * @param StringLength1to5 $use
     * @param UNKNOWN $countryCode
     * @param UNKNOWN $extension
     * @param UNKNOWN $remark
     */
    public function __construct($_, $location, $use, $countryCode, $extension, $remark)
    {
      $this->_ = $_;
      $this->location = $location;
      $this->use = $use;
      $this->countryCode = $countryCode;
      $this->extension = $extension;
      $this->remark = $remark;
    }

    /**
     * @return PhoneNumber
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param PhoneNumber $_
     * @return Telephone
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param UNKNOWN $location
     * @return Telephone
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return StringLength1to5
     */
    public function getUse()
    {
      return $this->use;
    }

    /**
     * @param StringLength1to5 $use
     * @return Telephone
     */
    public function setUse($use)
    {
      $this->use = $use;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param UNKNOWN $countryCode
     * @return Telephone
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getExtension()
    {
      return $this->extension;
    }

    /**
     * @param UNKNOWN $extension
     * @return Telephone
     */
    public function setExtension($extension)
    {
      $this->extension = $extension;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getRemark()
    {
      return $this->remark;
    }

    /**
     * @param UNKNOWN $remark
     * @return Telephone
     */
    public function setRemark($remark)
    {
      $this->remark = $remark;
      return $this;
    }

}
