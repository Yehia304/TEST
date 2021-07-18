<?php

class IdentifierReservation
{

    /**
     * @var PNR_Locator $_
     */
    protected $_ = null;

    /**
     * @var CodeTicketingProviderCode $provider
     */
    protected $provider = null;

    /**
     * @var \DateTime $purgeDate
     */
    protected $purgeDate = null;

    /**
     * @var \DateTime $createDate
     */
    protected $createDate = null;

    /**
     * @param PNR_Locator $_
     * @param CodeTicketingProviderCode $provider
     * @param \DateTime $purgeDate
     * @param \DateTime $createDate
     */
    public function __construct($_, $provider, \DateTime $purgeDate, \DateTime $createDate)
    {
      $this->_ = $_;
      $this->provider = $provider;
      $this->purgeDate = $purgeDate->format(\DateTime::ATOM);
      $this->createDate = $createDate->format(\DateTime::ATOM);
    }

    /**
     * @return PNR_Locator
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param PNR_Locator $_
     * @return Identifier.Reservation
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
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
     * @return Identifier.Reservation
     */
    public function setProvider($provider)
    {
      $this->provider = $provider;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPurgeDate()
    {
      if ($this->purgeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->purgeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $purgeDate
     * @return Identifier.Reservation
     */
    public function setPurgeDate(\DateTime $purgeDate)
    {
      $this->purgeDate = $purgeDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->createDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createDate
     * @return Identifier.Reservation
     */
    public function setCreateDate(\DateTime $createDate)
    {
      $this->createDate = $createDate->format(\DateTime::ATOM);
      return $this;
    }

}
