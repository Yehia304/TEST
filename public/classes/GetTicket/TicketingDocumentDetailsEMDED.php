<?php

class TicketingDocumentDetailsEMDED
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
     * @var IdentifierProvider $ValidatingProvider
     */
    protected $ValidatingProvider = null;

    /**
     * @var CodeItineraryType $ItineraryType
     */
    protected $ItineraryType = null;

    /**
     * @var IdentifierTicketingSettlementAuthorization $SettlementAuthorization
     */
    protected $SettlementAuthorization = null;

    /**
     * @var CodeElectronicMiscType $ElectronicMiscType
     */
    protected $ElectronicMiscType = null;

    /**
     * @var CodeTicketingDocumentReasonIssuanceCode_ATPCO_RFIC $ReasonForIssue
     */
    protected $ReasonForIssue = null;

    /**
     * @var NumberInvoice $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var NumberAgencyBilling $AgencyBillingNumber
     */
    protected $AgencyBillingNumber = null;

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
     * @return TicketingDocument.Details.EMD.ED
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
     * @return TicketingDocument.Details.EMD.ED
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
     * @return TicketingDocument.Details.EMD.ED
     */
    public function setLocalIssueDateTime(\DateTime $LocalIssueDateTime)
    {
      $this->LocalIssueDateTime = $LocalIssueDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return IdentifierProvider
     */
    public function getValidatingProvider()
    {
      return $this->ValidatingProvider;
    }

    /**
     * @param IdentifierProvider $ValidatingProvider
     * @return TicketingDocument.Details.EMD.ED
     */
    public function setValidatingProvider($ValidatingProvider)
    {
      $this->ValidatingProvider = $ValidatingProvider;
      return $this;
    }

    /**
     * @return CodeItineraryType
     */
    public function getItineraryType()
    {
      return $this->ItineraryType;
    }

    /**
     * @param CodeItineraryType $ItineraryType
     * @return TicketingDocument.Details.EMD.ED
     */
    public function setItineraryType($ItineraryType)
    {
      $this->ItineraryType = $ItineraryType;
      return $this;
    }

    /**
     * @return IdentifierTicketingSettlementAuthorization
     */
    public function getSettlementAuthorization()
    {
      return $this->SettlementAuthorization;
    }

    /**
     * @param IdentifierTicketingSettlementAuthorization $SettlementAuthorization
     * @return TicketingDocument.Details.EMD.ED
     */
    public function setSettlementAuthorization($SettlementAuthorization)
    {
      $this->SettlementAuthorization = $SettlementAuthorization;
      return $this;
    }

    /**
     * @return CodeElectronicMiscType
     */
    public function getElectronicMiscType()
    {
      return $this->ElectronicMiscType;
    }

    /**
     * @param CodeElectronicMiscType $ElectronicMiscType
     * @return TicketingDocument.Details.EMD.ED
     */
    public function setElectronicMiscType($ElectronicMiscType)
    {
      $this->ElectronicMiscType = $ElectronicMiscType;
      return $this;
    }

    /**
     * @return CodeTicketingDocumentReasonIssuanceCode_ATPCO_RFIC
     */
    public function getReasonForIssue()
    {
      return $this->ReasonForIssue;
    }

    /**
     * @param CodeTicketingDocumentReasonIssuanceCode_ATPCO_RFIC $ReasonForIssue
     * @return TicketingDocument.Details.EMD.ED
     */
    public function setReasonForIssue($ReasonForIssue)
    {
      $this->ReasonForIssue = $ReasonForIssue;
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
     * @return TicketingDocument.Details.EMD.ED
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
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
     * @return TicketingDocument.Details.EMD.ED
     */
    public function setAgencyBillingNumber($AgencyBillingNumber)
    {
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      return $this;
    }

}
