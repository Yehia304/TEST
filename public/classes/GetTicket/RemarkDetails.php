<?php

class RemarkDetails
{

    /**
     * @var StringTicketingRemark $_
     */
    protected $_ = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @param StringTicketingRemark $_
     * @param int $sequence
     */
    public function __construct($_, $sequence)
    {
      $this->_ = $_;
      $this->sequence = $sequence;
    }

    /**
     * @return StringTicketingRemark
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StringTicketingRemark $_
     * @return Remark.Details
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return Remark.Details
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

}
