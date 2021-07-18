<?php

class TicketingDocumentDetailsTicketED
{

    /**
     * @var IdentifierTour $TourNumber
     */
    protected $TourNumber = null;

    /**
     * @var ReservationDetailsED $Reservation
     */
    protected $Reservation = null;

    /**
     * @var \DateTime $LocalIssueDateTime
     */
    protected $LocalIssueDateTime = null;

    /**
     * @var NumberAgencyBilling $AgencyBillingNumber
     */
    protected $AgencyBillingNumber = null;

    /**
     * @var NumberInvoice $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var CodeFareCalculationPricing $FareCalculationPricing
     */
    protected $FareCalculationPricing = null;

    /**
     * @param \DateTime $LocalIssueDateTime
     */
    public function __construct(\DateTime $LocalIssueDateTime)
    {
      $this->LocalIssueDateTime = $LocalIssueDateTime->format(\DateTime::ATOM);
    }

    /**
     * @return IdentifierTour
     */
    public function getTourNumber()
    {
      return $this->TourNumber;
    }

    /**
     * @param IdentifierTour $TourNumber
     * @return TicketingDocument.Details.Ticket.ED
     */
    public function setTourNumber($TourNumber)
    {
      $this->TourNumber = $TourNumber;
      return $this;
    }

    /**
     * @return ReservationDetailsED
     */
    public function getReservation()
    {
      return $this->Reservation;
    }

    /**
     * @param ReservationDetailsED $Reservation
     * @return TicketingDocument.Details.Ticket.ED
     */
    public function setReservation($Reservation)
    {
      $this->Reservation = $Reservation;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLocalIssueDateTime()
    {
      if ($this->LocalIssueDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LocalIssueDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LocalIssueDateTime
     * @return TicketingDocument.Details.Ticket.ED
     */
    public function setLocalIssueDateTime(\DateTime $LocalIssueDateTime)
    {
      $this->LocalIssueDateTime = $LocalIssueDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return NumberAgencyBilling
     */
    public function getAgencyBillingNumber()
    {
      return $this->AgencyBillingNumber;
    }

    /**
     * @param NumberAgencyBilling $AgencyBillingNumber
     * @return TicketingDocument.Details.Ticket.ED
     */
    public function setAgencyBillingNumber($AgencyBillingNumber)
    {
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      return $this;
    }

    /**
     * @return NumberInvoice
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param NumberInvoice $InvoiceNumber
     * @return TicketingDocument.Details.Ticket.ED
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return CodeFareCalculationPricing
     */
    public function getFareCalculationPricing()
    {
      return $this->FareCalculationPricing;
    }

    /**
     * @param CodeFareCalculationPricing $FareCalculationPricing
     * @return TicketingDocument.Details.Ticket.ED
     */
    public function setFareCalculationPricing($FareCalculationPricing)
    {
      $this->FareCalculationPricing = $FareCalculationPricing;
      return $this;
    }

}
