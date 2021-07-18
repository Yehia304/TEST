<?php

class PaymentCash
{

    /**
     * @var boolean $cashIndicator
     */
    protected $cashIndicator = null;

    /**
     * @param boolean $cashIndicator
     */
    public function __construct($cashIndicator)
    {
      $this->cashIndicator = $cashIndicator;
    }

    /**
     * @return boolean
     */
    public function getCashIndicator()
    {
      return $this->cashIndicator;
    }

    /**
     * @param boolean $cashIndicator
     * @return Payment.Cash
     */
    public function setCashIndicator($cashIndicator)
    {
      $this->cashIndicator = $cashIndicator;
      return $this;
    }

}
