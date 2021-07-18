<?php

class ResultRecord
{

    /**
     * @var Success $Success
     */
    protected $Success = null;

    /**
     * @var ProblemInformation $Error
     */
    protected $Error = null;

    /**
     * @var ProblemInformation[] $Warning
     */
    protected $Warning = null;

    /**
     * @param Success $Success
     * @param ProblemInformation $Error
     */
    public function __construct($Success, $Error)
    {
      $this->Success = $Success;
      $this->Error = $Error;
    }

    /**
     * @return Success
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param Success $Success
     * @return ResultRecord
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return ProblemInformation
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param ProblemInformation $Error
     * @return ResultRecord
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ProblemInformation[]
     */
    public function getWarning()
    {
      return $this->Warning;
    }

    /**
     * @param ProblemInformation[] $Warning
     * @return ResultRecord
     */
    public function setWarning(array $Warning = null)
    {
      $this->Warning = $Warning;
      return $this;
    }

}
