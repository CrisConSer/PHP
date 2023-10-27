<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DIAS SEMANA</title>
</head>
<body>
  <?php
  
  $dias = $_GET['dias'];

  if ($dias == 1){
    echo ("Lunes");
  }
  else if ($dias == 2){
    echo ("Martes");  
  }
  else if ($dias == 3){
    echo ("Miércoles");  
  }
  else if ($dias == 4){
    echo ("Jueves");  
  }
  else if ($dias == 5){
    echo ("Viernes");  
  }
  else if ($dias == 6){
    echo ("Sábado");  
  }
  else if ($dias == 7){
    echo ("Domingo");  
  }
  else{
    echo("No es un número de la semana");
  }
  
  ?>
  
  
</body>
</html>