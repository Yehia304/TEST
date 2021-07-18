<?php

class Diagnostic
{

    /**
     * @var string $DataText
     */
    protected $DataText = null;

    /**
     * @var DataXML $DataXML
     */
    protected $DataXML = null;

    /**
     * @var StringLength1to128 $type
     */
    protected $type = null;

    /**
     * @param StringLength1to128 $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDataText()
    {
      return $this->DataText;
    }

    /**
     * @param string $DataText
     * @return Diagnostic
     */
    public function setDataText($DataText)
    {
      $this->DataText = $DataText;
      return $this;
    }

    /**
     * @return DataXML
     */
    public function getDataXML()
    {
      return $this->DataXML;
    }

    /**
     * @param DataXML $DataXML
     * @return Diagnostic
     */
    public function setDataXML($DataXML)
    {
      $this->DataXML = $DataXML;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param StringLength1to128 $type
     * @return Diagnostic
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
