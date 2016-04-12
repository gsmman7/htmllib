<?php

 namespace Nicolas\htmllib;
  use Nicolas\htmllib\Element;

require_once('Element.php');

class Span extends Element
{
  public function __construct($content, $properties = array())
  {
    parent::__construct($content, $properties);
    $this->tag = "span";
  }
}
 ?>
