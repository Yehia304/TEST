<?php

class PaymentBankCheck
{

    /**
     * @var int $RoutingNumber
     */
    protected $RoutingNumber = null;

    /**
     * @var CodeCheckApproval $ApprovalCode
     */
    protected $ApprovalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getRoutingNumber()
    {
      return $this->RoutingNumber;
    }

    /**
     * @param int $RoutingNumber
     * @return Payment.BankCheck
     */
    public function setRoutingNumber($RoutingNumber)
    {
      $this->RoutingNumber = $RoutingNumber;
      return $this;
    }

    /**
     * @return CodeCheckApproval
     */
    public function getApprovalCode()
    {
      return $this->ApprovalCode;
    }

    /**
     * @param CodeCheckApproval $ApprovalCode
     * @return Payment.BankCheck
     */
    public function setApprovalCode($ApprovalCode)
    {
      $this->ApprovalCode = $ApprovalCode;
      return $this;
    }

}
