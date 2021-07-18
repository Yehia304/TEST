<?php

class SchemaCustom
{

    /**
     * @var anyURI $location
     */
    protected $location = null;

    /**
     * @var nonemptystring $version
     */
    protected $version = null;

    /**
     * @param anyURI $location
     * @param nonemptystring $version
     */
    public function __construct($location, $version)
    {
      $this->location = $location;
      $this->version = $version;
    }

    /**
     * @return anyURI
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param anyURI $location
     * @return Schema
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return Schema
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
