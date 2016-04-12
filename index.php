<?php


  require __DIR__ . '/vendor/autoload.php';

  use \Nicolas\htmllib\{H1,h2,Header,P,Button,Aside,Div,Element,Footer,image,Nav,Td,Th,Tr,Section,Table,Span,Input,Hr,Form};


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
      echo new Div(new P('Hello world.'));
      echo new Span(new P('Hello world. Sille is Cool'),["style"=>"color:red"]);
      echo new Button('Test', ["type"=>"button", "name"=>"button"]);
      echo new Image("http://static3.fjcdn.com/comments/Burn+your+house+down+for+the+glory+of+satan+_fb6303200afd93da8f624e1d76509640.jpg", "for the glory of...");
      echo new Footer("Footer");
      echo new Hr();
      echo new Aside(new H2("ASIDE"));
      echo new Nav(new P('Ik ben een nav element!'));
      echo new Section(new P("I am a section !!! wheee"));
      echo new Form ("http://labict.be/webtech/formchecker/","POST");
      echo new Table("Ik ben een tabel!");
      echo new Th("Ik ben een Table Header!");


      $trthcontent = "";
      $trthcontent .= new Th("1");
      $trthcontent .= new Th("2");
      $trthcontent .= new Th("3");

      $tdcontent = "";
      $tdcontent .= new Td("a").new Td("b").new Td("c");

      $trtdcontent = "";
      for ($i = 1.; $i <= 10.; $i++) {
            $trtdcontent .= new Tr($tdcontent);
          }

      $tablecontent = "";
      $tablecontent .= new Tr($trthcontent);
      $tablecontent .= $trtdcontent;
      $tablecontent .= ";";

      echo new Table($tablecontent);

    ?>
    </body>
</html>
