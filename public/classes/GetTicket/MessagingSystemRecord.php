<?php

class MessagingSystemRecord
{

    /**
     * @var Text $_
     */
    protected $_ = null;

    /**
     * @var \DateTime $StartTimeStamp
     */
    protected $StartTimeStamp = null;

    /**
     * @var \DateTime $EndTimeStamp
     */
    protected $EndTimeStamp = null;

    /**
     * @var Identifier $SystemID
     */
    protected $SystemID = null;

    /**
     * @var Identifier $SystemName
     */
    protected $SystemName = null;

    /**
     * @param Text $_
     * @param \DateTime $StartTimeStamp
     * @param \DateTime $EndTimeStamp
     * @param Identifier $SystemID
     * @param Identifier $SystemName
     */
    public function __construct($_, \DateTime $StartTimeStamp, \DateTime $EndTimeStamp, $SystemID, $SystemName)
    {
      $this->_ = $_;
      $this->StartTimeStamp = $StartTimeStamp->format(\DateTime::ATOM);
      $this->EndTimeStamp = $EndTimeStamp->format(\DateTime::ATOM);
      $this->SystemID = $SystemID;
      $this->SystemName = $SystemName;
    }

    /**
     * @return Text
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Text $_
     * @return MessagingSystemRecord
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTimeStamp()
    {
      if ($this->StartTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTimeStamp
     * @return MessagingSystemRecord
     */
    public function setStartTimeStamp(\DateTime $StartTimeStamp)
    {
      $this->StartTimeStamp = $StartTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTimeStamp()
    {
      if ($this->EndTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTimeStamp
     * @return MessagingSystemRecord
     */
    public function setEndTimeStamp(\DateTime $EndTimeStamp)
    {
      $this->EndTimeStamp = $EndTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getSystemID()
    {
      return $this->SystemID;
    }

    /**
     * @param Identifier $SystemID
     * @return MessagingSystemRecord
     */
    public function setSystemID($SystemID)
    {
      $this->SystemID = $SystemID;
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getSystemName()
    {
      return $this->SystemName;
    }

    /**
     * @param Identifier $SystemName
     * @return MessagingSystemRecord
     */
    public function setSystemName($SystemName)
    {
      $this->SystemName = $SystemName;
      return $this;
    }

}
