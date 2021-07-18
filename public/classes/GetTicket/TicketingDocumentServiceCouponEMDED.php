<?php

class TicketingDocumentServiceCouponEMDED
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
     * @var CodeServiceCouponStatus $CouponStatus
     */
    protected $CouponStatus = null;

    /**
     * @var NumberCouponSequence $coupon
     */
    protected $coupon = null;

    /**
     * @var StringItemDescription $description
     */
    protected $description = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @param IdentifierProvider $MarketingProvider
     * @param CodeServiceCouponStatus $CouponStatus
     * @param NumberCouponSequence $coupon
     * @param StringItemDescription $description
     * @param int $quantity
     */
    public function __construct($MarketingProvider, $CouponStatus, $coupon, $description, $quantity)
    {
      $this->MarketingProvider = $MarketingProvider;
      $this->CouponStatus = $CouponStatus;
      $this->coupon = $coupon;
      $this->description = $description;
      $this->quantity = $quantity;
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
     */
    public function setBookingStatus($BookingStatus)
    {
      $this->BookingStatus = $BookingStatus;
      return $this;
    }

    /**
     * @return CodeServiceCouponStatus
     */
    public function getCouponStatus()
    {
      return $this->CouponStatus;
    }

    /**
     * @param CodeServiceCouponStatus $CouponStatus
     * @return TicketingDocument.ServiceCoupon.EMD.ED
     */
    public function setCouponStatus($CouponStatus)
    {
      $this->CouponStatus = $CouponStatus;
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
     * @return TicketingDocument.ServiceCoupon.EMD.ED
     */
    public function setCoupon($coupon)
    {
      $this->coupon = $coupon;
      return $this;
    }

    /**
     * @return StringItemDescription
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param StringItemDescription $description
     * @return TicketingDocument.ServiceCoupon.EMD.ED
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return TicketingDocument.ServiceCoupon.EMD.ED
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

}
