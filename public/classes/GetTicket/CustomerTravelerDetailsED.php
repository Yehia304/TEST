<?php

class CustomerTravelerDetailsED
{

    /**
     * @var ProperName29Character $Name
     */
    protected $Name = null;

    /**
     * @var ProperName29Character $FirstName
     */
    protected $FirstName = null;

    /**
     * @var ProperName29Character $LastName
     */
    protected $LastName = null;

    /**
     * @var NumberTicketingExternalCustomer $ExternalNumber
     */
    protected $ExternalNumber = null;

    /**
     * @param ProperName29Character $Name
     */
    public function __construct($Name)
    {
      $this->Name = $Name;
    }

    /**
     * @return ProperName29Character
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param ProperName29Character $Name
     * @return Customer.Traveler.Details.ED
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ProperName29Character
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param ProperName29Character $FirstName
     * @return Customer.Traveler.Details.ED
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return ProperName29Character
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param ProperName29Character $LastName
     * @return Customer.Traveler.Details.ED
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return NumberTicketingExternalCustomer
     */
    public function getExternalNumber()
    {
      return $this->ExternalNumber;
    }

    /**
     * @param NumberTicketingExternalCustomer $ExternalNumber
     * @return Customer.Traveler.Details.ED
     */
    public function setExternalNumber($ExternalNumber)
    {
      $this->ExternalNumber = $ExternalNumber;
      return $this;
    }

}
