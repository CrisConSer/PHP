<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJERCICIO 3 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
  <?php

  //Mostrar los números primos entre el 1 y el número introducido

  if (isset($_GET["numero"]) && ($_GET["numero"])<=1000) {
    for ($i = 1; $i < $_GET["numero"]; $i++) {
      if( $numero % $i == 0) {
        echo $i . " Es primo " . "<br>";
      }else{
        echo $i . " No es primo " . "<br>";
      }
    }
  }
    
  ?>
  
  </body>
</html>