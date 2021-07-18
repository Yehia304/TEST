<?php

class MiscellaneousIndicators
{

    /**
     * @var boolean $feeOverride
     */
    protected $feeOverride = null;

    /**
     * @var CodeIATAIndicators $consumed
     */
    protected $consumed = null;

    /**
     * @var boolean $taxExempt
     */
    protected $taxExempt = null;

    /**
     * @param boolean $feeOverride
     * @param CodeIATAIndicators $consumed
     * @param boolean $taxExempt
     */
    public function __construct($feeOverride, $consumed, $taxExempt)
    {
      $this->feeOverride = $feeOverride;
      $this->consumed = $consumed;
      $this->taxExempt = $taxExempt;
    }

    /**
     * @return boolean
     */
    public function getFeeOverride()
    {
      return $this->feeOverride;
    }

    /**
     * @param boolean $feeOverride
     * @return Miscellaneous.Indicators
     */
    public function setFeeOverride($feeOverride)
    {
      $this->feeOverride = $feeOverride;
      return $this;
    }

    /**
     * @return CodeIATAIndicators
     */
    public function getConsumed()
    {
      return $this->consumed;
    }

    /**
     * @param CodeIATAIndicators $consumed
     * @return Miscellaneous.Indicators
     */
    public function setConsumed($consumed)
    {
      $this->consumed = $consumed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxExempt()
    {
      return $this->taxExempt;
    }

    /**
     * @param boolean $taxExempt
     * @return Miscellaneous.Indicators
     */
    public function setTaxExempt($taxExempt)
    {
      $this->taxExempt = $taxExempt;
      return $this;
    }

}
