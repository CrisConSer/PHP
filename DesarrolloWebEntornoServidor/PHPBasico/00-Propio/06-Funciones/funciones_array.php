<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJERCICIO 6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php
    
    // Crear función que tome un array de numeros como argumento y devuelva la suma de todos los elementos del array.

    // Primero definimos el array de los número que vamos a usar
      // Uso ran para conseguir números aleatorios del 0-50
    $numeros = array (rand (0,50));

    //Segundo creamos la función calcularSuma que tomará como argumento el array

    function calcularSuma($array){
      $sum = 0;
      foreach ($array as $numero){
        $sum += $numero;
      }
      return $sum;
    }

    // Tercero, llamamo a la función con el array definido al principio

    $numeros = array (rand (0,50));
    $suma_total = calcularSuma($numeros);
    echo "La suma de todos los números del array es: " . $suma_total; 
    
    ?>
  
  </body>
</html>