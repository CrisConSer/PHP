<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
     echo " Tras indicar tus dos número te muestro los diferentes resultados<br>";
     echo "La suma es: " . $_GET['numero1'] + $_GET['numero2'] . "<br>";
     echo "La resta es: " . $_GET['numero1'] - $_GET['numero2'] . "<br>";
     echo "La multiplicacion  es: " . $_GET['numero1'] * $_GET['numero2'] . "<br>";
     echo "La division es: " . $_GET['numero1'] / $_GET['numero2'] . "<br>";
    
  ?>
  
</body>
</html>