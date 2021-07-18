<?php

class LocationPOS
{

    /**
     * @var CityCode $_
     */
    protected $_ = null;

    /**
     * @var CountryCode $country
     */
    protected $country = null;

    /**
     * @var AlphaLength2 $province
     */
    protected $province = null;

    /**
     * @var AlphaNumericStringLength1to8 $number
     */
    protected $number = null;

    /**
     * @param CityCode $_
     * @param CountryCode $country
     * @param AlphaLength2 $province
     * @param AlphaNumericStringLength1to8 $number
     */
    public function __construct($_, $country, $province, $number)
    {
      $this->_ = $_;
      $this->country = $country;
      $this->province = $province;
      $this->number = $number;
    }

    /**
     * @return CityCode
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param CityCode $_
     * @return Location.POS
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return CountryCode
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param CountryCode $country
     * @return Location.POS
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return AlphaLength2
     */
    public function getProvince()
    {
      return $this->province;
    }

    /**
     * @param AlphaLength2 $province
     * @return Location.POS
     */
    public function setProvince($province)
    {
      $this->province = $province;
      return $this;
    }

    /**
     * @return AlphaNumericStringLength1to8
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param AlphaNumericStringLength1to8 $number
     * @return Location.POS
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
