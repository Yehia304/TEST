<?php

class DateRange
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var date $afterDate
     */
    protected $afterDate = null;

    /**
     * @var date $beforeDate
     */
    protected $beforeDate = null;

    /**
     * @param string $_
     * @param date $afterDate
     * @param date $beforeDate
     */
    public function __construct($_, $afterDate, $beforeDate)
    {
      $this->_ = $_;
      $this->afterDate = $afterDate;
      $this->beforeDate = $beforeDate;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return DateRange
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return date
     */
    public function getAfterDate()
    {
      return $this->afterDate;
    }

    /**
     * @param date $afterDate
     * @return DateRange
     */
    public function setAfterDate($afterDate)
    {
      $this->afterDate = $afterDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getBeforeDate()
    {
      return $this->beforeDate;
    }

    /**
     * @param date $beforeDate
     * @return DateRange
     */
    public function setBeforeDate($beforeDate)
    {
      $this->beforeDate = $beforeDate;
      return $this;
    }

}
