<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <h2>Contador de dígitos</h2>
    <form method="post" action="">
        <label for="numero">Introduce un número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" name="valor" value="Contar dígitos">
    </form>

  <?php
/*Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado*/

if (isset($_POST['valor'])) {
  $numeroIngresado = $_POST['numero'];
  $contadorDigitos = 0;
  
  do {
      $numeroIngresado = (int) ($numeroIngresado/10);
      $contadorDigitos++;
  } while ($numeroIngresado > 0);

  echo "<p>El número $numeroIngresado tiene $contadorDigitos dígitos.</p>";
}

?>
  
  </body>
</html>