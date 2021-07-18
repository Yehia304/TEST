<?php

class ProblemInformation
{

    /**
     * @var IdentifierSystem $Source
     */
    protected $Source = null;

    /**
     * @var IdentifierSystem $System
     */
    protected $System = null;

    /**
     * @var SystemSpecificResults[] $SystemSpecificResults
     */
    protected $SystemSpecificResults = null;

    /**
     * @var ErrorType $type
     */
    protected $type = null;

    /**
     * @var CompletionCodes $status
     */
    protected $status = null;

    /**
     * @var \DateTime $timeStamp
     */
    protected $timeStamp = null;

    /**
     * @param IdentifierSystem $System
     * @param ErrorType $type
     * @param CompletionCodes $status
     * @param \DateTime $timeStamp
     */
    public function __construct($System, $type, $status, \DateTime $timeStamp)
    {
      $this->System = $System;
      $this->type = $type;
      $this->status = $status;
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
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
     * @return ProblemInformation
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
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
     * @return ProblemInformation
     */
    public function setSystem($System)
    {
      $this->System = $System;
      return $this;
    }

    /**
     * @return SystemSpecificResults[]
     */
    public function getSystemSpecificResults()
    {
      return $this->SystemSpecificResults;
    }

    /**
     * @param SystemSpecificResults[] $SystemSpecificResults
     * @return ProblemInformation
     */
    public function setSystemSpecificResults(array $SystemSpecificResults = null)
    {
      $this->SystemSpecificResults = $SystemSpecificResults;
      return $this;
    }

    /**
     * @return ErrorType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param ErrorType $type
     * @return ProblemInformation
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return CompletionCodes
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param CompletionCodes $status
     * @return ProblemInformation
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return ProblemInformation
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
      return $this;
    }

}
