<?php

class PaymentMiscellaneous
{

    /**
     * @var boolean $miscIndicator
     */
    protected $miscIndicator = null;

    /**
     * @param boolean $miscIndicator
     */
    public function __construct($miscIndicator)
    {
      $this->miscIndicator = $miscIndicator;
    }

    /**
     * @return boolean
     */
    public function getMiscIndicator()
    {
      return $this->miscIndicator;
    }

    /**
     * @param boolean $miscIndicator
     * @return Payment.Miscellaneous
     */
    public function setMiscIndicator($miscIndicator)
    {
      $this->miscIndicator = $miscIndicator;
      return $this;
    }

}
