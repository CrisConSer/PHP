<? session_start();?>

<?
/**
 * En esta página se encuentra el código que crea el usuario. Por ahora no se hace la conexión a BD,
 * simplemente si el usuario introducido en el formulario es test/test se redirige a la página de login.
 * En otro caso se indicará que el usuario es incorrecto.
 *  
 * Al recuperar la password automáticamente se le aplicará un cifrado sha512.
 * 
 * Autor: Nombre Apellidos
 * 
 */

 /*if(isset($_POST['usuario']) && ($_POST['password']) && ($_POST['password2'])){
  $usuario = $_POST["usuario"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
    if($password == $password2){
      header("Location: login.php");
  };
 };*/



?>