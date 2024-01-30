<?php

include("view/UserView.php");
include("db.php");
include("model/UserModel.php");

$userModel = new UserModel($conexion);
$userView = new UserView(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $userModel->insertUser($_POST['usuario'], $_POST['password']);

    if ($result) {
        // Registro ok
        header("Location: login.php");
        exit;
    } else {
        // Mostrar mensaje de error
        echo "Error en el registro";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
    <?php
    $userView->showRegistrationForm();
    ?>
</body>
</html>
