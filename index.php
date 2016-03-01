<?php
  require_once('lib/H1.php');
  require_once('lib/H2.php');
  require_once('lib/P.php');
  require_once('lib/Div.php');
  require_once('lib/Button.php');
<<<<<<< HEAD
<<<<<<< HEAD
    require_once('lib/Span.php');
=======
  require_once('lib/Section.php');
>>>>>>> 895ad4c638dc3b5db5f3e904491ae82f6c9e69c9
=======
  require_once('lib/Hr.php');
  require_once('lib/Aside.php');
  require_once('lib/header.php');
  require_once('lib/Nav.php');
  require_once('lib/Section.php');

>>>>>>> 2722db6b89f2ddf0c6f1dfb1df1ba580809a6561
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML-lib</title>
  </head>
  <body>
    <?php
      echo new Header(new P('Wauw, wat een prachtig voorbeeld van een header, wauw. Goed gewerkt Milan Lamote!'));
      echo new H1("HTML Lib demo");
      echo new H2("Welcome");
      echo new P('Welcome to my html-lib.');
      echo new Div(new P('Hello world.'));
<<<<<<< HEAD
      echo new Span(new P('Hello world. Sille is Cool'),["style"=>"color:red"]);
=======
<<<<<<< HEAD

      echo new Hr();
>>>>>>> 2722db6b89f2ddf0c6f1dfb1df1ba580809a6561

=======
>>>>>>> 9be49cdb8932020b33ba317b4c3dce4b59fc59e2
      echo new Button('Test', ["type"=>"button", "name"=>"button"]);


      echo new Aside(new H2("ASIDE"));
      echo new Nav(new P('Ik ben een nav element!'));
      echo new Section(new P("I am a section !!! wheee"));

    ?>
  </body>
</html>
