<?php

class FareCalculationDetails
{

    /**
     * @var StringText $_
     */
    protected $_ = null;

    /**
     * @param StringText $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
    }

    /**
     * @return StringText
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StringText $_
     * @return FareCalculation.Details
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
