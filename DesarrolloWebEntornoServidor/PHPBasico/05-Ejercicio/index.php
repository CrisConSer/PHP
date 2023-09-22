<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2 style = "font-size:25px;">Variables</h2>

  <?php
  
    $numero1 = 144;
    $numero2 = 999;

    
    echo "La primera variable es <strong>$numero1</strong><br>";
    echo "La segunda variable es <strong>$numero2</strong>";
  
  ?>
<h2 style = "font-size:25px;">Calculadora</h2>

<?php

  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $multiplicacion = $numero1 * $numero2;
  $division = $numero2 / $numero1;

  echo "El resultado de la suma es:  <strong>$suma</strong>";
  echo "<br>El resultado de la resta es:  <strong>$resta</strong>";
  echo "<br>El resultado de la multiplicación es: <strong>$multiplicacion</strong> ";
  echo "<br>El resultado de la división es:  <strong>$division</strong>";

?>
  
</body>
</html>