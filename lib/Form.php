<?php

  namespace Nicolas\htmllib;
   use Nicolas\htmllib\Element;


require_once("Element.php");

class Form extends Element
{
  public function __construct($action,$method, $properties = array())
  {
    parent::__construct('',$properties);
    $this->tag = "form";
    $this->action = $action;
    $this->method = $method;
  }
  public function __toString()
  {
    if($this->tag == '') {
      throw new Exception('Element tag is empty.');
    }
    $properties = '';
    foreach ($this->properties as $key => $value) {
      $properties .= "$key=\"$value\" ";
    }
    return "<$this->tag action=\"$this->action\" method=\"$this->method\" $properties></$this->tag>";
  }
}
