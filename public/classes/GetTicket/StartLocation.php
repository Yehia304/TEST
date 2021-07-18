<?php

class StartLocation
{

    /**
     * @var CityCode $_
     */
    protected $_ = null;

    /**
     * @var StringLocationName $name
     */
    protected $name = null;

    /**
     * @param CityCode $_
     * @param StringLocationName $name
     */
    public function __construct($_, $name)
    {
      $this->_ = $_;
      $this->name = $name;
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
     * @return StartLocation
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return StringLocationName
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param StringLocationName $name
     * @return StartLocation
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
