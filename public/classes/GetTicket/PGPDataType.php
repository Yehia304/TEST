<?php

class PGPDataType
{

    /**
     * @var base64Binary $PGPKeyID
     */
    protected $PGPKeyID = null;

    /**
     * @var base64Binary $PGPKeyPacket
     */
    protected $PGPKeyPacket = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param base64Binary $PGPKeyID
     * @param string $any
     */
    public function __construct($PGPKeyID, $any)
    {
      $this->PGPKeyID = $PGPKeyID;
      $this->any = $any;
    }

    /**
     * @return base64Binary
     */
    public function getPGPKeyID()
    {
      return $this->PGPKeyID;
    }

    /**
     * @param base64Binary $PGPKeyID
     * @return PGPDataType
     */
    public function setPGPKeyID($PGPKeyID)
    {
      $this->PGPKeyID = $PGPKeyID;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPGPKeyPacket()
    {
      return $this->PGPKeyPacket;
    }

    /**
     * @param base64Binary $PGPKeyPacket
     * @return PGPDataType
     */
    public function setPGPKeyPacket($PGPKeyPacket)
    {
      $this->PGPKeyPacket = $PGPKeyPacket;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return PGPDataType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
