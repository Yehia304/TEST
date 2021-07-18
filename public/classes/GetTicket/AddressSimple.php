<?php

class AddressSimple
{

    /**
     * @var StringLength1to255[] $Line
     */
    protected $Line = null;

    /**
     * @var StringLength1to64 $City
     */
    protected $City = null;

    /**
     * @var StringLength1to64 $StateProv
     */
    protected $StateProv = null;

    /**
     * @var StringLength1to64 $Country
     */
    protected $Country = null;

    /**
     * @var StringLength1to16 $PostalCode
     */
    protected $PostalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringLength1to255[]
     */
    public function getLine()
    {
      return $this->Line;
    }

    /**
     * @param StringLength1to255[] $Line
     * @return Address.Simple
     */
    public function setLine(array $Line = null)
    {
      $this->Line = $Line;
      return $this;
    }

    /**
     * @return StringLength1to64
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param StringLength1to64 $City
     * @return Address.Simple
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return StringLength1to64
     */
    public function getStateProv()
    {
      return $this->StateProv;
    }

    /**
     * @param StringLength1to64 $StateProv
     * @return Address.Simple
     */
    public function setStateProv($StateProv)
    {
      $this->StateProv = $StateProv;
      return $this;
    }

    /**
     * @return StringLength1to64
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param StringLength1to64 $Country
     * @return Address.Simple
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param StringLength1to16 $PostalCode
     * @return Address.Simple
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

}
