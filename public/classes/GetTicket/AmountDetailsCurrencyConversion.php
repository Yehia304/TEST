<?php

class AmountDetailsCurrencyConversion extends AmountDetails
{

    /**
     * @var TicketingDocumentCurrencyConversion $CurrencyConversion
     */
    protected $CurrencyConversion = null;

    /**
     * @param Amount $Amount
     */
    public function __construct($Amount)
    {
      parent::__construct($Amount);
    }

    /**
     * @return TicketingDocumentCurrencyConversion
     */
    public function getCurrencyConversion()
    {
      return $this->CurrencyConversion;
    }

    /**
     * @param TicketingDocumentCurrencyConversion $CurrencyConversion
     * @return Amount.Details.CurrencyConversion
     */
    public function setCurrencyConversion($CurrencyConversion)
    {
      $this->CurrencyConversion = $CurrencyConversion;
      return $this;
    }

}
