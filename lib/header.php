<?php

  namespace Nicolas\htmllib;
   use Nicolas\htmllib\Element;

class Header extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "header";
  }
}
