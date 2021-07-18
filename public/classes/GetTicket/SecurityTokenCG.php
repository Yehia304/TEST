<?php

class SecurityTokenCG
{

    /**
     * @var UsernameToken $UsernameToken
     */
    protected $UsernameToken = null;

    /**
     * @var TextLong $SecurityToken
     */
    protected $SecurityToken = null;

    /**
     * @param UsernameToken $UsernameToken
     * @param TextLong $SecurityToken
     */
    public function __construct($UsernameToken, $SecurityToken)
    {
      $this->UsernameToken = $UsernameToken;
      $this->SecurityToken = $SecurityToken;
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
     * @return SecurityTokenCG
     */
    public function setUsernameToken($UsernameToken)
    {
      $this->UsernameToken = $UsernameToken;
      return $this;
    }

    /**
     * @return TextLong
     */
    public function getSecurityToken()
    {
      return $this->SecurityToken;
    }

    /**
     * @param TextLong $SecurityToken
     * @return SecurityTokenCG
     */
    public function setSecurityToken($SecurityToken)
    {
      $this->SecurityToken = $SecurityToken;
      return $this;
    }

}
