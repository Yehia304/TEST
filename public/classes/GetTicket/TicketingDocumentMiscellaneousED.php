<?php

class TicketingDocumentMiscellaneousED
{

    /**
     * @var FeeDetails $Fee
     */
    protected $Fee = null;

    /**
     * @var OptionalService $OptionalService
     */
    protected $OptionalService = null;

    /**
     * @var TicketingDocumentServiceCouponEMDED $CouponDetails
     */
    protected $CouponDetails = null;

    /**
     * @var Tax.Misc[] $Tax
     */
    protected $Tax = null;

    /**
     * @var NumberAssociatedDocument $AssociatedTicketNumber
     */
    protected $AssociatedTicketNumber = null;

    /**
     * @var TicketingDocumentAffinityED $Affinity
     */
    protected $Affinity = null;

    /**
     * @param FeeDetails $Fee
     * @param TicketingDocumentServiceCouponEMDED $CouponDetails
     */
    public function __construct($Fee, $CouponDetails)
    {
      $this->Fee = $Fee;
      $this->CouponDetails = $CouponDetails;
    }

    /**
     * @return FeeDetails
     */
    public function getFee()
    {
      return $this->Fee;
    }

    /**
     * @param FeeDetails $Fee
     * @return TicketingDocument.Miscellaneous.ED
     */
    public function setFee($Fee)
    {
      $this->Fee = $Fee;
      return $this;
    }

    /**
     * @return OptionalService
     */
    public function getOptionalService()
    {
      return $this->OptionalService;
    }

    /**
     * @param OptionalService $OptionalService
     * @return TicketingDocument.Miscellaneous.ED
     */
    public function setOptionalService($OptionalService)
    {
      $this->OptionalService = $OptionalService;
      return $this;
    }

    /**
     * @return TicketingDocumentServiceCouponEMDED
     */
    public function getCouponDetails()
    {
      return $this->CouponDetails;
    }

    /**
     * @param TicketingDocumentServiceCouponEMDED $CouponDetails
     * @return TicketingDocument.Miscellaneous.ED
     */
    public function setCouponDetails($CouponDetails)
    {
      $this->CouponDetails = $CouponDetails;
      return $this;
    }

    /**
     * @return Tax.Misc[]
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param Tax.Misc[] $Tax
     * @return TicketingDocument.Miscellaneous.ED
     */
    public function setTax(array $Tax = null)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return NumberAssociatedDocument
     */
    public function getAssociatedTicketNumber()
    {
      return $this->AssociatedTicketNumber;
    }

    /**
     * @param NumberAssociatedDocument $AssociatedTicketNumber
     * @return TicketingDocument.Miscellaneous.ED
     */
    public function setAssociatedTicketNumber($AssociatedTicketNumber)
    {
      $this->AssociatedTicketNumber = $AssociatedTicketNumber;
      return $this;
    }

    /**
     * @return TicketingDocumentAffinityED
     */
    public function getAffinity()
    {
      return $this->Affinity;
    }

    /**
     * @param TicketingDocumentAffinityED $Affinity
     * @return TicketingDocument.Miscellaneous.ED
     */
    public function setAffinity($Affinity)
    {
      $this->Affinity = $Affinity;
      return $this;
    }

}
