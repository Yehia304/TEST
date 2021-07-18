<?php

class TicketingDocumentServiceCouponTicketED
{

    /**
     * @var IdentifierProvider $MarketingProvider
     */
    protected $MarketingProvider = null;

    /**
     * @var FlightNumber $MarketingFlightNumber
     */
    protected $MarketingFlightNumber = null;

    /**
     * @var IdentifierProvider $OperatingProvider
     */
    protected $OperatingProvider = null;

    /**
     * @var ClassOfServiceDetails $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @var CodeFareBasis $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var CodeTicketFareDesignator $TicketDesignator
     */
    protected $TicketDesignator = null;

    /**
     * @var StartLocation $StartLocation
     */
    protected $StartLocation = null;

    /**
     * @var \DateTime $StartDateTime
     */
    protected $StartDateTime = null;

    /**
     * @var EndLocation $EndLocation
     */
    protected $EndLocation = null;

    /**
     * @var \DateTime $EndDateTime
     */
    protected $EndDateTime = null;

    /**
     * @var date $NotValidBeforeDate
     */
    protected $NotValidBeforeDate = null;

    /**
     * @var date $NotValidAfterDate
     */
    protected $NotValidAfterDate = null;

    /**
     * @var IdentifierTicketingSettlementAuthorization $SettlementAuthorization
     */
    protected $SettlementAuthorization = null;

    /**
     * @var BookingStatus $BookingStatus
     */
    protected $BookingStatus = null;

    /**
     * @var CodeServiceCouponStatus $CurrentStatus
     */
    protected $CurrentStatus = null;

    /**
     * @var CodeBaggageAllowance $BagAllowance
     */
    protected $BagAllowance = null;

    /**
     * @var NumberCouponSequence $coupon
     */
    protected $coupon = null;

    /**
     * @var CodeSegmentType $type
     */
    protected $type = null;

    /**
     * @param NumberCouponSequence $coupon
     * @param CodeSegmentType $type
     */
    public function __construct($coupon, $type)
    {
      $this->coupon = $coupon;
      $this->type = $type;
    }

    /**
     * @return IdentifierProvider
     */
    public function getMarketingProvider()
    {
      return $this->MarketingProvider;
    }

    /**
     * @param IdentifierProvider $MarketingProvider
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setMarketingProvider($MarketingProvider)
    {
      $this->MarketingProvider = $MarketingProvider;
      return $this;
    }

    /**
     * @return FlightNumber
     */
    public function getMarketingFlightNumber()
    {
      return $this->MarketingFlightNumber;
    }

    /**
     * @param FlightNumber $MarketingFlightNumber
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setMarketingFlightNumber($MarketingFlightNumber)
    {
      $this->MarketingFlightNumber = $MarketingFlightNumber;
      return $this;
    }

    /**
     * @return IdentifierProvider
     */
    public function getOperatingProvider()
    {
      return $this->OperatingProvider;
    }

    /**
     * @param IdentifierProvider $OperatingProvider
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setOperatingProvider($OperatingProvider)
    {
      $this->OperatingProvider = $OperatingProvider;
      return $this;
    }

    /**
     * @return ClassOfServiceDetails
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param ClassOfServiceDetails $ClassOfService
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

    /**
     * @return CodeFareBasis
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param CodeFareBasis $FareBasis
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return CodeTicketFareDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param CodeTicketFareDesignator $TicketDesignator
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

    /**
     * @return StartLocation
     */
    public function getStartLocation()
    {
      return $this->StartLocation;
    }

    /**
     * @param StartLocation $StartLocation
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setStartLocation($StartLocation)
    {
      $this->StartLocation = $StartLocation;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
      if ($this->StartDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDateTime
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setStartDateTime(\DateTime $StartDateTime = null)
    {
      if ($StartDateTime == null) {
       $this->StartDateTime = null;
      } else {
        $this->StartDateTime = $StartDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return EndLocation
     */
    public function getEndLocation()
    {
      return $this->EndLocation;
    }

    /**
     * @param EndLocation $EndLocation
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setEndLocation($EndLocation)
    {
      $this->EndLocation = $EndLocation;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime()
    {
      if ($this->EndDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDateTime
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setEndDateTime(\DateTime $EndDateTime = null)
    {
      if ($EndDateTime == null) {
       $this->EndDateTime = null;
      } else {
        $this->EndDateTime = $EndDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidBeforeDate()
    {
      return $this->NotValidBeforeDate;
    }

    /**
     * @param date $NotValidBeforeDate
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setNotValidBeforeDate($NotValidBeforeDate)
    {
      $this->NotValidBeforeDate = $NotValidBeforeDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidAfterDate()
    {
      return $this->NotValidAfterDate;
    }

    /**
     * @param date $NotValidAfterDate
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setNotValidAfterDate($NotValidAfterDate)
    {
      $this->NotValidAfterDate = $NotValidAfterDate;
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
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setSettlementAuthorization($SettlementAuthorization)
    {
      $this->SettlementAuthorization = $SettlementAuthorization;
      return $this;
    }

    /**
     * @return BookingStatus
     */
    public function getBookingStatus()
    {
      return $this->BookingStatus;
    }

    /**
     * @param BookingStatus $BookingStatus
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setBookingStatus($BookingStatus)
    {
      $this->BookingStatus = $BookingStatus;
      return $this;
    }

    /**
     * @return CodeServiceCouponStatus
     */
    public function getCurrentStatus()
    {
      return $this->CurrentStatus;
    }

    /**
     * @param CodeServiceCouponStatus $CurrentStatus
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setCurrentStatus($CurrentStatus)
    {
      $this->CurrentStatus = $CurrentStatus;
      return $this;
    }

    /**
     * @return CodeBaggageAllowance
     */
    public function getBagAllowance()
    {
      return $this->BagAllowance;
    }

    /**
     * @param CodeBaggageAllowance $BagAllowance
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setBagAllowance($BagAllowance)
    {
      $this->BagAllowance = $BagAllowance;
      return $this;
    }

    /**
     * @return NumberCouponSequence
     */
    public function getCoupon()
    {
      return $this->coupon;
    }

    /**
     * @param NumberCouponSequence $coupon
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setCoupon($coupon)
    {
      $this->coupon = $coupon;
      return $this;
    }

    /**
     * @return CodeSegmentType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodeSegmentType $type
     * @return TicketingDocument.ServiceCoupon.Ticket.ED
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
