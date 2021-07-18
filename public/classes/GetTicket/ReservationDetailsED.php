<?php

class ReservationDetailsED
{

    /**
     * @var PNR_Locator $Sabre
     */
    protected $Sabre = null;

    /**
     * @var PNR_Locator $OtherSystem
     */
    protected $OtherSystem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNR_Locator
     */
    public function getSabre()
    {
      return $this->Sabre;
    }

    /**
     * @param PNR_Locator $Sabre
     * @return Reservation.Details.ED
     */
    public function setSabre($Sabre)
    {
      $this->Sabre = $Sabre;
      return $this;
    }

    /**
     * @return PNR_Locator
     */
    public function getOtherSystem()
    {
      return $this->OtherSystem;
    }

    /**
     * @param PNR_Locator $OtherSystem
     * @return Reservation.Details.ED
     */
    public function setOtherSystem($OtherSystem)
    {
      $this->OtherSystem = $OtherSystem;
      return $this;
    }

}
