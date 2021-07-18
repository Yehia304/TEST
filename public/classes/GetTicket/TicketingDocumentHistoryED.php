<?php

class TicketingDocumentHistoryED
{

    /**
     * @var Remark.Details[] $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Remark.Details[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param Remark.Details[] $Text
     * @return TicketingDocument.History.ED
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

}
