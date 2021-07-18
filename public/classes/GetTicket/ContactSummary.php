<?php

class ContactSummary
{

    /**
     * @var AddressSimple $AddressSimple
     */
    protected $AddressSimple = null;

    /**
     * @var Telephone[] $Phone
     */
    protected $Phone = null;

    /**
     * @param AddressSimple $AddressSimple
     */
    public function __construct($AddressSimple)
    {
      $this->AddressSimple = $AddressSimple;
    }

    /**
     * @return AddressSimple
     */
    public function getAddressSimple()
    {
      return $this->AddressSimple;
    }

    /**
     * @param AddressSimple $AddressSimple
     * @return Contact.Summary
     */
    public function setAddressSimple($AddressSimple)
    {
      $this->AddressSimple = $AddressSimple;
      return $this;
    }

    /**
     * @return Telephone[]
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param Telephone[] $Phone
     * @return Contact.Summary
     */
    public function setPhone(array $Phone = null)
    {
      $this->Phone = $Phone;
      return $this;
    }

}
