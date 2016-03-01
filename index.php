<?php
  require_once('lib/H1.php');
  require_once('lib/H2.php');
  require_once('lib/P.php');
  require_once('lib/Div.php');
  require_once('lib/Button.php');
<<<<<<< HEAD
    require_once('lib/Span.php');
=======
  require_once('lib/Section.php');
>>>>>>> 895ad4c638dc3b5db5f3e904491ae82f6c9e69c9
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

      echo new Section(new P("I am a section !!! wheee"));
    ?>
    <button type="button" name="button">Test</button>
  </body>
</html>
