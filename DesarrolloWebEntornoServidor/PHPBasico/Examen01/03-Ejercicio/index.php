<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Formulario para encontrar números primos</title>
    <script>
      function validarFormulario() {
        var numero = document.forms["numeroForm"]["numero"].value;
        if (isNaN(numero) || numero < 1 || numero >= 1000) {
          alert("El número introducido no es correcto, por favor, introduzca un número entre 1 y 1.000");
          return false;
        }
      }
    </script>
  </head>
  <body>
    <form name="numeroForm" method="post" action="" onsubmit="return validarFormulario()">
      <label for="numero">Introduce un número menor a 1000:</label><br>
      <input type="text" id="numero" name="numero"><br><br>
      <input type="submit" value="Encontrar números primos">
    </form>
    <br>

    <?php
    function esPrimo($numero)
    {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $numero; $i++) {
            if ($numero % $i === 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['numero'])) {
            $numero_usuario = (int)$_POST['numero'];

            if ($numero_usuario < 1000) {
                echo "Números primos entre " . $numero_usuario . " y 1000: <br>";
                for ($i = $numero_usuario; $i <= 1000; $i++) {
                    if (esPrimo($i)) {
                        echo $i . " " . "<br>";
                    }
                }
            } else {
                echo "Por favor, introduce un número menor a 1000.";
            }
        }
    }
    ?>
  </body>
</html>
