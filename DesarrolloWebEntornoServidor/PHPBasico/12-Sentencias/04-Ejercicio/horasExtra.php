<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

  $horasExtra = $_GET["horasExtra"];

  if ($horasExtra<=40){
    echo ("El salario es ").($horasExtra * 12);
  }
  else{
    echo ("El salario es ").($horasExtra * 16);
  }

?>
  
</body>
</html>