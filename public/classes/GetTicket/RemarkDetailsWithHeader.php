<?php

class RemarkDetailsWithHeader
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
     * @var StringTicketingRemark $header
     */
    protected $header = null;

    /**
     * @param StringTicketingRemark $_
     * @param int $sequence
     * @param StringTicketingRemark $header
     */
    public function __construct($_, $sequence, $header)
    {
      $this->_ = $_;
      $this->sequence = $sequence;
      $this->header = $header;
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
     * @return Remark.DetailsWithHeader
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
     * @return Remark.DetailsWithHeader
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return StringTicketingRemark
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param StringTicketingRemark $header
     * @return Remark.DetailsWithHeader
     */
    public function setHeader($header)
    {
      $this->header = $header;
      return $this;
    }

}
