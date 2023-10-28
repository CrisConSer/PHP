<!DOCTYPE html>
<html lang="es">
  <head>
    <title>PHP MENSUALIDAD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilos.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
      <h2 id="centrado">MENSULIDAD</h2>
      <img src="imagenes/alan_turing.jpg" width="450" height="450" alt=""> 
    </header>

    <section>
      <!--Código PHP-->
      <?php
      //Con esto eliminamos cualquier tipo de error en las variables de php
      error_reporting(0);

      $socio = $_POST['nombre'];
      $categoria = $_POST['categoria'];
      $promedio = $_POST['mensualidad'];
      
      if($categoria="A") $selA = 'SELECTED';
      else $selA ='';

      if($categoria="B") $selB = 'SELECTED';
      else $selA ='';

      if($categoria="C") $selC = 'SELECTED';
      else $selA ='';

      if($categoria="D") $selD = 'SELECTED';
      else $selA ='';


      //Declaración para errores

      $sMensaje = "";
      $cMensaje = "";
      $pMensaje = "";

      if(isset($_POST['Enviar'])){
        if(empty($socio)) $sMensaje = "Debe registrar el nombre del soci@";
        if($categoria == "Seleccione") $cMensaje = "Debe registrar una categoria";
        if(empty ($promedio) || !is_numeric($promedio)) $pMensaje = "Debes ingresar un promedio";
        elseif ($promedio<1 || $promedio>20) $pMensaje = "El promedio debe ser entre 1 y 20";
      }
      
      
      
      ?>
      <form action="index.php" method="post">
        <table>
          <tr>
            <td>Nombre soci@:</td>
            <td><input type="text" name="nombre" id="" size="70" value="<?php echo $socio;?>"></td>
            <td id="error"><?php echo $aMensaje ?></td>
          </tr>
          <tr>
            <td>Categoría:</td>
              <td><select name="categoria" id=""SELECTED>
              <option value="Seleccione">Seleccione categoria</option>
              <option value="A" <?php echo $selA; ?>>A</option>
              <option value="B" <?php echo $selB; ?>>B</option>
              <option value="C" <?php echo $selC; ?>>C</option>
              <option value="D" <?php echo $selD; ?>>D</option>
              </select>
            </td>
            <td id="error"><?php echo $cMensaje ?></td>
          </tr>

          <tr>
            <td>Promedio:</td>
            <td><input type="text" name="mensualidad" id="" value="<?php echo $promedio;?>"></td>
            <td id="error"><?php echo $pMensaje ?></td>
          </tr>


          <tr>
            <td></td>
            <td><input type="submit" name="Enviar" value="Enviar"></td>
          </tr>

          <tr>
            <td>Mensualidad:</td>
            <td></td>
          </tr>

          <tr>
            <td>Descuento:</td>
            <td></td>
          </tr>
        </table>
    </section>

    <footer>
      <h6 id="centrado">Todos los derechos reservados - Ing. Cristina Conde Serrano</h6>
    </footer>
  </body>
</html>