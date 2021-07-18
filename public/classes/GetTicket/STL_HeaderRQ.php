<?php

class STL_HeaderRQ extends STL_HeaderBase
{

    /**
     * @var int $ttl
     */
    protected $ttl = null;

    /**
     * @param Identifier $messageID
     * @param Identifier $version
     * @param \DateTime $timeStamp
     * @param PseudoCityCode $customerID
     * @param DiagnosticLevels $diagnosticLevel
     * @param int $ttl
     */
    public function __construct($messageID, $version, \DateTime $timeStamp, $customerID, $diagnosticLevel, $ttl)
    {
      parent::__construct($messageID, $version, $timeStamp, $customerID, $diagnosticLevel);
      $this->ttl = $ttl;
    }

    /**
     * @return int
     */
    public function getTtl()
    {
      return $this->ttl;
    }

    /**
     * @param int $ttl
     * @return STL_Header.RQ
     */
    public function setTtl($ttl)
    {
      $this->ttl = $ttl;
      return $this;
    }

}
