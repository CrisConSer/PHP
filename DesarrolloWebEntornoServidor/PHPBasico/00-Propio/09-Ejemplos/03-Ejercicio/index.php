<?php
/* 
Ejercicio 3. Programa quecompruebe si una variable está vacia y si está vacia
rellenarla con texto en minúsculas y mostrarlo en mayúsculas y negrita
*/

$texto = "";

if(empty($texto)){
  $texto = "Hola yo soy el relleno de la variable texto porque la variable esta vacia";
  $textoMayuscula = strtoupper($texto);
  echo "<b>".strtoupper($texto)."</b>";
}else{
  echo "La variable tiene este contenido dentro " . "'" . $texto . "'.";
};

?>