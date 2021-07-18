<?php

class AmountCommissionAgency
{

    /**
     * @var AmountCommission $Commission
     */
    protected $Commission = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AmountCommission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param AmountCommission $Commission
     * @return Amount.Commission.Agency
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

}
