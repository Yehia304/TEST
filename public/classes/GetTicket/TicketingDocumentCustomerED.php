<?php

class TicketingDocumentCustomerED
{

    /**
     * @var CustomerTravelerDetailsED $Traveler
     */
    protected $Traveler = null;

    /**
     * @param CustomerTravelerDetailsED $Traveler
     */
    public function __construct($Traveler)
    {
      $this->Traveler = $Traveler;
    }

    /**
     * @return CustomerTravelerDetailsED
     */
    public function getTraveler()
    {
      return $this->Traveler;
    }

    /**
     * @param CustomerTravelerDetailsED $Traveler
     * @return TicketingDocument.Customer.ED
     */
    public function setTraveler($Traveler)
    {
      $this->Traveler = $Traveler;
      return $this;
    }

}
