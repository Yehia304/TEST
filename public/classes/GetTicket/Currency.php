<?php

class Currency
{

    /**
     * @var CurrencyCodeList $_
     */
    protected $_ = null;

    /**
     * @var ProperName $Name
     */
    protected $Name = null;

    /**
     * @param CurrencyCodeList $_
     * @param ProperName $Name
     */
    public function __construct($_, $Name)
    {
      $this->_ = $_;
      $this->Name = $Name;
    }

    /**
     * @return CurrencyCodeList
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param CurrencyCodeList $_
     * @return Currency
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return ProperName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param ProperName $Name
     * @return Currency
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
