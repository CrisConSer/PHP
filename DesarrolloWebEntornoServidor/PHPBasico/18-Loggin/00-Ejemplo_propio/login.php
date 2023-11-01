<?php
session_start();

if(isset($_POST['Enviar'])){
  if(isset($_POST['usuario']) && isset($_POST['password'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    // Verifica si el usuario y la contraseña son correctos
    if($usuario === "admin" && $password === "admin"){
      header("Location:contenido.php");
      exit();
    } else {
      header("Location:registro.php");
      exit();
    };
  };
};
    
?>
