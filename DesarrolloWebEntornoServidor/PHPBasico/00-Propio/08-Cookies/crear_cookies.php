<?php
/*Cookies: Es un fichero que se almacena en el ordenador del usuario que visita
la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web
*/

//Primero: Creamos la cookie
  // Cookies básica
  setcookie("micookie", "valor de mi galleta");

  // Cookie con expiración
  setcookie("unyear","valor de mi cookies de 365 días", time()+(60*60*24*365));

  header('Location:ver_cookies.php');
?>

<a href="ver_cookies.php">Ver las Galletas</a>