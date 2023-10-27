<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJERCICIO 1F</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  
  <?php
  
  /* Ejercicio FizzBuzz. Pintar números del 1 al 100.
1.- Si múltiplo de 3, pintar Fizz
2.- Si múltiplo de 5, pintar Buzz
3.- Si múltiplo de 3 y 5, pintar FizzBuzz
*/

// Definimos una variable y la inicializamos en 0
$numero = 0;

//Imprimimos por pantalla los números del 1 al 100
for ($i = 0; $i <=100; $i++) {
  echo $i . "<br>";
  $numero++; //Almacenamos en la variable los números para comprobar sus múltiplos
 
  // Comprobamos la condición para ver si es múltiplo de 3
     if ($numero % 3== 0) {
      echo "Fizz";
      }
      //Comprobamos la condición para ver si es múltiplo de 5
      if ($numero % 5 == 0) {
        echo "Buzz";
        }
        //Comprobamos si cumple tanto la condición de múltiplo de 3 y 5
          if ($numero % 3 == 0 && $numero % 5== 0) {
            echo "FizzBuzz";
          }
    else{
      echo $i . "<br>";
    }
}

  ?>
  </body>
</html>