<?php

class UsernameToken
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $NewPassword
     */
    protected $NewPassword = null;

    /**
     * @var string $Organization
     */
    protected $Organization = null;

    /**
     * @var string $Domain
     */
    protected $Domain = null;

    /**
     * @param string $Username
     * @param string $Password
     * @param string $NewPassword
     * @param string $Organization
     */
    public function __construct($Username, $Password, $NewPassword, $Organization)
    {
      $this->Username = $Username;
      $this->Password = $Password;
      $this->NewPassword = $NewPassword;
      $this->Organization = $Organization;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return UsernameToken
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return UsernameToken
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->NewPassword;
    }

    /**
     * @param string $NewPassword
     * @return UsernameToken
     */
    public function setNewPassword($NewPassword)
    {
      $this->NewPassword = $NewPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param string $Organization
     * @return UsernameToken
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
      return $this->Domain;
    }

    /**
     * @param string $Domain
     * @return UsernameToken
     */
    public function setDomain($Domain)
    {
      $this->Domain = $Domain;
      return $this;
    }

}
