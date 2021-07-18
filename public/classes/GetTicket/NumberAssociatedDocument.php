<?php

class NumberAssociatedDocument
{

    /**
     * @var StringLength1to15 $_
     */
    protected $_ = null;

    /**
     * @var CodeAssociationType $associationType
     */
    protected $associationType = null;

    /**
     * @var NumberCouponSequence $couponNumber
     */
    protected $couponNumber = null;

    /**
     * @var NumberCheckDigit $checkDigit
     */
    protected $checkDigit = null;

    /**
     * @param StringLength1to15 $_
     * @param CodeAssociationType $associationType
     * @param NumberCouponSequence $couponNumber
     * @param NumberCheckDigit $checkDigit
     */
    public function __construct($_, $associationType, $couponNumber, $checkDigit)
    {
      $this->_ = $_;
      $this->associationType = $associationType;
      $this->couponNumber = $couponNumber;
      $this->checkDigit = $checkDigit;
    }

    /**
     * @return StringLength1to15
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StringLength1to15 $_
     * @return Number.AssociatedDocument
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return CodeAssociationType
     */
    public function getAssociationType()
    {
      return $this->associationType;
    }

    /**
     * @param CodeAssociationType $associationType
     * @return Number.AssociatedDocument
     */
    public function setAssociationType($associationType)
    {
      $this->associationType = $associationType;
      return $this;
    }

    /**
     * @return NumberCouponSequence
     */
    public function getCouponNumber()
    {
      return $this->couponNumber;
    }

    /**
     * @param NumberCouponSequence $couponNumber
     * @return Number.AssociatedDocument
     */
    public function setCouponNumber($couponNumber)
    {
      $this->couponNumber = $couponNumber;
      return $this;
    }

    /**
     * @return NumberCheckDigit
     */
    public function getCheckDigit()
    {
      return $this->checkDigit;
    }

    /**
     * @param NumberCheckDigit $checkDigit
     * @return Number.AssociatedDocument
     */
    public function setCheckDigit($checkDigit)
    {
      $this->checkDigit = $checkDigit;
      return $this;
    }

}
