<?php

class AmountsOtherED
{

    /**
     * @var AmountBasic $AddCollect
     */
    protected $AddCollect = null;

    /**
     * @var AmountCommission $Commission
     */
    protected $Commission = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AmountBasic
     */
    public function getAddCollect()
    {
      return $this->AddCollect;
    }

    /**
     * @param AmountBasic $AddCollect
     * @return Amounts.Other.ED
     */
    public function setAddCollect($AddCollect)
    {
      $this->AddCollect = $AddCollect;
      return $this;
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
     * @return Amounts.Other.ED
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

}
