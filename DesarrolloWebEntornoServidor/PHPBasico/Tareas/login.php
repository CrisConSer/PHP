<?php
session_start();

include("model/UserModel.php");
include("view/UserView.php");
include("controller/UserController.php");
include("db.php");


$userModel = new UserModel($conexion);
$userView = new UserView();
$userController = new UserController($userModel, $userView);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['usuario']) && isset($_POST['password'])) {
    $userController->processLogin();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!--<link href="style/style.css" rel="stylesheet">-->
</head>
<body>
    <?php
    $userView->showLoginForm();
    ?>
</body>
</html>
