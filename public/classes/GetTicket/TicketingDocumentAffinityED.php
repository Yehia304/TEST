<?php

class TicketingDocumentAffinityED
{

    /**
     * @var AffinityFrequentFlyerED $FrequentFlyer
     */
    protected $FrequentFlyer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AffinityFrequentFlyerED
     */
    public function getFrequentFlyer()
    {
      return $this->FrequentFlyer;
    }

    /**
     * @param AffinityFrequentFlyerED $FrequentFlyer
     * @return TicketingDocument.Affinity.ED
     */
    public function setFrequentFlyer($FrequentFlyer)
    {
      $this->FrequentFlyer = $FrequentFlyer;
      return $this;
    }

}
