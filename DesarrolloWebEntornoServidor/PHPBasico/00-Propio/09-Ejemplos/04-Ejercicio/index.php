<?php
/*
Ejercicio 4. Crear un script que tenga 4 variable, una tipo array
otra de tipo string, otra int y otra booleana y que imprima un mensaje
según el tipo de la variable que sea.
*/

$matriz = array ("hola mundo", 88);
$titulo = "Aprende PHP";
$numero = 18;
$verdadero = true;

if(is_array($matriz)){
  echo "<h1>Es un array</h1>";
}
if(is_string($titulo)){
  echo "<h1>$titulo</h1>";
}

if(is_int($numero)){
  echo "<h1>$numero</h1>";
}

if(is_bool($verdadero)){
  echo "<h1>El booleano es verdadero</h1>";
};

?>