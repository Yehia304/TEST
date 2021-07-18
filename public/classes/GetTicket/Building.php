<?php

class Building
{

    /**
     * @var StringLength0to64 $_
     */
    protected $_ = null;

    /**
     * @var NumericStringLength1to19 $BldgNumber
     */
    protected $BldgNumber = null;

    /**
     * @var NumericStringLength1to19 $RoomNumber
     */
    protected $RoomNumber = null;

    /**
     * @param StringLength0to64 $_
     * @param NumericStringLength1to19 $BldgNumber
     * @param NumericStringLength1to19 $RoomNumber
     */
    public function __construct($_, $BldgNumber, $RoomNumber)
    {
      $this->_ = $_;
      $this->BldgNumber = $BldgNumber;
      $this->RoomNumber = $RoomNumber;
    }

    /**
     * @return StringLength0to64
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StringLength0to64 $_
     * @return Building
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return NumericStringLength1to19
     */
    public function getBldgNumber()
    {
      return $this->BldgNumber;
    }

    /**
     * @param NumericStringLength1to19 $BldgNumber
     * @return Building
     */
    public function setBldgNumber($BldgNumber)
    {
      $this->BldgNumber = $BldgNumber;
      return $this;
    }

    /**
     * @return NumericStringLength1to19
     */
    public function getRoomNumber()
    {
      return $this->RoomNumber;
    }

    /**
     * @param NumericStringLength1to19 $RoomNumber
     * @return Building
     */
    public function setRoomNumber($RoomNumber)
    {
      $this->RoomNumber = $RoomNumber;
      return $this;
    }

}
