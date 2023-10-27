<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Números, Cuadrados y Cubos</title>
</head>
<body>
  <?php

  $numero = [];
  $cuadrado = [];
  $cubo = [];

  // Llenar el array $numero con 20 números aleatorios entre 0 y 100
  for ($i = 0; $i < 20; $i++) {
    $numero[$i] = rand(0, 100);
  }

  // Calcular y llenar los arrays $cuadrado y $cubo con los cuadrados y cubos de los números
  for ($i = 0; $i < 20; $i++) {
    $cuadrado[$i] = $numero[$i] * $numero[$i];
    $cubo[$i] = $numero[$i] * $numero[$i] * $numero[$i];
  }

  // Crear una tabla HTML
  echo '<table border="1">';
  echo '<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>';

  // Iterar a través de los arrays y agregar filas a la tabla
  for ($i = 0; $i < 20; $i++) {
    echo '<tr>';
    echo '<td>' . $numero[$i] . '</td>';
    echo '<td>' . $cuadrado[$i] . '</td>';
    echo '<td>' . $cubo[$i] . '</td>';
    echo '</tr>';
  }

  echo '</table>';

  ?>
</body>
</html>
