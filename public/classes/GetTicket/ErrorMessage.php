<?php

class ErrorMessage
{

    /**
     * @var TextLong $_
     */
    protected $_ = null;

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @param TextLong $_
     * @param int $code
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
     * @return ErrorMessage
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return ErrorMessage
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
