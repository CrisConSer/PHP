<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JUEGO DADO</title>
</head>
<body>

    <?php
  
  echo("Jugador Uno: CRIS");
  echo("<br>");
  $dado1 = rand (1,6);
    echo("<img src = \"img/" .$dado1 .".svg\">");

  $dado2 = rand (1,6);
    echo("<img src = \"img/" .$dado2 .".svg\">");
  
    echo("<br>");
    $resultadoCris = $dado1 + $dado2;
    echo ("La suma de los dos dados es: ". $resultadoCris);

    echo("<br>");
    echo("<br>");

  echo("Jugador dos: ESTEFI");
  echo("<br>");
  $dado3 = rand (1,6);
    echo("<img src = \"img/" .$dado3 .".svg\">");
  
  $dado4 = rand (1,6);
    echo("<img src = \"img/" .$dado4 .".svg\">");
    
    echo("<br>");
    $resultadoAntonio = $dado3 + $dado4;
    echo ("La suma de los dos dados es: ".$dado3 + $dado4);

    echo("<br>");
    echo("<br>");
    if ($resultadoCris > $resultadoAntonio){
      echo ("<h2><strong>La ganadora es Cris</strong></h2>");
    }
    else if ($resultadoCris==$resultadoAntonio){
      echo("<h2><strong>Habéis empatado</strong></h2>");
    }
    else{
      echo("<h2><strong>Estefi gana</strong></h2>");
    }

  ?>
</body>
</html>