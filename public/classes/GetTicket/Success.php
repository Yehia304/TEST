<?php

class Success
{

    /**
     * @var IdentifierSystem $System
     */
    protected $System = null;

    /**
     * @var IdentifierSystem $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IdentifierSystem
     */
    public function getSystem()
    {
      return $this->System;
    }

    /**
     * @param IdentifierSystem $System
     * @return Success
     */
    public function setSystem($System)
    {
      $this->System = $System;
      return $this;
    }

    /**
     * @return IdentifierSystem
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param IdentifierSystem $Source
     * @return Success
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
