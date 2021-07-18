<?php

class TransformsType
{

    /**
     * @var TransformType $Transform
     */
    protected $Transform = null;

    /**
     * @param TransformType $Transform
     */
    public function __construct($Transform)
    {
      $this->Transform = $Transform;
    }

    /**
     * @return TransformType
     */
    public function getTransform()
    {
      return $this->Transform;
    }

    /**
     * @param TransformType $Transform
     * @return TransformsType
     */
    public function setTransform($Transform)
    {
      $this->Transform = $Transform;
      return $this;
    }

}
