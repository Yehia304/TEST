<?php

class MessagingRecords
{

    /**
     * @var MessagingSystemRecord $ServiceRequestor
     */
    protected $ServiceRequestor = null;

    /**
     * @var MessagingSystemRecord[] $RequestProxies
     */
    protected $RequestProxies = null;

    /**
     * @var MessagingSystemRecord $ServiceProvider
     */
    protected $ServiceProvider = null;

    /**
     * @var MessagingSystemRecord[] $ResponseProxies
     */
    protected $ResponseProxies = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MessagingSystemRecord
     */
    public function getServiceRequestor()
    {
      return $this->ServiceRequestor;
    }

    /**
     * @param MessagingSystemRecord $ServiceRequestor
     * @return MessagingRecords
     */
    public function setServiceRequestor($ServiceRequestor)
    {
      $this->ServiceRequestor = $ServiceRequestor;
      return $this;
    }

    /**
     * @return MessagingSystemRecord[]
     */
    public function getRequestProxies()
    {
      return $this->RequestProxies;
    }

    /**
     * @param MessagingSystemRecord[] $RequestProxies
     * @return MessagingRecords
     */
    public function setRequestProxies(array $RequestProxies = null)
    {
      $this->RequestProxies = $RequestProxies;
      return $this;
    }

    /**
     * @return MessagingSystemRecord
     */
    public function getServiceProvider()
    {
      return $this->ServiceProvider;
    }

    /**
     * @param MessagingSystemRecord $ServiceProvider
     * @return MessagingRecords
     */
    public function setServiceProvider($ServiceProvider)
    {
      $this->ServiceProvider = $ServiceProvider;
      return $this;
    }

    /**
     * @return MessagingSystemRecord[]
     */
    public function getResponseProxies()
    {
      return $this->ResponseProxies;
    }

    /**
     * @param MessagingSystemRecord[] $ResponseProxies
     * @return MessagingRecords
     */
    public function setResponseProxies(array $ResponseProxies = null)
    {
      $this->ResponseProxies = $ResponseProxies;
      return $this;
    }

}
