<?php
/*
Ejercicio 2 .Escribir un programa en PHP que añada valores a un array mientras que 
su longitud sea menor a 20 y luego mostrarlo por pantalla
 */

$coleccion = array ();

for($i=0; $i<=20; $i++){
  array_push($coleccion, "elemento-".$i);
  echo $coleccion[$i] . "<br>";
};

//Para imprimir solo el indice 10
echo "<h2>Elemento número 10</h2>";
echo $coleccion[10];




?>