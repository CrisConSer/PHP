<?php
session_start();

if (!isset($_SESSION['usuario']) && isset($_SESSION['password'])) {
  header("Location:login.php");
  exit();
}

echo "Hola, esta es la página de contenido que ves después de iniciar sesión";
echo "<br>" . "<img src='estilos/imagen.jpg' alt= 'Imagen'>";
?>
<br><br>
<a href="cerrarsesion.php">Cerrar sesión</a>

