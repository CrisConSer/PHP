<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJERCICIO FUNCIONES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php

    // Creamos la función longitudCadenas que toma un array de cadenas como argumento y devuelve un nuevo array con la longitud de cada cadena
    function longitudCadenas($array) {
        $longitudes = array(); // Creamos un nuevo array para almacenar las longitudes
        foreach ($array as $cadena) {
            $longitudes[] = strlen($cadena); // Agregamos la longitud de cada cadena al nuevo array
        }
        return $longitudes; // Devolvemos el nuevo array con las longitudes
    }

    // Definimos el array de cadenas
    $cadenas = array("hola", "como", "estas");

    // Llamamos a la función con el array definido
    $longitudes_resultado = longitudCadenas($cadenas);

    // Mostramos el resultado
    echo "Las longitudes de las cadenas son: ";
    foreach ($longitudes_resultado as $longitud) {
        echo $longitud . " ";
    }
    ?>
  
  </body>
</html>
