<?php

require_once("Element.php");

class Footer extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "footer";
  }
}
