<!DOCTYPE html>
<html lang="es">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <?
  include("../16-Funciones/01-Ejercicios/function.php");

  for ($i = 1; $i <= 1000; $i++) {
    if (esPrimo($i)) {
      echo $i . " ";
    }
  }
  ?>

</body>

</html>