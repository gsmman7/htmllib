<?php

require_once("Element.php");


// this is a comment, dag wereld

class Section extends Element
{
  public function __construct($content)
  {
    // hello
    parent::__construct($content);
    $this->tag = "section";
  }
}
