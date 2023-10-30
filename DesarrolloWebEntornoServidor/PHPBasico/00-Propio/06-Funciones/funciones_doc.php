<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJERCICIO 6 - DOCUMENTOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php
    
    // Usamos la funcion file_get_content para leer en contenido del archivo.txt
    $contenido = file_get_contents("archivo.txt");
    echo "$contenido";

    // Para contar las palabras de una cadena usamos str_worl_count
    $contador = file_get_contents("archivo.txt");
    $total_palabras = str_word_count($contador);
    echo "<br>" . "El número de palabras es de: " . $total_palabras;
   
    ?>
  
  </body>
</html>