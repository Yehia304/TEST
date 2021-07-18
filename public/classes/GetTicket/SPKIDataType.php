<?php

class SPKIDataType
{

    /**
     * @var base64Binary $SPKISexp
     */
    protected $SPKISexp = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param base64Binary $SPKISexp
     * @param string $any
     */
    public function __construct($SPKISexp, $any)
    {
      $this->SPKISexp = $SPKISexp;
      $this->any = $any;
    }

    /**
     * @return base64Binary
     */
    public function getSPKISexp()
    {
      return $this->SPKISexp;
    }

    /**
     * @param base64Binary $SPKISexp
     * @return SPKIDataType
     */
    public function setSPKISexp($SPKISexp)
    {
      $this->SPKISexp = $SPKISexp;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return SPKIDataType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
