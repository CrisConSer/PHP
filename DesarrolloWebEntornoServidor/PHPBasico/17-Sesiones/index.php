<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJERCICIO 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php
    
    $contador = 1;
    if(!isset($_SESSION['contador'])){
      echo $_SESSION['contador'] = 1;
     }else{
      $_SESSION['contador']++;
     };

     echo $_SESSION['contador'];
    


    
    
    ?>
    
  </body>
</html>