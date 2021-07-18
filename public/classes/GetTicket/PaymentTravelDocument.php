<?php

class PaymentTravelDocument
{

    /**
     * @var float $Number
     */
    protected $Number = null;

    /**
     * @var \DateTime $Expiration
     */
    protected $Expiration = null;

    /**
     * @var \DateTime $Issue
     */
    protected $Issue = null;

    /**
     * @var Amount $Amount
     */
    protected $Amount = null;

    /**
     * @var StringFormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var StringProperName $PlaceOfIssuance
     */
    protected $PlaceOfIssuance = null;

    /**
     * @var StringServiceCoupon $ServiceCoupon
     */
    protected $ServiceCoupon = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param float $Number
     * @return Payment.TravelDocument
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiration()
    {
      if ($this->Expiration == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Expiration);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Expiration
     * @return Payment.TravelDocument
     */
    public function setExpiration(\DateTime $Expiration = null)
    {
      if ($Expiration == null) {
       $this->Expiration = null;
      } else {
        $this->Expiration = $Expiration->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssue()
    {
      if ($this->Issue == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Issue);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Issue
     * @return Payment.TravelDocument
     */
    public function setIssue(\DateTime $Issue = null)
    {
      if ($Issue == null) {
       $this->Issue = null;
      } else {
        $this->Issue = $Issue->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param Amount $Amount
     * @return Payment.TravelDocument
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return StringFormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param StringFormOfPayment $FormOfPayment
     * @return Payment.TravelDocument
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return StringProperName
     */
    public function getPlaceOfIssuance()
    {
      return $this->PlaceOfIssuance;
    }

    /**
     * @param StringProperName $PlaceOfIssuance
     * @return Payment.TravelDocument
     */
    public function setPlaceOfIssuance($PlaceOfIssuance)
    {
      $this->PlaceOfIssuance = $PlaceOfIssuance;
      return $this;
    }

    /**
     * @return StringServiceCoupon
     */
    public function getServiceCoupon()
    {
      return $this->ServiceCoupon;
    }

    /**
     * @param StringServiceCoupon $ServiceCoupon
     * @return Payment.TravelDocument
     */
    public function setServiceCoupon($ServiceCoupon)
    {
      $this->ServiceCoupon = $ServiceCoupon;
      return $this;
    }

}
