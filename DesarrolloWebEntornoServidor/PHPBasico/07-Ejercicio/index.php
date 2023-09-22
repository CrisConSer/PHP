<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="Desarrollo Web Entorno Servidor" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1 style="color: green; text-align: center;">Primer ejercicio Relación Nº1</h1>

  
  <?php

  $nombre = "Cris";
  $numero = "651143850";
  $direccion = "Calle Conan Doyle";

  // Para poner estilos dentro el echo hay que usar \" xxxxx \*
  echo "<h3 style = \"background-color : green; color : white;\">Mi nombre es $nombre </h3>"; 
  echo "<h2>Mi número de teléfono es $numero </h2>";
  echo "<h2 style = \"background-color : green; color : white;\">Mi dirección es $direccion </h2>";
   
  ?>
</body>
</html>