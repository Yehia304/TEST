<?php

class PaymentRevenueAccounting
{

    /**
     * @var StringLength1to10 $Number
     */
    protected $Number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringLength1to10
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param StringLength1to10 $Number
     * @return Payment.RevenueAccounting
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
