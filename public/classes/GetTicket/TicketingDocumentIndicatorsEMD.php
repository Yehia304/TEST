<?php

class TicketingDocumentIndicatorsEMD
{

    /**
     * @var boolean $commisionable
     */
    protected $commisionable = null;

    /**
     * @var boolean $electronic
     */
    protected $electronic = null;

    /**
     * @var boolean $interlineable
     */
    protected $interlineable = null;

    /**
     * @var CodeIATAIndicators $refundable
     */
    protected $refundable = null;

    /**
     * @var boolean $historical
     */
    protected $historical = null;

    /**
     * @param boolean $commisionable
     * @param boolean $electronic
     * @param boolean $interlineable
     * @param CodeIATAIndicators $refundable
     * @param boolean $historical
     */
    public function __construct($commisionable, $electronic, $interlineable, $refundable, $historical)
    {
      $this->commisionable = $commisionable;
      $this->electronic = $electronic;
      $this->interlineable = $interlineable;
      $this->refundable = $refundable;
      $this->historical = $historical;
    }

    /**
     * @return boolean
     */
    public function getCommisionable()
    {
      return $this->commisionable;
    }

    /**
     * @param boolean $commisionable
     * @return TicketingDocument.Indicators.EMD
     */
    public function setCommisionable($commisionable)
    {
      $this->commisionable = $commisionable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getElectronic()
    {
      return $this->electronic;
    }

    /**
     * @param boolean $electronic
     * @return TicketingDocument.Indicators.EMD
     */
    public function setElectronic($electronic)
    {
      $this->electronic = $electronic;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInterlineable()
    {
      return $this->interlineable;
    }

    /**
     * @param boolean $interlineable
     * @return TicketingDocument.Indicators.EMD
     */
    public function setInterlineable($interlineable)
    {
      $this->interlineable = $interlineable;
      return $this;
    }

    /**
     * @return CodeIATAIndicators
     */
    public function getRefundable()
    {
      return $this->refundable;
    }

    /**
     * @param CodeIATAIndicators $refundable
     * @return TicketingDocument.Indicators.EMD
     */
    public function setRefundable($refundable)
    {
      $this->refundable = $refundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHistorical()
    {
      return $this->historical;
    }

    /**
     * @param boolean $historical
     * @return TicketingDocument.Indicators.EMD
     */
    public function setHistorical($historical)
    {
      $this->historical = $historical;
      return $this;
    }

}
