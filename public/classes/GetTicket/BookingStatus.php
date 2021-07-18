<?php

class BookingStatus
{

    /**
     * @var CodeBookingStatus $_
     */
    protected $_ = null;

    /**
     * @var StringShort $name
     */
    protected $name = null;

    /**
     * @param CodeBookingStatus $_
     * @param StringShort $name
     */
    public function __construct($_, $name)
    {
      $this->_ = $_;
      $this->name = $name;
    }

    /**
     * @return CodeBookingStatus
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param CodeBookingStatus $_
     * @return BookingStatus
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return StringShort
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param StringShort $name
     * @return BookingStatus
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
