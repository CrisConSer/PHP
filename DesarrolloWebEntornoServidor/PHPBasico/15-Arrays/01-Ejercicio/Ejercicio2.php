<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
        
    <?php
        $datos=[];

        for ($i = 0; $i < 20; $i++){
          $numero= rand (0,100);

          $datos[$i] = [
            'numero' => $numero,
            'cuadrado' => $numero * $numero,
            'cubo' => $numero * $numero * $numero
          ];
        }

    // Estilo CSS para la tabla
echo '<style>';
echo 'table {border-collapse: collapse; width: 50%; margin: 0 auto}';
echo 'th, td {border: 1px solid black; padding: 8px; text-align: center;}';
echo 'tr:nth-child(even) {background-color: #f2f2f2;}'; // Cambiar el color de fondo de filas pares
echo 'td {border: 1px solid black;}'; // Definir el borde de las celdas
echo 'th {background-color: #178AE5; color: white;}'; // Cambiar el color de fondo de las cabeceras
echo 'body {background-image: url(\'./fondo.jpeg\'); background-size: 75% 100%}';
echo '</style>';  

    // Crear una tabla HTML
    echo '<table border="5">';
    echo '<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>';


// Iterar a través de los datos y agregar filas a la tabla
foreach ($datos as $dato) {
    echo '<tr>';
    echo '<td>' . $dato['numero'] . '</td>';
    echo '<td>' . $dato['cuadrado'] . '</td>';
    echo '<td>' . $dato['cubo'] . '</td>';
    echo '</tr>';
}

    echo '</table>';

  ?>
  
</body>
</html>