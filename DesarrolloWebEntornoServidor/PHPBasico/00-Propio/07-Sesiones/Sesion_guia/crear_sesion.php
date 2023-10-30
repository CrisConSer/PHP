<?php

/* Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
hasta que cierra sesión o cierra el navegador
*/

// Primero: Iniciar sesión
session_start();

// Creamos variable local para realizar prueba
$nombre = "Mi nombre es Cris";

//Creamos variable global de SESION
$_SESSION['nombre_global'] = " Estoy dentro de la sesión de Cris";

echo $nombre . "<br>";
echo $_SESSION['nombre_global'];


?>