<?php

class CodeApproval
{

    /**
     * @var IdentifierApproval $_
     */
    protected $_ = null;

    /**
     * @var CodeApprovalSource $source
     */
    protected $source = null;

    /**
     * @var CodeApprovalType $type
     */
    protected $type = null;

    /**
     * @param IdentifierApproval $_
     * @param CodeApprovalSource $source
     * @param CodeApprovalType $type
     */
    public function __construct($_, $source, $type)
    {
      $this->_ = $_;
      $this->source = $source;
      $this->type = $type;
    }

    /**
     * @return IdentifierApproval
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param IdentifierApproval $_
     * @return Code.Approval
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return CodeApprovalSource
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param CodeApprovalSource $source
     * @return Code.Approval
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return CodeApprovalType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CodeApprovalType $type
     * @return Code.Approval
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
