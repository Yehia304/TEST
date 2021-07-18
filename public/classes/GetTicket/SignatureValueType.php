<?php

class SignatureValueType
{

    /**
     * @var base64Binary $_
     */
    protected $_ = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param base64Binary $_
     * @param ID $Id
     */
    public function __construct($_, $Id)
    {
      $this->_ = $_;
      $this->Id = $Id;
    }

    /**
     * @return base64Binary
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param base64Binary $_
     * @return SignatureValueType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param ID $Id
     * @return SignatureValueType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
