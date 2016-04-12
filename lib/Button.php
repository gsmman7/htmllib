<?php

 namespace Nicolas\htmllib;
  use Nicolas\htmllib\Element;



class Button extends Element
{
  public function __construct($content, $properties = array())
  {
    parent::__construct($content, $properties);
    $this->tag = "button";
  }
}
