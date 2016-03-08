<?php

require_once("Element.php");

class Input extends Element
{
  public function __construct($content, $properties = array())
  {
    parent::__construct($content, $properties);
    $this->tag = "input";
  }
}
