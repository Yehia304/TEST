<?php

class TransactionInfo
{

    /**
     * @var StringLength0to128 $ID
     */
    protected $ID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringLength0to128
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param StringLength0to128 $ID
     * @return TransactionInfo
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
