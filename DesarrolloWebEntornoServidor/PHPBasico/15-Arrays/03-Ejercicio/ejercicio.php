<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <?php

  $arrayOriginal = [];
  $arrayRotado = [];

  for($i=0; $i<15; $i++){
    $numeros=rand(0,50);
    $arrayOriginal[$i]=$numeros;
  }

  for ($i=0; $i<15; $i++){
    $arrayRotado[$i]=$arrayOriginal[$i+1];
  }
  $arrayRotado[14]=$arrayOriginal[0];

  for ($i=0; $i<15; $i++){
    echo $arrayOriginal[$i]. " ";
  }
  echo "<br>";

  for ($i=0; $i<15; $i++){
    echo $arrayRotado[$i]. " ";
  }

  echo "<br>";

  for ($i=0; $i<15; $i++){
    $arrayOriginal[$i]=$arrayRotado[$i-1];
  }
  $arrayOriginal[0]=$arrayRotado[14];
  



?> 
  </body>
</html>