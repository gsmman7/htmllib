<?php

require_once("Element.php");

class Aside extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "aside";
  }
}
