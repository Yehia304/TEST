<?php

class ApplicationResults extends Results
{

    /**
     * @var ProblemInformationFromLLS[] $Success
     */
    protected $Success = null;

    /**
     * @var ProblemInformationFromLLS[] $Error
     */
    protected $Error = null;

    /**
     * @var ProblemInformationFromLLS[] $Warning
     */
    protected $Warning = null;

    /**
     * @var CompletionCodes $status
     */
    protected $status = null;

    /**
     * @param CompletionCodes $status
     */
    public function __construct($status)
    {
      $this->status = $status;
    }

    /**
     * @return ProblemInformationFromLLS[]
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param ProblemInformationFromLLS[] $Success
     * @return ApplicationResults
     */
    public function setSuccess(array $Success = null)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return ProblemInformationFromLLS[]
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param ProblemInformationFromLLS[] $Error
     * @return ApplicationResults
     */
    public function setError(array $Error = null)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ProblemInformationFromLLS[]
     */
    public function getWarning()
    {
      return $this->Warning;
    }

    /**
     * @param ProblemInformationFromLLS[] $Warning
     * @return ApplicationResults
     */
    public function setWarning(array $Warning = null)
    {
      $this->Warning = $Warning;
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
     * @return ApplicationResults
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
