<?php

class AmountCommissionCategory35
{

    /**
     * @var AmountCommission $Commission
     */
    protected $Commission = null;

    /**
     * @var AmountCommission $MarkUp
     */
    protected $MarkUp = null;

    
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
     * @return Amount.Commission.Category35
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return AmountCommission
     */
    public function getMarkUp()
    {
      return $this->MarkUp;
    }

    /**
     * @param AmountCommission $MarkUp
     * @return Amount.Commission.Category35
     */
    public function setMarkUp($MarkUp)
    {
      $this->MarkUp = $MarkUp;
      return $this;
    }

}
