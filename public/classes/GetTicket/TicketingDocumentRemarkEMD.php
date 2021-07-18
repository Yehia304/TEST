<?php

class TicketingDocumentRemarkEMD
{

    /**
     * @var RemarkDetails $Endorsements
     */
    protected $Endorsements = null;

    /**
     * @var RemarkDetails $Manual
     */
    protected $Manual = null;

    /**
     * @var Remark.DetailsWithHeader[] $Passenger
     */
    protected $Passenger = null;

    /**
     * @var Remark.DetailsWithType[] $Other
     */
    protected $Other = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RemarkDetails
     */
    public function getEndorsements()
    {
      return $this->Endorsements;
    }

    /**
     * @param RemarkDetails $Endorsements
     * @return TicketingDocument.Remark.EMD
     */
    public function setEndorsements($Endorsements)
    {
      $this->Endorsements = $Endorsements;
      return $this;
    }

    /**
     * @return RemarkDetails
     */
    public function getManual()
    {
      return $this->Manual;
    }

    /**
     * @param RemarkDetails $Manual
     * @return TicketingDocument.Remark.EMD
     */
    public function setManual($Manual)
    {
      $this->Manual = $Manual;
      return $this;
    }

    /**
     * @return Remark.DetailsWithHeader[]
     */
    public function getPassenger()
    {
      return $this->Passenger;
    }

    /**
     * @param Remark.DetailsWithHeader[] $Passenger
     * @return TicketingDocument.Remark.EMD
     */
    public function setPassenger(array $Passenger = null)
    {
      $this->Passenger = $Passenger;
      return $this;
    }

    /**
     * @return Remark.DetailsWithType[]
     */
    public function getOther()
    {
      return $this->Other;
    }

    /**
     * @param Remark.DetailsWithType[] $Other
     * @return TicketingDocument.Remark.EMD
     */
    public function setOther(array $Other = null)
    {
      $this->Other = $Other;
      return $this;
    }

}
