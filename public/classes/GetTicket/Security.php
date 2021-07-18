<?php

class Security
{

    /**
     * @var UsernameToken $UsernameToken
     */
    protected $UsernameToken = null;

    /**
     * @var string $SabreAth
     */
    protected $SabreAth = null;

    /**
     * @var BinarySecurityToken $BinarySecurityToken
     */
    protected $BinarySecurityToken = null;

    /**
     * @param UsernameToken $UsernameToken
     * @param string $SabreAth
     * @param BinarySecurityToken $BinarySecurityToken
     */
    public function __construct($UsernameToken, $SabreAth, $BinarySecurityToken)
    {
      $this->UsernameToken = $UsernameToken;
      $this->SabreAth = $SabreAth;
      $this->BinarySecurityToken = $BinarySecurityToken;
    }

    /**
     * @return UsernameToken
     */
    public function getUsernameToken()
    {
      return $this->UsernameToken;
    }

    /**
     * @param UsernameToken $UsernameToken
     * @return Security
     */
    public function setUsernameToken($UsernameToken)
    {
      $this->UsernameToken = $UsernameToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getSabreAth()
    {
      return $this->SabreAth;
    }

    /**
     * @param string $SabreAth
     * @return Security
     */
    public function setSabreAth($SabreAth)
    {
      $this->SabreAth = $SabreAth;
      return $this;
    }

    /**
     * @return BinarySecurityToken
     */
    public function getBinarySecurityToken()
    {
      return $this->BinarySecurityToken;
    }

    /**
     * @param BinarySecurityToken $BinarySecurityToken
     * @return Security
     */
    public function setBinarySecurityToken($BinarySecurityToken)
    {
      $this->BinarySecurityToken = $BinarySecurityToken;
      return $this;
    }

}
