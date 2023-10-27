<!DOCTYPE html>
<html lang="es">
  <head>
    <title>CALCULADORA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <h1>CALCULADORA</h1>
  <form action="index.php" method="post">
  <p>Introduce el número: </p>
  <input type="number" name="numero" id="numero">
  <br>
  <br>
  <input type="submit" name="Calcular">

  <?php
  
  /*Muestra la tabla de multiplicar de un número introducido por teclado. 
  El resultado se debe mostrar en una tabla (<table> en HTML).*/
  
  echo "<table>";
  if(isset($_POST['numero'])){
    $numeroIntroducido=$_POST['numero'];
    echo "<h3>Tabla de multiplicar del número $numero:</h3>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$numeroIntroducido</td><td>x</td><td>$i</td><td>=</td><td>" . ($numeroIntroducido * $i) . "</td></tr>";
    }
  echo "</table>";
  }
  
  
  ?>
  
  </body>
</html>