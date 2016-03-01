<?php
  require_once('lib/H1.php');
  require_once('lib/H2.php');
  require_once('lib/P.php');
  require_once('lib/Div.php');
  require_once('lib/Button.php');
  require_once ('lib/image.php');
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

      echo new Button('Test', ["type"=>"button", "name"=>"button"]);
      echo new Image("http://static3.fjcdn.com/comments/Burn+your+house+down+for+the+glory+of+satan+_fb6303200afd93da8f624e1d76509640.jpg", "for the glory of...");
    ?>
    <button type="button" name="button">Test</button>
  </body>
</html>
