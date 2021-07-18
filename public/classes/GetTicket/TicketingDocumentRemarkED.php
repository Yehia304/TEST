<?php

class TicketingDocumentRemarkED
{

    /**
     * @var Remark.DetailsWithType[] $Endorsements
     */
    protected $Endorsements = null;

    /**
     * @var RemarkDetails $Manual
     */
    protected $Manual = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Remark.DetailsWithType[]
     */
    public function getEndorsements()
    {
      return $this->Endorsements;
    }

    /**
     * @param Remark.DetailsWithType[] $Endorsements
     * @return TicketingDocument.Remark.ED
     */
    public function setEndorsements(array $Endorsements = null)
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
     * @return TicketingDocument.Remark.ED
     */
    public function setManual($Manual)
    {
      $this->Manual = $Manual;
      return $this;
    }

}
