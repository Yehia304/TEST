<?php

class PaymentGovernmentTravel
{

    /**
     * @var StringLength1to13 $Number
     */
    protected $Number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringLength1to13
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param StringLength1to13 $Number
     * @return Payment.GovernmentTravel
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
