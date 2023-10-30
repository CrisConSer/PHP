<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJRCICIO NUMERO 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

    <h3>FORMULARIO DE BIENVENIDA</h3>
    <form action="index.php" method ="post">
      Ingresa tu nombre:
      <input type="text" name="nombre" id="nombre">
      <br>
      <br>
      Ingresa tu edad:
      <input type="number" name="edad" id="edad">
      <br>
      <input type="submit" value="Enviar" id="Enviar">
      <br>

  <?php

  if(isset($_POST['nombre'])&&($_POST['edad'])){
    $nombre=trim($_POST['nombre']);
    $edad=trim($_POST['edad']);
    echo "<br>Tu nombre es " . "<span style = 'font-size:25px; color: green;'>" . $nombre . "</span>" . " y tu edad es de <strong><span style='color:blue; font-size:25px;'>" . $edad . "</span></strong> años";
  };

  ?>
    </form>
  
  </body>
</html>