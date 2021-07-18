<?php

class AmountsCommission
{

    /**
     * @var AmountCommissionCategory35 $Category35
     */
    protected $Category35 = null;

    /**
     * @var AmountCommissionAgency $Agency
     */
    protected $Agency = null;

    /**
     * @var AmountCommission $Manual
     */
    protected $Manual = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AmountCommissionCategory35
     */
    public function getCategory35()
    {
      return $this->Category35;
    }

    /**
     * @param AmountCommissionCategory35 $Category35
     * @return Amounts.Commission
     */
    public function setCategory35($Category35)
    {
      $this->Category35 = $Category35;
      return $this;
    }

    /**
     * @return AmountCommissionAgency
     */
    public function getAgency()
    {
      return $this->Agency;
    }

    /**
     * @param AmountCommissionAgency $Agency
     * @return Amounts.Commission
     */
    public function setAgency($Agency)
    {
      $this->Agency = $Agency;
      return $this;
    }

    /**
     * @return AmountCommission
     */
    public function getManual()
    {
      return $this->Manual;
    }

    /**
     * @param AmountCommission $Manual
     * @return Amounts.Commission
     */
    public function setManual($Manual)
    {
      $this->Manual = $Manual;
      return $this;
    }

}
