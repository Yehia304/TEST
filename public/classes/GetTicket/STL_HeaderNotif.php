<?php

class STL_HeaderNotif extends STL_HeaderBase
{

    /**
     * @param Identifier $messageID
     * @param Identifier $version
     * @param \DateTime $timeStamp
     * @param PseudoCityCode $customerID
     * @param DiagnosticLevels $diagnosticLevel
     */
    public function __construct($messageID, $version, \DateTime $timeStamp, $customerID, $diagnosticLevel)
    {
      parent::__construct($messageID, $version, $timeStamp, $customerID, $diagnosticLevel);
    }

}
