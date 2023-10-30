<?php

// borrar cookies
if($_COOKIE['micookie']){
  unset($_COOKIE['micookie']);
  // Al poner time()-100 hacemos que la sesión ya esté expirada
  setcookie('micookie','',time()-100);
}

header('Location:ver_cookies.php');
?>

