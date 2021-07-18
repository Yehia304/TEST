<?php

class TicketingTransactionInfoED extends TransactionInfo
{

    /**
     * @var \DateTime $LocalDateTime
     */
    protected $LocalDateTime = null;

    /**
     * @var \DateTime $SystemDateTime
     */
    protected $SystemDateTime = null;

    /**
     * @var IdentifierProvider $SystemProvider
     */
    protected $SystemProvider = null;

    /**
     * @var StringMessage $InputEntry
     */
    protected $InputEntry = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var CodeTicketingTransactionType $type
     */
    protected $type = null;

    /**
     * @param \DateTime $LocalDateTime
     * @param \DateTime $SystemDateTime
     * @param IdentifierProvider $SystemProvider
     * @param int $sequence
     * @param CodeTicketingTransactionType $type
     */
    public function __construct(\DateTime $LocalDateTime, \DateTime $SystemDateTime, $SystemProvider, $sequence, $type)
    {
      parent::__construct();
      $this->LocalDateTime = $LocalDateTime->format(\DateTime::ATOM);
      $this->SystemDateTime = $SystemDateTime->format(\DateTime::ATOM);
      $this->SystemProvider = $SystemProvider;
      $this->sequence = $sequence;
      $this->type = $type;
    }

    /**
     * @return \DateTime
     */
    public function getLocalDateTime()
    {
      if ($this->LocalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LocalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LocalDateTime
     * @return Ticketing.TransactionInfo.ED
     */
    public function setLocalDateTime(\DateTime $LocalDateTime)
    {
      $this->LocalDateTime = $LocalDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSystemDateTime()
    {
      if ($this->SystemDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SystemDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SystemDateTime
     * @return Ticketing.TransactionInfo.ED
     */
    public function setSystemDateTime(\DateTime $SystemDateTime)
    {
      $this->SystemDateTime = $SystemDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return IdentifierProvider
     */
    public function getSystemProvider()
    {
      return $this->SystemProvider;
    }

    /**
     * @param IdentifierProvider $SystemProvider
     * @return Ticketing.TransactionInfo.ED
     */
    public function setSystemProvider($SystemProvider)
    {
      $this->SystemProvider = $SystemProvider;
      return $this;
    }

    /**
     * @return StringMessage
     */
    public function getInputEntry()
    {
      return $this->InputEntry;
    }

    /**
     * @param StringMessage $InputEntry
     * @return Ticketing.TransactionInfo.ED
     */
    public function setInputEntry($InputEntry)
    {
      $this->InputEntry = $InputEntry;
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
     * @return Ticketing.TransactionInfo.ED
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return CodeTicketingTransactionType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodeTicketingTransactionType $type
     * @return Ticketing.TransactionInfo.ED
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
