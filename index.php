<?php
  require_once('lib/H1.php');
  require_once('lib/H2.php');
  require_once('lib/P.php');
  require_once('lib/Div.php');
  require_once('lib/Button.php');
    require_once('lib/Span.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML-lib</title>
  </head>
  <body>
    <?php
      echo new H1("HTML Lib demo");
      echo new H2("Welcome");
      echo new P('Welcome to my html-lib.');

      echo new Div(new P('Hello world.'));
      echo new Span(new P('Hello world. Sille is Cool'),["style"=>"color:red"]);

      echo new Button('Test', ["type"=>"button", "name"=>"button"]);
    ?>
    <button type="button" name="button">Test</button>
  </body>
</html>
