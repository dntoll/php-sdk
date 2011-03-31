<?php

  //skapar en ny variabel och tilldelar den värdet av en sträng
  $name = "Daniel"; 
  
  //Skapar en ny variabel och tilldelar den ett nummer
  $age = 32;

  //Använder variabler för att skapa en sträng "." används för att sammanfoga strängar
  $body = $name . " är " . $age . " år.";
   

?>
<html>
  <head>
    <title>Hej Världen</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  </head>
  <body>
  <?php
  
    echo $body;
  ?>
  </body>
</head>
