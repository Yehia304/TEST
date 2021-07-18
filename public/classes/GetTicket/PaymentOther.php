<?php

class PaymentOther
{

    /**
     * @var StringFormOfPayment $Details
     */
    protected $Details = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringFormOfPayment
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param StringFormOfPayment $Details
     * @return Payment.Other
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

}
