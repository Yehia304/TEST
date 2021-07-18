<?php

abstract class STL_HeaderBase
{

    /**
     * @var TrackingID $ConversationID
     */
    protected $ConversationID = null;

    /**
     * @var TrackingID $OrchestrationID
     */
    protected $OrchestrationID = null;

    /**
     * @var TextShort $Operation
     */
    protected $Operation = null;

    /**
     * @var TextShort $Service
     */
    protected $Service = null;

    /**
     * @var MessagingRecords $Messaging
     */
    protected $Messaging = null;

    /**
     * @var Parameters[] $Parameters
     */
    protected $Parameters = null;

    /**
     * @var SecurityTokenCG $Security
     */
    protected $Security = null;

    /**
     * @var TextLong $DiagnosticData
     */
    protected $DiagnosticData = null;

    /**
     * @var Identifier $messageID
     */
    protected $messageID = null;

    /**
     * @var Identifier $version
     */
    protected $version = null;

    /**
     * @var \DateTime $timeStamp
     */
    protected $timeStamp = null;

    /**
     * @var PseudoCityCode $customerID
     */
    protected $customerID = null;

    /**
     * @var DiagnosticLevels $diagnosticLevel
     */
    protected $diagnosticLevel = null;

    /**
     * @param Identifier $messageID
     * @param Identifier $version
     * @param \DateTime $timeStamp
     * @param PseudoCityCode $customerID
     * @param DiagnosticLevels $diagnosticLevel
     */
    public function __construct($messageID, $version, \DateTime $timeStamp, $customerID, $diagnosticLevel)
    {
      $this->messageID = $messageID;
      $this->version = $version;
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
      $this->customerID = $customerID;
      $this->diagnosticLevel = $diagnosticLevel;
    }

    /**
     * @return TrackingID
     */
    public function getConversationID()
    {
      return $this->ConversationID;
    }

    /**
     * @param TrackingID $ConversationID
     * @return STL_HeaderBase
     */
    public function setConversationID($ConversationID)
    {
      $this->ConversationID = $ConversationID;
      return $this;
    }

    /**
     * @return TrackingID
     */
    public function getOrchestrationID()
    {
      return $this->OrchestrationID;
    }

    /**
     * @param TrackingID $OrchestrationID
     * @return STL_HeaderBase
     */
    public function setOrchestrationID($OrchestrationID)
    {
      $this->OrchestrationID = $OrchestrationID;
      return $this;
    }

    /**
     * @return TextShort
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param TextShort $Operation
     * @return STL_HeaderBase
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
      return $this;
    }

    /**
     * @return TextShort
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param TextShort $Service
     * @return STL_HeaderBase
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return MessagingRecords
     */
    public function getMessaging()
    {
      return $this->Messaging;
    }

    /**
     * @param MessagingRecords $Messaging
     * @return STL_HeaderBase
     */
    public function setMessaging($Messaging)
    {
      $this->Messaging = $Messaging;
      return $this;
    }

    /**
     * @return Parameters[]
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param Parameters[] $Parameters
     * @return STL_HeaderBase
     */
    public function setParameters(array $Parameters = null)
    {
      $this->Parameters = $Parameters;
      return $this;
    }

    /**
     * @return SecurityTokenCG
     */
    public function getSecurity()
    {
      return $this->Security;
    }

    /**
     * @param SecurityTokenCG $Security
     * @return STL_HeaderBase
     */
    public function setSecurity($Security)
    {
      $this->Security = $Security;
      return $this;
    }

    /**
     * @return TextLong
     */
    public function getDiagnosticData()
    {
      return $this->DiagnosticData;
    }

    /**
     * @param TextLong $DiagnosticData
     * @return STL_HeaderBase
     */
    public function setDiagnosticData($DiagnosticData)
    {
      $this->DiagnosticData = $DiagnosticData;
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getMessageID()
    {
      return $this->messageID;
    }

    /**
     * @param Identifier $messageID
     * @return STL_HeaderBase
     */
    public function setMessageID($messageID)
    {
      $this->messageID = $messageID;
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param Identifier $version
     * @return STL_HeaderBase
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStamp()
    {
      if ($this->timeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timeStamp
     * @return STL_HeaderBase
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PseudoCityCode
     */
    public function getCustomerID()
    {
      return $this->customerID;
    }

    /**
     * @param PseudoCityCode $customerID
     * @return STL_HeaderBase
     */
    public function setCustomerID($customerID)
    {
      $this->customerID = $customerID;
      return $this;
    }

    /**
     * @return DiagnosticLevels
     */
    public function getDiagnosticLevel()
    {
      return $this->diagnosticLevel;
    }

    /**
     * @param DiagnosticLevels $diagnosticLevel
     * @return STL_HeaderBase
     */
    public function setDiagnosticLevel($diagnosticLevel)
    {
      $this->diagnosticLevel = $diagnosticLevel;
      return $this;
    }

}
