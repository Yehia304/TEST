<?php

class IdentifierPaymentAccount
{

    /**
     * @var IdentifierAccount $_
     */
    protected $_ = null;

    /**
     * @var CodeVirtualPayment $type
     */
    protected $type = null;

    /**
     * @param IdentifierAccount $_
     * @param CodeVirtualPayment $type
     */
    public function __construct($_, $type)
    {
      $this->_ = $_;
      $this->type = $type;
    }

    /**
     * @return IdentifierAccount
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param IdentifierAccount $_
     * @return Identifier.PaymentAccount
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return CodeVirtualPayment
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodeVirtualPayment $type
     * @return Identifier.PaymentAccount
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
