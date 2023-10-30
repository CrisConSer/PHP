<!DOCTYPE html>
<html lang="es">
  <head>
    <title>INICIAR SESION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <form action="sesion.php" method="post">
      Usuario: <input type="text" name="user"><br>
      Contraseña: <input type ="password" name="pass"><br>
      <input type="submit" name="enviar" valuer = "Iniciar Sesión">
    </form>

    <?php

    if(isset($_POST["enviar"])){
      $user = $_POST["user"];
      $pass = $_POST["pass"];
      if ($user == "Cris" && $pass == 1234){
        echo "Sesión iniciada";
      }else{
        echo "El usuario o contraseña en incorrecto";
      };
    };
    ?>
  
  </body>
</html>