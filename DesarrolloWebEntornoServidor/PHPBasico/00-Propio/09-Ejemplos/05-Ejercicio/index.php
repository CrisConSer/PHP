<?php
/* 
Ejercicio 5. Crear un array con el contenido de la siguiente tabla:
ACCION  AVENTURA  DEPORTES
GTA     ASSASINS  FIFA23
COD     CRASH     MOTOGP23
MARIO   PRINCE    PES23

Cada fila debe ir en un fichero separado (includes).
*/


$tabla = array(
  "ACCION" => array ("GTA5", "COD", "MARIO"),
  "AVENTURA" => array ("ASSASINS","CRASH","PRINCE"),
  "DEPORTES" => array ("FIFA23","MOTOGP23", "PES23")
);

$categorias = array_keys($tabla);
?>

<table border ="1">
  <?php require_once 'includes/encabezados.php'; ?>
  <?php require_once 'includes/primera.php'; ?>
  <?php require_once 'includes/segunda.php'; ?>
  <?php require_once 'includes/tercera.php'; ?>
</table>