<?php

class ProblemInformationFromLLS
{

    /**
     * @var SystemSpecificResultsFromLLS[] $SystemSpecificResults
     */
    protected $SystemSpecificResults = null;

    /**
     * @var ErrorType $type
     */
    protected $type = null;

    /**
     * @var \DateTime $timeStamp
     */
    protected $timeStamp = null;

    /**
     * @param ErrorType $type
     * @param \DateTime $timeStamp
     */
    public function __construct($type, \DateTime $timeStamp)
    {
      $this->type = $type;
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
    }

    /**
     * @return SystemSpecificResultsFromLLS[]
     */
    public function getSystemSpecificResults()
    {
      return $this->SystemSpecificResults;
    }

    /**
     * @param SystemSpecificResultsFromLLS[] $SystemSpecificResults
     * @return ProblemInformationFromLLS
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
     * @return ProblemInformationFromLLS
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return ProblemInformationFromLLS
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
      $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
      return $this;
    }

}
