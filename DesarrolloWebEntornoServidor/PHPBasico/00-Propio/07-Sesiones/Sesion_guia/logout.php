<?php
// Vamos a iniciar sesión y borrar la sesión para que no se pueda acceder en página1.php

// Primero: Iniciamos sesión
session_start();

//Segundo: Borramos sesión
session_destroy();

?>