<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <?
  /*
   esCapicua: Devuelve verdadero si el número que se pasa como parámetro es
  capicúa y falso en caso contrario. 
  */
  function esCapicua($numero) {
    $numeroReverso = strrev((string)$numero);
    return (string)$numero === $numeroReverso;
}

// Ejemplo de uso
$numero = 12321; // Cambia este número para probar
if (esCapicua($numero)) {
    echo "El número $numero es capicúa.";
} else {
    echo "El número $numero no es capicúa.";
}

  /* ------------------------------------------------------------- */

  /*
  esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo
  y falso en caso contrario.
  */
  function esPrimo($num) {
    for ($i = 2; $i < $num; $i++) {
      if ($num % $i == 0) {
        return false;
      }
    }
    return true;
  }

  /* ------------------------------------------------------------- */

  /*
  siguientePrimo: Devuelve el menor primo que es mayor al número que se pasa
  como parámetro
  */
  function siguientePrimo($num) {
    $siguiente_primo = $num + 1;
    while (!esPrimo($siguiente_primo)) { // se utiliza la función para comprobar si es primo para no repetir código
      $siguiente_primo++;
    }
    return $siguiente_primo;
  }

  /* ------------------------------------------------------------- */

  /*
    potencia: Dada una base y un exponente devuelve la potencia.
  */
  function potencia($base, $exponente) {
    $result = 1;
    for ($i = 0; $i < $exponente; $i++) {
      $result *= $base;
    }
    return $result;
  }

  /* ------------------------------------------------------------- */

  /*
    digitos: Cuenta el número de dígitos de un número entero.
  */
  function digitos($num) {
    $digitos = 0;
    while ($num > 0) {
      $digitos++;
      $num = (int) ($num / 10);
    }
    return $digitos;
  }

  /* ------------------------------------------------------------- */

  /*
   voltea: Le da la vuelta a un número.
  */
  function voltea($num) {
    $volteado = 0;
    while ($num > 0) {
      $volteado = $volteado * 10 + $num % 10;
      $num = (int) ($num / 10);
    }
    return $volteado;
  }

  /* ------------------------------------------------------------- */

  /*
  digitoN: Devuelve el dígito que está en la posición n de un número entero. Se
  empieza contando por el 0 y de izquierda a derecha
  */
  function digitoN($num, $n) {
    $num_str = (string)$num;
    if ($n >= 0 && $n < strlen($num_str)) { // se comprueba que el n sea válido
      $digito = $num_str[$n];
      return (int)$digito;
    } else {
      return -1; // esto indica que la posición está fuera de los límites
    }
  }

  /* ------------------------------------------------------------- */

  /*
  posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de
  un número entero. Si no se encuentra, devuelve -1.
  */
  function posicionDeDigito($num, $digito) {
    $num_str = (string)$num;
    $posicion = -1;
    for ($i = 0; $i < strlen($num_str); $i++) {
      if ($num_str[$i] == $digito) {
        $posicion = $i;
        break;
      }
    }
    return $posicion;
  }

  /* ------------------------------------------------------------- */

  /*
    quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha)
  */
  function quitarPorDetras($num, $n) {
    $num_str = (string)$num;
    $num_str = substr($num_str, 0, -$n);
    return (int)$num_str;
  }

  /* ------------------------------------------------------------- */

  /*
    quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).
  */
  function quitarPorDelante($num, $n) {
    $num_str = (string)$num;
    $num_str = substr($num_str, $n);
    return (int)$num_str;
  }

  /* ------------------------------------------------------------- */

  /*
    pegaPorDetras: Añade un dígito a un número por detrás.
  */
  function pegarPorDetras($num, $n) {
    return (int)($num . $n); // se tratan como strings en su paréntesis y se convierten a int depués
  }

  /* ------------------------------------------------------------- */

  /*
    pegaPorDelante: Añade un dígito a un número por delante
  */
  function pegarPorDelante($num, $n) {
    return (int)($n . $num);
  }

  /* ------------------------------------------------------------- */

  /*
     trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de
un número y devuelve el trozo correspondiente.

  */
  function trozoDeNumero($num, $posicionInicial, $posicionFinal) {
    $num_str = (string)$num;
    $trozo = substr($num_str, $posicionInicial, $posicionFinal);
    return (int)$trozo;
  }

  /* ------------------------------------------------------------- */

  /*
   juntaNumeros: Pega dos números para formar uno.
  */
  function juntaNumeros($num1, $num2) {
    return (int)($num1 . $num2);
  }
?>
  
  </body>
</html>