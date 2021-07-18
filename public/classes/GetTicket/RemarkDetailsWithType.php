<?php

class RemarkDetailsWithType
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
     * @var CodeRemarkType $type
     */
    protected $type = null;

    /**
     * @param StringTicketingRemark $_
     * @param int $sequence
     * @param CodeRemarkType $type
     */
    public function __construct($_, $sequence, $type)
    {
      $this->_ = $_;
      $this->sequence = $sequence;
      $this->type = $type;
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
     * @return Remark.DetailsWithType
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
     * @return Remark.DetailsWithType
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return CodeRemarkType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodeRemarkType $type
     * @return Remark.DetailsWithType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
