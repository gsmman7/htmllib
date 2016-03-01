<?php

require_once("Element.php");

class Tr extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "Tr";
  }
}
