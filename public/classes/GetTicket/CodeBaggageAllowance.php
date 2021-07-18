<?php

class CodeBaggageAllowance
{

    /**
     * @var anonymous118 $code
     */
    protected $code = null;

    /**
     * @var anonymous119 $amount
     */
    protected $amount = null;

    /**
     * @param anonymous118 $code
     * @param anonymous119 $amount
     */
    public function __construct($code, $amount)
    {
      $this->code = $code;
      $this->amount = $amount;
    }

    /**
     * @return anonymous118
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param anonymous118 $code
     * @return Code.BaggageAllowance
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return anonymous119
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param anonymous119 $amount
     * @return Code.BaggageAllowance
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
