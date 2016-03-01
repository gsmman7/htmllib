<?php


require_once("Element.php");

class Image extends Element
{
  public function __construct($src,$alt, $properties = array())
  {
    parent::__construct('',$properties);
    $this->tag = "img";
    $this->src = $src;
    $this->alt = $alt;
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
    return "<$this->tag src=\"$this->src\" alt=\"$this->alt\" $properties>";
  }
}
