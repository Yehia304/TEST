<?php

class ServiceCouponInvoluntaryReroute
{

    /**
     * @var CodeInvoluntaryReason $Reason
     */
    protected $Reason = null;

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @var CodeTicketingProviderCode $Provider
     */
    protected $Provider = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CodeInvoluntaryReason
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param CodeInvoluntaryReason $Reason
     * @return ServiceCoupon.InvoluntaryReroute
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return ServiceCoupon.InvoluntaryReroute
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
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
     * @return ServiceCoupon.InvoluntaryReroute
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
      return $this;
    }

}
