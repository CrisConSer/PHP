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
$horario=[];

  $horario[""] = "";
  [
    'HORA'=>"15:15-16:15","16:15-17:15","17:15-18:15","18:15-18:30","18:30-19:30","19:30-20:30","20:30-21:30",
    'lunes' => "DWEC","DWEC","DWEC","RECREO","DWES","DWES","DWES",
    'martes' => "DWEC","DWEC","DWEC","RECREO","DAW","DAW","DAW",
    'miercoles' =>"DWES","DWES","DWES","RECREO","DIW","DIW","EIE",
    'jueves' => "DWES","DWES","DWES","RECREO","EIE","EIE","EIE",
    'viernes' => "DIW","DIW","DIW","RECREO","HLC","HLC","HLC",
    ];

// Estilo CSS para la tabla
echo '<style>';
echo 'table {border-collapse: collapse; width: 50%; margin: 0 auto}';
echo 'th{border: 1px solid black; padding: 8px; text-align: center;}';
echo 'tr:nth-child(even) {background-color: #f2f2f2;}'; // Cambiar el color de fondo de filas pares
echo 'td {border: 1px solid black;}'; // Definir el borde de las celdas
echo 'th {background-color: #178AE5; color: white;}'; // Cambiar el color de fondo de las cabeceras
echo '</style>';  

// Crear una tabla HTML
echo '<table border="5">';
echo '<tr><th> HORARIO DE CLASE 2º DAW </th></tr>';

//Con el foreach mostrar los datos del array
foreach ($horario as $horas) {
  echo '<tr>';
  echo '<th>' . $horas['lunes'] . '</th>';
  echo '<th>' . $horas['martes'] . '</th>';
  echo '<th>' . $horas['miercoles'] . '</th>';
  echo '<th>' . $horas['jueves'] . '</th>';
  echo '<th>' . $horas['viernes'] . '</th>';
  echo '</tr>';
}

?>
  
  </body>
</html>