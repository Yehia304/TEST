<?php

class AffinityFrequentFlyerED
{

    /**
     * @var CodeTicketingProviderCode $Provider
     */
    protected $Provider = null;

    /**
     * @var IdentifierAffinity $Number
     */
    protected $Number = null;

    /**
     * @param CodeTicketingProviderCode $Provider
     * @param IdentifierAffinity $Number
     */
    public function __construct($Provider, $Number)
    {
      $this->Provider = $Provider;
      $this->Number = $Number;
    }

    /**
     * @return CodeTicketingProviderCode
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param CodeTicketingProviderCode $Provider
     * @return Affinity.FrequentFlyer.ED
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
      return $this;
    }

    /**
     * @return IdentifierAffinity
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param IdentifierAffinity $Number
     * @return Affinity.FrequentFlyer.ED
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
