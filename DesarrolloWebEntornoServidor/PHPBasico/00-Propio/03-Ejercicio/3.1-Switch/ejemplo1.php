<?php

// Imprimir en php

echo "Hola Mundo";


// Variables y tipos de datos

  // String
  $nombre = "Juan";

  // Entero
  $numero = 10; 

  // Decimal
  $decimal = 10.5;

  // Boolean
  $verdadero = true;

  ?>

  <!DOCTYPE html>
  <html lang="es">
    <head>
      <title>EJERCICIO 3</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

  <!-- //Creación de formularios y manejo de datos
  //Formulario básico y método -->

      <h1>FORMULARIO</h1>
      <form action ="ejemplo1.php" method = "post"> 
      Nombre: <input type="text" name="nombre"><br>
      Edad: <input type="text" name="edad"><br>
      <input type="submit" value="Enviar">
      <br>


      <?php
      
      //comprobamos con isset si el input nombre/edad tiene valores metidos

      if(isset($_POST['nombre']) && ($_POST['edad'])){
        $nombre = $_POST['nombre'];
        $numero = $_POST['edad'];
        echo "Hola, " . $nombre . " tu edad es de " . "<strong><h4 style='color:blue; font-size: 55px;'>" . $numero . "</h4></strong>" . " años";
      }
  
  // Condiciones (if-else)

      if($numero>=18){
        echo "<br>" . "Eres mayor de edad";
      
      }else{
        echo "<br>" . "Eres menor de edad";
      }

// Formato tabla CSS
echo '<style>';
echo 'table {border-collapse: collapse; width: 50%; margin: 0 auto}';
echo 'th{border: 1px solid black; padding: 8px; text-align: center; font-family:Arial, Sans-serif}';
echo 'tr:nth-child(even) {background-color: #f2f2f2; font-family:Arial, Sans-serif}'; // Cambiar el color de fondo de filas pares
echo 'td {border: 1px solid black;font-family:Arial, Sans-serif}'; // Definir el borde de las celdas
echo 'th {background-color: #178AE5; color: white;}'; // Cambiar el color de fondo de las cabeceras
echo '</style>';  

  // Bucles (for, while)
    //Bucle for
      
    echo "<table border= '2'>";
    echo "<td>Bucle FOR</td>";
    echo "<br>";

      for($i=0; $i<=$numero; $i++){
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "</tr>";
      }
    
    // Bucle while
    $contador = 0;

    echo "<td>Bucle WHILE</td>";
    while($contador <= $numero){
      echo "<tr>";
      echo "<td>". $contador ."</td>";
      $contador++;
      echo "</tr>";
    }
    echo "</table>";

// Arrays
    //Array simple
    $colores = array("rojo", "amarillo", "azul", "verde", "naranja", "negro");
      
    //Iteramos con foreach
    foreach($colores as $color){
      echo $color . "-";
    };

    //Array asociativo
    $padel = array (
      array("Nombre" => "Nombre", "Posición" => "Posición", "Nivel" => "Nivel"),
      array("Nombre" => "Cris", "Posición" => "Revés", "Nivel" => "4 alta"),
      array("Nombre" => "Estefi", "Posición" => "Derecha", "Nivel" => "4"),
      array("Nombre" => "Canija", "Posición" => "Derecha", "Nivel" => "4"),
      array("Nombre" => "Tamara", "Posición" => "Revés", "Nivel" => "4")
    );
    echo "<br>";

    //Iteración con foreach
  echo "<table border = '2'>";
    foreach($padel as $padels){
      echo "<tr>";
      // Contenido del segundo bucle foreach aquí
      foreach ($padels as $valor) {
          echo "<td>". $valor ."</td>";
      }  
    echo "</tr>";
  }
  echo "</table>";


  //Funciones
    // Definir una funcion que devuelve la suma de dos números
  function sumar ($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
  };

    // Llamar a la función y guardar el valor devuelto en una variable
    $total = sumar (5,5);
    // Imprimir el valor devuelto de la función
    echo "La suma es ". $total;
    echo "<br>";

    //Definir una función para calcular el factorial de un número
  function calcularFactorial($numero){
    if ($numero < 0){
      return "Error: No se puede calcular el factorial de un número negativo";
    }elseif ($numero == 0){
      return 1;
    }else {
      $factorial = 1;
      for ($i = 1; $i<=$numero; $i++){
        $factorial *=$i;
      }
      return $factorial;
    }
  }
  echo "<br>";
    // Llamar a la función y guardar el valor devuelto en una variable
    $factorial = calcularFactorial(8);

    // Imprimir el resultado
    echo "El factorial es " . $factorial;
    
    ?>
    </body>
  </html>



