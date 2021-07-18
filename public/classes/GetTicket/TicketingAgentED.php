<?php

class TicketingAgentED
{

    /**
     * @var CodeTicketingProviderCode $TicketingProvider
     */
    protected $TicketingProvider = null;

    /**
     * @var IdentifierLocationExtended $WorkLocation
     */
    protected $WorkLocation = null;

    /**
     * @var IdentifierLocation $HomeLocation
     */
    protected $HomeLocation = null;

    /**
     * @var CountryCode $IsoCountryCode
     */
    protected $IsoCountryCode = null;

    /**
     * @var IdentifierIndustry $IataNumber
     */
    protected $IataNumber = null;

    /**
     * @var StringLength1to128 $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var CRSCode $CRSCode
     */
    protected $CRSCode = null;

    /**
     * @var CodeAgentType $type
     */
    protected $type = null;

    /**
     * @var AgentSine $sine
     */
    protected $sine = null;

    /**
     * @param CodeAgentType $type
     * @param AgentSine $sine
     */
    public function __construct($type, $sine)
    {
      $this->type = $type;
      $this->sine = $sine;
    }

    /**
     * @return CodeTicketingProviderCode
     */
    public function getTicketingProvider()
    {
      return $this->TicketingProvider;
    }

    /**
     * @param CodeTicketingProviderCode $TicketingProvider
     * @return Ticketing.Agent.ED
     */
    public function setTicketingProvider($TicketingProvider)
    {
      $this->TicketingProvider = $TicketingProvider;
      return $this;
    }

    /**
     * @return IdentifierLocationExtended
     */
    public function getWorkLocation()
    {
      return $this->WorkLocation;
    }

    /**
     * @param IdentifierLocationExtended $WorkLocation
     * @return Ticketing.Agent.ED
     */
    public function setWorkLocation($WorkLocation)
    {
      $this->WorkLocation = $WorkLocation;
      return $this;
    }

    /**
     * @return IdentifierLocation
     */
    public function getHomeLocation()
    {
      return $this->HomeLocation;
    }

    /**
     * @param IdentifierLocation $HomeLocation
     * @return Ticketing.Agent.ED
     */
    public function setHomeLocation($HomeLocation)
    {
      $this->HomeLocation = $HomeLocation;
      return $this;
    }

    /**
     * @return CountryCode
     */
    public function getIsoCountryCode()
    {
      return $this->IsoCountryCode;
    }

    /**
     * @param CountryCode $IsoCountryCode
     * @return Ticketing.Agent.ED
     */
    public function setIsoCountryCode($IsoCountryCode)
    {
      $this->IsoCountryCode = $IsoCountryCode;
      return $this;
    }

    /**
     * @return IdentifierIndustry
     */
    public function getIataNumber()
    {
      return $this->IataNumber;
    }

    /**
     * @param IdentifierIndustry $IataNumber
     * @return Ticketing.Agent.ED
     */
    public function setIataNumber($IataNumber)
    {
      $this->IataNumber = $IataNumber;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param StringLength1to128 $CompanyName
     * @return Ticketing.Agent.ED
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return CRSCode
     */
    public function getCRSCode()
    {
      return $this->CRSCode;
    }

    /**
     * @param CRSCode $CRSCode
     * @return Ticketing.Agent.ED
     */
    public function setCRSCode($CRSCode)
    {
      $this->CRSCode = $CRSCode;
      return $this;
    }

    /**
     * @return CodeAgentType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodeAgentType $type
     * @return Ticketing.Agent.ED
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return AgentSine
     */
    public function getSine()
    {
      return $this->sine;
    }

    /**
     * @param AgentSine $sine
     * @return Ticketing.Agent.ED
     */
    public function setSine($sine)
    {
      $this->sine = $sine;
      return $this;
    }

}
