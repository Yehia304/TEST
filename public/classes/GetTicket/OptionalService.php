<?php

class OptionalService
{

    /**
     * @var IdentifierProvider $FeeProvider
     */
    protected $FeeProvider = null;

    /**
     * @var MiscellaneousIndicators $Indicators
     */
    protected $Indicators = null;

    /**
     * @var RemarkDetails $PresentTo
     */
    protected $PresentTo = null;

    /**
     * @var RemarkDetails $PresentAt
     */
    protected $PresentAt = null;

    /**
     * @var CodeFeeGroup $group
     */
    protected $group = null;

    /**
     * @var StringText $groupDescription
     */
    protected $groupDescription = null;

    /**
     * @var CodeItemReasonForIssuance $reason
     */
    protected $reason = null;

    /**
     * @var CodeSSR $ssr
     */
    protected $ssr = null;

    /**
     * @var CodeFilingSource $filingSource
     */
    protected $filingSource = null;

    /**
     * @var CodeJourneyType $journeyType
     */
    protected $journeyType = null;

    /**
     * @param CodeFeeGroup $group
     * @param StringText $groupDescription
     * @param CodeItemReasonForIssuance $reason
     * @param CodeSSR $ssr
     * @param CodeFilingSource $filingSource
     * @param CodeJourneyType $journeyType
     */
    public function __construct($group, $groupDescription, $reason, $ssr, $filingSource, $journeyType)
    {
      $this->group = $group;
      $this->groupDescription = $groupDescription;
      $this->reason = $reason;
      $this->ssr = $ssr;
      $this->filingSource = $filingSource;
      $this->journeyType = $journeyType;
    }

    /**
     * @return IdentifierProvider
     */
    public function getFeeProvider()
    {
      return $this->FeeProvider;
    }

    /**
     * @param IdentifierProvider $FeeProvider
     * @return OptionalService
     */
    public function setFeeProvider($FeeProvider)
    {
      $this->FeeProvider = $FeeProvider;
      return $this;
    }

    /**
     * @return MiscellaneousIndicators
     */
    public function getIndicators()
    {
      return $this->Indicators;
    }

    /**
     * @param MiscellaneousIndicators $Indicators
     * @return OptionalService
     */
    public function setIndicators($Indicators)
    {
      $this->Indicators = $Indicators;
      return $this;
    }

    /**
     * @return RemarkDetails
     */
    public function getPresentTo()
    {
      return $this->PresentTo;
    }

    /**
     * @param RemarkDetails $PresentTo
     * @return OptionalService
     */
    public function setPresentTo($PresentTo)
    {
      $this->PresentTo = $PresentTo;
      return $this;
    }

    /**
     * @return RemarkDetails
     */
    public function getPresentAt()
    {
      return $this->PresentAt;
    }

    /**
     * @param RemarkDetails $PresentAt
     * @return OptionalService
     */
    public function setPresentAt($PresentAt)
    {
      $this->PresentAt = $PresentAt;
      return $this;
    }

    /**
     * @return CodeFeeGroup
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param CodeFeeGroup $group
     * @return OptionalService
     */
    public function setGroup($group)
    {
      $this->group = $group;
      return $this;
    }

    /**
     * @return StringText
     */
    public function getGroupDescription()
    {
      return $this->groupDescription;
    }

    /**
     * @param StringText $groupDescription
     * @return OptionalService
     */
    public function setGroupDescription($groupDescription)
    {
      $this->groupDescription = $groupDescription;
      return $this;
    }

    /**
     * @return CodeItemReasonForIssuance
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param CodeItemReasonForIssuance $reason
     * @return OptionalService
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return CodeSSR
     */
    public function getSsr()
    {
      return $this->ssr;
    }

    /**
     * @param CodeSSR $ssr
     * @return OptionalService
     */
    public function setSsr($ssr)
    {
      $this->ssr = $ssr;
      return $this;
    }

    /**
     * @return CodeFilingSource
     */
    public function getFilingSource()
    {
      return $this->filingSource;
    }

    /**
     * @param CodeFilingSource $filingSource
     * @return OptionalService
     */
    public function setFilingSource($filingSource)
    {
      $this->filingSource = $filingSource;
      return $this;
    }

    /**
     * @return CodeJourneyType
     */
    public function getJourneyType()
    {
      return $this->journeyType;
    }

    /**
     * @param CodeJourneyType $journeyType
     * @return OptionalService
     */
    public function setJourneyType($journeyType)
    {
      $this->journeyType = $journeyType;
      return $this;
    }

}
