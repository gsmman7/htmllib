<?php
require_once('Element.php');

class Table extends Element
{
  public function __construct($content)
  {
    parent::__construct($content);
    $this->tag = "table";
  }
}
 ?>
