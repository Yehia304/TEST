<?php

class POS
{

    /**
     * @var UpperCaseAlphaNumericLength1to3 $Company
     */
    protected $Company = null;

    /**
     * @var PseudoCityCodeAgencyOrAgent $Pseudo
     */
    protected $Pseudo = null;

    /**
     * @var AirlineCode $MultiHost
     */
    protected $MultiHost = null;

    /**
     * @var LocationPOS $Actual
     */
    protected $Actual = null;

    /**
     * @var LocationPOS $Home
     */
    protected $Home = null;

    /**
     * @var StringLength1to16 $Sine
     */
    protected $Sine = null;

    /**
     * @var DutyCodeList $DutyCode
     */
    protected $DutyCode = null;

    /**
     * @var Lniata $Lniata
     */
    protected $Lniata = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpperCaseAlphaNumericLength1to3
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param UpperCaseAlphaNumericLength1to3 $Company
     * @return POS
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return PseudoCityCodeAgencyOrAgent
     */
    public function getPseudo()
    {
      return $this->Pseudo;
    }

    /**
     * @param PseudoCityCodeAgencyOrAgent $Pseudo
     * @return POS
     */
    public function setPseudo($Pseudo)
    {
      $this->Pseudo = $Pseudo;
      return $this;
    }

    /**
     * @return AirlineCode
     */
    public function getMultiHost()
    {
      return $this->MultiHost;
    }

    /**
     * @param AirlineCode $MultiHost
     * @return POS
     */
    public function setMultiHost($MultiHost)
    {
      $this->MultiHost = $MultiHost;
      return $this;
    }

    /**
     * @return LocationPOS
     */
    public function getActual()
    {
      return $this->Actual;
    }

    /**
     * @param LocationPOS $Actual
     * @return POS
     */
    public function setActual($Actual)
    {
      $this->Actual = $Actual;
      return $this;
    }

    /**
     * @return LocationPOS
     */
    public function getHome()
    {
      return $this->Home;
    }

    /**
     * @param LocationPOS $Home
     * @return POS
     */
    public function setHome($Home)
    {
      $this->Home = $Home;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getSine()
    {
      return $this->Sine;
    }

    /**
     * @param StringLength1to16 $Sine
     * @return POS
     */
    public function setSine($Sine)
    {
      $this->Sine = $Sine;
      return $this;
    }

    /**
     * @return DutyCodeList
     */
    public function getDutyCode()
    {
      return $this->DutyCode;
    }

    /**
     * @param DutyCodeList $DutyCode
     * @return POS
     */
    public function setDutyCode($DutyCode)
    {
      $this->DutyCode = $DutyCode;
      return $this;
    }

    /**
     * @return Lniata
     */
    public function getLniata()
    {
      return $this->Lniata;
    }

    /**
     * @param Lniata $Lniata
     * @return POS
     */
    public function setLniata($Lniata)
    {
      $this->Lniata = $Lniata;
      return $this;
    }

}
