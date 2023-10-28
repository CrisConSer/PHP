<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJERCICIO 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
<?php

//Crar un array asociativo con el horario de clase y mostrarlo por pantalla

  $horario =
  [
    'HORA'=>["HORA","15:15-16:15","16:15-17:15","17:15-18:15","18:15-18:30","18:30-19:30","19:30-20:30","20:30-21:30"],
    'lunes' => ["LUNES","DWEC","DWEC","DWEC","RECREO","DWES","DWES","DWES"],
    'martes' => ["MARTES","DWEC","DWEC","DWEC","RECREO","DAW","DAW","DAW",],
    'miercoles' =>["MIERCOLES","DWES","DWES","DWES","RECREO","DIW","DIW","EIE"],
    'jueves' => ["JUEVES","DWES","DWES","DWES","RECREO","EIE","EIE","EIE",],
    'viernes' => ["VIERNES","DIW","DIW","DIW","RECREO","HLC","HLC","HLC",]
  ];

// Estilo CSS para la tabla
echo '<style>';
echo 'table {border-collapse: collapse; width: 50%; margin: 0 auto}';
echo 'th{border: 1px solid black; padding: 8px; text-align: center; font-family:Arial, Sans-serif}';
echo 'tr:nth-child(even) {background-color: #f2f2f2; font-family:Arial, Sans-serif}'; // Cambiar el color de fondo de filas pares
echo 'td {border: 1px solid black;font-family:Arial, Sans-serif}'; // Definir el borde de las celdas
echo 'th {background-color: #178AE5; color: white;}'; // Cambiar el color de fondo de las cabeceras
echo '</style>';  

// Crear una tabla HTML
echo '<table border="5">';
echo '<tr><th> HORARIO DE CLASE 2º DAW </th></tr>';

echo '<table border="5">';
    
   // Con el for mostrar los datos del array
   for ($i = 0; $i < count($horario['HORA']); $i++) {
    echo '<tr>';
    echo '<td>' . $horario['HORA'][$i] . '</td>';
    echo '<td>' . $horario['lunes'][$i] . '</td>';
    echo '<td>' . $horario['martes'][$i] . '</td>';
    echo '<td>' . $horario['miercoles'][$i] . '</td>';
    echo '<td>' . $horario['jueves'][$i] . '</td>';
    echo '<td>' . $horario['viernes'][$i] . '</td>';
    echo '</tr>';
  }

  echo '</table>';

?>
  
  </body>
</html>