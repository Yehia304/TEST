<?php

class RelatedDocumentAbbreviated
{

    /**
     * @var IdentifierTicketingDocument $Number
     */
    protected $Number = null;

    /**
     * @var NumberCheckDigit $CheckDigit
     */
    protected $CheckDigit = null;

    /**
     * @var date $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var Number.AssociatedDocument[] $AssociatedTicketNumber
     */
    protected $AssociatedTicketNumber = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var CodeDocumentType $type
     */
    protected $type = null;

    /**
     * @var boolean $electronic
     */
    protected $electronic = null;

    /**
     * @var CodeDocumentStatus $status
     */
    protected $status = null;

    /**
     * @var boolean $primary
     */
    protected $primary = null;

    /**
     * @param IdentifierTicketingDocument $Number
     * @param int $sequence
     * @param CodeDocumentType $type
     * @param boolean $electronic
     * @param CodeDocumentStatus $status
     * @param boolean $primary
     */
    public function __construct($Number, $sequence, $type, $electronic, $status, $primary)
    {
      $this->Number = $Number;
      $this->sequence = $sequence;
      $this->type = $type;
      $this->electronic = $electronic;
      $this->status = $status;
      $this->primary = $primary;
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
     * @return RelatedDocument.Abbreviated
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return NumberCheckDigit
     */
    public function getCheckDigit()
    {
      return $this->CheckDigit;
    }

    /**
     * @param NumberCheckDigit $CheckDigit
     * @return RelatedDocument.Abbreviated
     */
    public function setCheckDigit($CheckDigit)
    {
      $this->CheckDigit = $CheckDigit;
      return $this;
    }

    /**
     * @return date
     */
    public function getIssueDate()
    {
      return $this->IssueDate;
    }

    /**
     * @param date $IssueDate
     * @return RelatedDocument.Abbreviated
     */
    public function setIssueDate($IssueDate)
    {
      $this->IssueDate = $IssueDate;
      return $this;
    }

    /**
     * @return Number.AssociatedDocument[]
     */
    public function getAssociatedTicketNumber()
    {
      return $this->AssociatedTicketNumber;
    }

    /**
     * @param Number.AssociatedDocument[] $AssociatedTicketNumber
     * @return RelatedDocument.Abbreviated
     */
    public function setAssociatedTicketNumber(array $AssociatedTicketNumber = null)
    {
      $this->AssociatedTicketNumber = $AssociatedTicketNumber;
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
     * @return RelatedDocument.Abbreviated
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return CodeDocumentType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodeDocumentType $type
     * @return RelatedDocument.Abbreviated
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return RelatedDocument.Abbreviated
     */
    public function setElectronic($electronic)
    {
      $this->electronic = $electronic;
      return $this;
    }

    /**
     * @return CodeDocumentStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param CodeDocumentStatus $status
     * @return RelatedDocument.Abbreviated
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimary()
    {
      return $this->primary;
    }

    /**
     * @param boolean $primary
     * @return RelatedDocument.Abbreviated
     */
    public function setPrimary($primary)
    {
      $this->primary = $primary;
      return $this;
    }

}
