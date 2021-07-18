<?php

class ClassOfServiceDetails
{

    /**
     * @var CodeClassOfService $_
     */
    protected $_ = null;

    /**
     * @var StringShort $name
     */
    protected $name = null;

    /**
     * @param CodeClassOfService $_
     * @param StringShort $name
     */
    public function __construct($_, $name)
    {
      $this->_ = $_;
      $this->name = $name;
    }

    /**
     * @return CodeClassOfService
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param CodeClassOfService $_
     * @return ClassOfService.Details
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return StringShort
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param StringShort $name
     * @return ClassOfService.Details
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
