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
/* Ejercicio 1: Hacer un programa en PHP que tenga un array con 8 números enteros y que haga lo siguiente:
1.- Recorrerlo y mostrarlo
2.- Ordenarlo y mostrarlo
3.- Mostrar su longitud
4.- Buscar algún elemento (buscar por el parámetro que me lleve por la url)
*/

//FUNCIONES
$resultado = "";
function mostrarArray($numeros){
  $resultado = "";
    foreach ($numeros as $numero){
      //$resultado = $resultado.$numero."<br>";
      $resultado .= $numero."<br>";
    }
    return $resultado;
};


// Crear el array
$numeros = array(11,45,75,32,41,23,8,18);

// Recorre y mostrar
echo "<h1>Recorrer y mostrar </h1>";
echo mostrarArray($numeros);


// Ordenarlo y mostrarlo
echo "<h1>Ordenar y mostrar </h1>";
//Para ordenar los números usamos sort
sort($numeros);
echo mostrarArray($numeros);

//Mostrar la longitud
echo "<h1>Mostrar la longitud del array </h1>";
echo count($numeros);
?>

<h1>Busqueda en el array</h1>
<form action="index.php" method = "get">
    Introduce un número: <input type="number" name="numero">
    <input type="submit" value="Buscar">
</form>

<?php

//Busqueda en el array
if(isset($_GET['numero'])){
  $busqueda =$_GET['numero'];
  echo "<h1>Busqueda en el array el número $busqueda </h1>";
  $search = array_search($busqueda,$numeros);
  if(!empty($search)){
    echo "El número buscado existe en el array en el índice " . $search;
  }else{
    echo "No existe el número buscado en el array";
  };
};

?>
  
  </body>
</html>


