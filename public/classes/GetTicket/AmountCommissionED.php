<?php

class AmountCommissionED extends AmountRate
{

    /**
     * @var CodeTicketingProviderCode $provider
     */
    protected $provider = null;

    /**
     * @param CodeTicketingProviderCode $provider
     */
    public function __construct($provider)
    {
      parent::__construct();
      $this->provider = $provider;
    }

    /**
     * @return CodeTicketingProviderCode
     */
    public function getProvider()
    {
      return $this->provider;
    }

    /**
     * @param CodeTicketingProviderCode $provider
     * @return Amount.Commission.ED
     */
    public function setProvider($provider)
    {
      $this->provider = $provider;
      return $this;
    }

}
