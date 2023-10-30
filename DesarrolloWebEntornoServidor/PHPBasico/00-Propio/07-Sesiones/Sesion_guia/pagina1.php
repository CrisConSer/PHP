<?php

/* Quiero imprimir las dos variables creadas en el fichero sesion_guia
echo $nombre . "<br>";
echo $_SESSION['nombre_global'];
Esto nos daría error ya que no hemos iniciado sesion para traernos la variable superglobla */

// Primero tenemos que iniciar sesion

session_start();
echo $_SESSION['nombre_global'];

?>