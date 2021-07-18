<?php

class FeeDetails
{

    /**
     * @var AmountBasic $Base
     */
    protected $Base = null;

    /**
     * @var AmountBasic $Equivalent
     */
    protected $Equivalent = null;

    /**
     * @var AmountBasic $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @var AmountBasic $Total
     */
    protected $Total = null;

    /**
     * @var AmountBasicBankerSellingRate $Filed
     */
    protected $Filed = null;

    /**
     * @var StringItemDescription $description
     */
    protected $description = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var NumberCouponSequence $coupon
     */
    protected $coupon = null;

    /**
     * @param AmountBasic $Total
     * @param StringItemDescription $description
     * @param int $quantity
     * @param NumberCouponSequence $coupon
     */
    public function __construct($Total, $description, $quantity, $coupon)
    {
      $this->Total = $Total;
      $this->description = $description;
      $this->quantity = $quantity;
      $this->coupon = $coupon;
    }

    /**
     * @return AmountBasic
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param AmountBasic $Base
     * @return Fee.Details
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return AmountBasic
     */
    public function getEquivalent()
    {
      return $this->Equivalent;
    }

    /**
     * @param AmountBasic $Equivalent
     * @return Fee.Details
     */
    public function setEquivalent($Equivalent)
    {
      $this->Equivalent = $Equivalent;
      return $this;
    }

    /**
     * @return AmountBasic
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param AmountBasic $TotalTax
     * @return Fee.Details
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return AmountBasic
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param AmountBasic $Total
     * @return Fee.Details
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return AmountBasicBankerSellingRate
     */
    public function getFiled()
    {
      return $this->Filed;
    }

    /**
     * @param AmountBasicBankerSellingRate $Filed
     * @return Fee.Details
     */
    public function setFiled($Filed)
    {
      $this->Filed = $Filed;
      return $this;
    }

    /**
     * @return StringItemDescription
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param StringItemDescription $description
     * @return Fee.Details
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Fee.Details
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return NumberCouponSequence
     */
    public function getCoupon()
    {
      return $this->coupon;
    }

    /**
     * @param NumberCouponSequence $coupon
     * @return Fee.Details
     */
    public function setCoupon($coupon)
    {
      $this->coupon = $coupon;
      return $this;
    }

}
