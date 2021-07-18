<?php

class IdentifierSystem
{

    /**
     * @var Identifier $_
     */
    protected $_ = null;

    /**
     * @var Identifier $appInstance
     */
    protected $appInstance = null;

    /**
     * @var Identifier $cluster
     */
    protected $cluster = null;

    /**
     * @var Identifier $host
     */
    protected $host = null;

    /**
     * @param Identifier $_
     * @param Identifier $appInstance
     * @param Identifier $cluster
     * @param Identifier $host
     */
    public function __construct($_, $appInstance, $cluster, $host)
    {
      $this->_ = $_;
      $this->appInstance = $appInstance;
      $this->cluster = $cluster;
      $this->host = $host;
    }

    /**
     * @return Identifier
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Identifier $_
     * @return Identifier.System
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getAppInstance()
    {
      return $this->appInstance;
    }

    /**
     * @param Identifier $appInstance
     * @return Identifier.System
     */
    public function setAppInstance($appInstance)
    {
      $this->appInstance = $appInstance;
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getCluster()
    {
      return $this->cluster;
    }

    /**
     * @param Identifier $cluster
     * @return Identifier.System
     */
    public function setCluster($cluster)
    {
      $this->cluster = $cluster;
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getHost()
    {
      return $this->host;
    }

    /**
     * @param Identifier $host
     * @return Identifier.System
     */
    public function setHost($host)
    {
      $this->host = $host;
      return $this;
    }

}
