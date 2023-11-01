<?php
if(isset($_POST['usuario']) && isset($_POST['password'])) {
    // Realiza la validación de los datos ingresados y el almacenamiento de datos
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Aquí deberías manejar el almacenamiento de usuario y contraseña de forma segura, como en una base de datos segura.

    // Por ejemplo, almacenar en un archivo de texto, lo cual no es seguro para un entorno de producción. 
    $file = 'usuarios.txt';
    $fp = fopen($file, 'a');
    if($fp) {
        fwrite($fp, "Usuario: " . $usuario . " - Contraseña: " . $password . "\n");
        fclose($fp);
        echo "Registro exitoso. <a href='login.php'>Inicia sesión</a>";
        header("Location:formulario.html");
    } else {
        echo "Error al abrir el archivo de registro.";
    }
} else {
    echo "No estás registrado de forma correcta. " . "<br>" . "El usuario ingresado no tiene permisos para entrar en este contenido.";
    }
?>
<br><br>
<a href="formulario.html">Volver iniciar sesión</a>