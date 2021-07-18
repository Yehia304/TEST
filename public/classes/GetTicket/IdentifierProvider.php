<?php

class IdentifierProvider
{

    /**
     * @var CodeTicketingProviderCode $_
     */
    protected $_ = null;

    /**
     * @var IdentifierTicketingProviderAccounting $number
     */
    protected $number = null;

    /**
     * @var NumberCheckDigit $checkDigit
     */
    protected $checkDigit = null;

    /**
     * @var StringProviderName $name
     */
    protected $name = null;

    /**
     * @param CodeTicketingProviderCode $_
     * @param IdentifierTicketingProviderAccounting $number
     * @param NumberCheckDigit $checkDigit
     * @param StringProviderName $name
     */
    public function __construct($_, $number, $checkDigit, $name)
    {
      $this->_ = $_;
      $this->number = $number;
      $this->checkDigit = $checkDigit;
      $this->name = $name;
    }

    /**
     * @return CodeTicketingProviderCode
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param CodeTicketingProviderCode $_
     * @return Identifier.Provider
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return IdentifierTicketingProviderAccounting
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param IdentifierTicketingProviderAccounting $number
     * @return Identifier.Provider
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return NumberCheckDigit
     */
    public function getCheckDigit()
    {
      return $this->checkDigit;
    }

    /**
     * @param NumberCheckDigit $checkDigit
     * @return Identifier.Provider
     */
    public function setCheckDigit($checkDigit)
    {
      $this->checkDigit = $checkDigit;
      return $this;
    }

    /**
     * @return StringProviderName
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param StringProviderName $name
     * @return Identifier.Provider
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
