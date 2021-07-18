<?php

class TicketingDocumentTaxesEMD
{

    /**
     * @var TaxesNewTax $New
     */
    protected $New = null;

    /**
     * @param TaxesNewTax $New
     */
    public function __construct($New)
    {
      $this->New = $New;
    }

    /**
     * @return TaxesNewTax
     */
    public function getNew()
    {
      return $this->New;
    }

    /**
     * @param TaxesNewTax $New
     * @return TicketingDocument.Taxes.EMD
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

}
