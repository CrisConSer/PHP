<!DOCTYPE html>
<html lang="es">
  <head>
    <title>CAJA FUERTE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <?php
/*Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras.
El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el
mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se
ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.*/
  
$combinacion = "1234";

$intentosMaximos = 4;
$intentos = 0;

//Comprobamos si se ha enviado un valor para la combinación

if(isset($_POST["Enviar"])){
  $clave = $_POST["clave"];
  if($entrada==$clave){
    echo "La caja fuerte se ha abierto satisfactoriamente";
  }else {
    $intentos++;
      if($intentos==$intentosMaximos){
        echo "Lo siento, esa no es la combinación y has agotado los intentos";
      }else{
        echo "Lo siento, esa no es la combinación, te quedan: " . ($intentosMaximos - $intentos);
    }
  }
};
  
  ?>

  
  </body>
</html>