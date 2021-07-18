<?php

class PaymentCertficate
{

    /**
     * @var StringLength1to14 $Number
     */
    protected $Number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringLength1to14
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param StringLength1to14 $Number
     * @return Payment.Certficate
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
