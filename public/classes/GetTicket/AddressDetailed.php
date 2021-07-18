<?php

class AddressDetailed
{

    /**
     * @var Building[] $Building
     */
    protected $Building = null;

    /**
     * @var Street $Street
     */
    protected $Street = null;

    /**
     * @var StringLength1to64 $City
     */
    protected $City = null;

    /**
     * @var StringLength1to32 $County
     */
    protected $County = null;

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
     * @return Building[]
     */
    public function getBuilding()
    {
      return $this->Building;
    }

    /**
     * @param Building[] $Building
     * @return Address.Detailed
     */
    public function setBuilding(array $Building = null)
    {
      $this->Building = $Building;
      return $this;
    }

    /**
     * @return Street
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param Street $Street
     * @return Address.Detailed
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
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
     * @return Address.Detailed
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return StringLength1to32
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param StringLength1to32 $County
     * @return Address.Detailed
     */
    public function setCounty($County)
    {
      $this->County = $County;
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
     * @return Address.Detailed
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
     * @return Address.Detailed
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
     * @return Address.Detailed
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

}
