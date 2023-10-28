<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <!--Crear programa para que el usuario ingrese su edad y nos diga si es mayor o menor-->

  <h3>Dime tu edad: </h3>
  <form action="index.php" method="post">
    <input type="text" name="edad">
    <br>
    <input type="submit" value="Enviar">
    <br>
    <br>

  <?php

  //Usamos isset() para comprobar si una variable está definida.
  //Primero necesitamos verificar el valor de $_POST['edad'] y despues convertir a un entero

  if (isset($_POST['edad'])){
    $edad = (int)$_POST['edad'];
    if($edad>=18){
      echo "Eres mayor de edad, tu edad es " . $edad . " años";
    }else {
      echo "Eres menor de edad, tu edad es " . $edad . " años";
    }
  }
  
  
  ?>

  
  </body>
</html>