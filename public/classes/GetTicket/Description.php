<?php

class Description
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var language $lang
     */
    protected $lang = null;

    /**
     * @param string $_
     * @param language $lang
     */
    public function __construct($_, $lang)
    {
      $this->_ = $_;
      $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return Description
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return language
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param language $lang
     * @return Description
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
