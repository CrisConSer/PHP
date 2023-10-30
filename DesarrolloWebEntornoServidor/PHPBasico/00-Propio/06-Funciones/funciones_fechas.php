<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EJERCICIO FUNCIONES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php
// Crear funcion que tome como valor dos fechas como cadenas y calcula la diferencia en días de esas fechas

  // Primero creamos la función diferenciaFechas que tenga como argumento dos fechas

  function diferenciaFechas ($fecha1, $fecha2){
    //Convertimos las fechas en formato UNIX
    $f1 = strtotime($fecha1);
    $f2 = strtotime($fecha2);

    //Calculamos la diferencia de segundos entre las fechas y convertimos a días
    $segundos_diferencia = abs ($f1-$f2);
    $dias_diferencia = $segundos_diferencia/(60*60*24);

    //Devolvemos el resultado
    return $dias_diferencia;
  };

  //Llamamos a la función con dos fechas diferentes
  $fecha1 = "2023-10-11";
  $fecha2 = "2023-10-15";
  $dias_diferencia = diferenciaFechas($fecha1, $fecha2);

  //Mostramos el resultado

echo "La diferencia de fechas entre " . $fecha1 . " y " . $fecha2 . " es de " . $dias_diferencia;
  

  



    ?>
  
  </body>
</html>