<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJERCICIO 2 </title>
</head>
<body>
  <?php
// Muestra los número múltiplos de 5 de 0 al 100 utilizando el bucle while
  $i=0;

while($i<=100){
  if($i%5==0){
    echo $i . "-";
  }
  $i++;
}

 
  ?>
  
</body>
</html>