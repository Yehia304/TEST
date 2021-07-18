<?php

class TicketingDocumentRelated
{

    /**
     * @var RelatedDocument.Basic[] $Conjunctive
     */
    protected $Conjunctive = null;

    /**
     * @var RelatedDocumentDetails $Original
     */
    protected $Original = null;

    /**
     * @var RelatedDocument.Details[] $Exchange
     */
    protected $Exchange = null;

    /**
     * @var RelatedDocument.Details[] $Refund
     */
    protected $Refund = null;

    /**
     * @var RelatedDocument.Abbreviated[] $Linked
     */
    protected $Linked = null;

    /**
     * @var RelatedDocument.Basic[] $Miscellaneous
     */
    protected $Miscellaneous = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RelatedDocument.Basic[]
     */
    public function getConjunctive()
    {
      return $this->Conjunctive;
    }

    /**
     * @param RelatedDocument.Basic[] $Conjunctive
     * @return TicketingDocument.Related
     */
    public function setConjunctive(array $Conjunctive = null)
    {
      $this->Conjunctive = $Conjunctive;
      return $this;
    }

    /**
     * @return RelatedDocumentDetails
     */
    public function getOriginal()
    {
      return $this->Original;
    }

    /**
     * @param RelatedDocumentDetails $Original
     * @return TicketingDocument.Related
     */
    public function setOriginal($Original)
    {
      $this->Original = $Original;
      return $this;
    }

    /**
     * @return RelatedDocument.Details[]
     */
    public function getExchange()
    {
      return $this->Exchange;
    }

    /**
     * @param RelatedDocument.Details[] $Exchange
     * @return TicketingDocument.Related
     */
    public function setExchange(array $Exchange = null)
    {
      $this->Exchange = $Exchange;
      return $this;
    }

    /**
     * @return RelatedDocument.Details[]
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param RelatedDocument.Details[] $Refund
     * @return TicketingDocument.Related
     */
    public function setRefund(array $Refund = null)
    {
      $this->Refund = $Refund;
      return $this;
    }

    /**
     * @return RelatedDocument.Abbreviated[]
     */
    public function getLinked()
    {
      return $this->Linked;
    }

    /**
     * @param RelatedDocument.Abbreviated[] $Linked
     * @return TicketingDocument.Related
     */
    public function setLinked(array $Linked = null)
    {
      $this->Linked = $Linked;
      return $this;
    }

    /**
     * @return RelatedDocument.Basic[]
     */
    public function getMiscellaneous()
    {
      return $this->Miscellaneous;
    }

    /**
     * @param RelatedDocument.Basic[] $Miscellaneous
     * @return TicketingDocument.Related
     */
    public function setMiscellaneous(array $Miscellaneous = null)
    {
      $this->Miscellaneous = $Miscellaneous;
      return $this;
    }

}
