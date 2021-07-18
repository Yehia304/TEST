<?php

class TicketingDocumentCurrencyConversion
{

    /**
     * @var CurrencyConversionDetails $BankerSellingRate
     */
    protected $BankerSellingRate = null;

    /**
     * @var CurrencyConversionDetails $BankerBuyingRate
     */
    protected $BankerBuyingRate = null;

    /**
     * @var CurrencyConversionDetails $IataClearingHouseRate
     */
    protected $IataClearingHouseRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrencyConversionDetails
     */
    public function getBankerSellingRate()
    {
      return $this->BankerSellingRate;
    }

    /**
     * @param CurrencyConversionDetails $BankerSellingRate
     * @return TicketingDocument.CurrencyConversion
     */
    public function setBankerSellingRate($BankerSellingRate)
    {
      $this->BankerSellingRate = $BankerSellingRate;
      return $this;
    }

    /**
     * @return CurrencyConversionDetails
     */
    public function getBankerBuyingRate()
    {
      return $this->BankerBuyingRate;
    }

    /**
     * @param CurrencyConversionDetails $BankerBuyingRate
     * @return TicketingDocument.CurrencyConversion
     */
    public function setBankerBuyingRate($BankerBuyingRate)
    {
      $this->BankerBuyingRate = $BankerBuyingRate;
      return $this;
    }

    /**
     * @return CurrencyConversionDetails
     */
    public function getIataClearingHouseRate()
    {
      return $this->IataClearingHouseRate;
    }

    /**
     * @param CurrencyConversionDetails $IataClearingHouseRate
     * @return TicketingDocument.CurrencyConversion
     */
    public function setIataClearingHouseRate($IataClearingHouseRate)
    {
      $this->IataClearingHouseRate = $IataClearingHouseRate;
      return $this;
    }

}
