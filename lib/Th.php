<?php
require_once('Element.php');

class Th extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "th";
  }
}
 ?>
