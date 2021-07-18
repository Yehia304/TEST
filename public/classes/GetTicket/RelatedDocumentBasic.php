<?php

class RelatedDocumentBasic
{

    /**
     * @var IdentifierTicketingDocument $Number
     */
    protected $Number = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @param IdentifierTicketingDocument $Number
     * @param int $sequence
     */
    public function __construct($Number, $sequence)
    {
      $this->Number = $Number;
      $this->sequence = $sequence;
    }

    /**
     * @return IdentifierTicketingDocument
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param IdentifierTicketingDocument $Number
     * @return RelatedDocument.Basic
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param int $sequence
     * @return RelatedDocument.Basic
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

}
