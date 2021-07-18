<?php

class Street
{

    /**
     * @var ProperName $_
     */
    protected $_ = null;

    /**
     * @var StringLength1to8 $StreetNmbrSuffix
     */
    protected $StreetNmbrSuffix = null;

    /**
     * @var StringLength1to8 $StreetDirection
     */
    protected $StreetDirection = null;

    /**
     * @var NumericStringLength1to5 $RuralRouteNmbr
     */
    protected $RuralRouteNmbr = null;

    /**
     * @var StringLength1to16 $PO_Box
     */
    protected $PO_Box = null;

    /**
     * @param ProperName $_
     * @param StringLength1to8 $StreetNmbrSuffix
     * @param StringLength1to8 $StreetDirection
     * @param NumericStringLength1to5 $RuralRouteNmbr
     * @param StringLength1to16 $PO_Box
     */
    public function __construct($_, $StreetNmbrSuffix, $StreetDirection, $RuralRouteNmbr, $PO_Box)
    {
      $this->_ = $_;
      $this->StreetNmbrSuffix = $StreetNmbrSuffix;
      $this->StreetDirection = $StreetDirection;
      $this->RuralRouteNmbr = $RuralRouteNmbr;
      $this->PO_Box = $PO_Box;
    }

    /**
     * @return ProperName
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param ProperName $_
     * @return Street
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return StringLength1to8
     */
    public function getStreetNmbrSuffix()
    {
      return $this->StreetNmbrSuffix;
    }

    /**
     * @param StringLength1to8 $StreetNmbrSuffix
     * @return Street
     */
    public function setStreetNmbrSuffix($StreetNmbrSuffix)
    {
      $this->StreetNmbrSuffix = $StreetNmbrSuffix;
      return $this;
    }

    /**
     * @return StringLength1to8
     */
    public function getStreetDirection()
    {
      return $this->StreetDirection;
    }

    /**
     * @param StringLength1to8 $StreetDirection
     * @return Street
     */
    public function setStreetDirection($StreetDirection)
    {
      $this->StreetDirection = $StreetDirection;
      return $this;
    }

    /**
     * @return NumericStringLength1to5
     */
    public function getRuralRouteNmbr()
    {
      return $this->RuralRouteNmbr;
    }

    /**
     * @param NumericStringLength1to5 $RuralRouteNmbr
     * @return Street
     */
    public function setRuralRouteNmbr($RuralRouteNmbr)
    {
      $this->RuralRouteNmbr = $RuralRouteNmbr;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getPO_Box()
    {
      return $this->PO_Box;
    }

    /**
     * @param StringLength1to16 $PO_Box
     * @return Street
     */
    public function setPO_Box($PO_Box)
    {
      $this->PO_Box = $PO_Box;
      return $this;
    }

}
