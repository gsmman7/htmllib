<?php

  namespace Nicolas\htmllib;

class Element
{
  protected $content = '';
  protected $tag = '';
  protected $properties = array();

  public function __construct($content, $properties = array())
  {
    $this->content = $content;
    $this->properties = $properties;
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
    return "<$this->tag $properties>$this->content</$this->tag>";
  }
}
