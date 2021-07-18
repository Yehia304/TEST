<?php

class PaymentVoucher
{

    /**
     * @var date $ExpireDate
     */
    protected $ExpireDate = null;

    /**
     * @var CodeVoucherSeries $SeriesCode
     */
    protected $SeriesCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return date
     */
    public function getExpireDate()
    {
      return $this->ExpireDate;
    }

    /**
     * @param date $ExpireDate
     * @return Payment.Voucher
     */
    public function setExpireDate($ExpireDate)
    {
      $this->ExpireDate = $ExpireDate;
      return $this;
    }

    /**
     * @return CodeVoucherSeries
     */
    public function getSeriesCode()
    {
      return $this->SeriesCode;
    }

    /**
     * @param CodeVoucherSeries $SeriesCode
     * @return Payment.Voucher
     */
    public function setSeriesCode($SeriesCode)
    {
      $this->SeriesCode = $SeriesCode;
      return $this;
    }

}
