<?php

class MessageCondition
{

    /**
     * @var TextLong $_
     */
    protected $_ = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @param TextLong $_
     * @param string $code
     */
    public function __construct($_, $code)
    {
      $this->_ = $_;
      $this->code = $code;
    }

    /**
     * @return TextLong
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param TextLong $_
     * @return Message.Condition
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return Message.Condition
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}