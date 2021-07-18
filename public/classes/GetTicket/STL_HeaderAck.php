<?php

class STL_HeaderAck extends STL_HeaderBase
{

    /**
     * @var ResultRecord $Results
     */
    protected $Results = null;

    /**
     * @param Identifier $messageID
     * @param Identifier $version
     * @param \DateTime $timeStamp
     * @param PseudoCityCode $customerID
     * @param DiagnosticLevels $diagnosticLevel
     * @param ResultRecord $Results
     */
    public function __construct($messageID, $version, \DateTime $timeStamp, $customerID, $diagnosticLevel, $Results)
    {
      parent::__construct($messageID, $version, $timeStamp, $customerID, $diagnosticLevel);
      $this->Results = $Results;
    }

    /**
     * @return ResultRecord
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param ResultRecord $Results
     * @return STL_Header.Ack
     */
    public function setResults($Results)
    {
      $this->Results = $Results;
      return $this;
    }

}
