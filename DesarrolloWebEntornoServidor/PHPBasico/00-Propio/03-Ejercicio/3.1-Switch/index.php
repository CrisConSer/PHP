<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Menu desplegable</title>
  </head>
  <body>

    <h3>Selecciona un curso:</h3>

    <form action="" method="post">
      <select name="curso">
        <option value="php" <?php if(isset($_POST['curso']) && $_POST['curso'] == 'php') echo 'selected'; ?>>PHP</option>
        <option value="java" <?php if(isset($_POST['curso']) && $_POST['curso'] == 'java') echo 'selected'; ?>>Java</option>
        <option value="python" <?php if(isset($_POST['curso']) && $_POST['curso'] == 'python') echo 'selected'; ?>>Python</option>
      </select>
      <br><br>
      <input type="submit" value="Mostrar horario">
    </form>

    <?php
    if (isset($_POST['curso'])) {
      $curso = $_POST['curso'];

      switch($curso){
        case 'php':
          echo 'lunes y martes';
          break;
        case 'java':
          echo 'miércoles';
          break;
        case 'python':
          echo 'jueves y viernes';
          break;
        default:
          echo 'Ese lenguaje no lo estás estudiando';
          break;
      }
    }
    ?>

  </body>
</html>
