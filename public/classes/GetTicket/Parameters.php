<?php

class Parameters
{

    /**
     * @var Text $_
     */
    protected $_ = null;

    /**
     * @var Text $Name
     */
    protected $Name = null;

    /**
     * @param Text $_
     * @param Text $Name
     */
    public function __construct($_, $Name)
    {
      $this->_ = $_;
      $this->Name = $Name;
    }

    /**
     * @return Text
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Text $_
     * @return Parameters
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return Text
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Text $Name
     * @return Parameters
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
