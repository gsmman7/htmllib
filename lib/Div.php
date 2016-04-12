<?php

 namespace Nicolas\htmllib;
  use Nicolas\htmllib\Element;



class Div extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "div";
  }
}
