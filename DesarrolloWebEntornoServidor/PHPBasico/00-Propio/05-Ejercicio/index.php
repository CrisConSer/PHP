<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJRCICIO NUMERO 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <h3>CALCULAR EL NÚMERO PRIMO</h3>
  <form action="" method="post">
    Introduce un número:
    <input type="text" name="numero" id="numero">
    <br>
    <input type="submit" value="Enviar">
    <br>
  
  <?php

function esPrimo($numero){
  if ($numero <= 1) {
      return false;
  }
  for ($i = 2; $i <= sqrt($numero); $i++) {
      if ($numero % $i == 0) {
          return false;
      }
  }
  return true;
}

if (isset($_POST['numero'])) {
  $numero = $_POST['numero'];
  if (esPrimo($numero)) {
      echo "$numero es un número primo.";
  } else {
      echo "$numero no es un número primo.";
  }
}
 
  

  ?>
    
  
  </body>
</html>