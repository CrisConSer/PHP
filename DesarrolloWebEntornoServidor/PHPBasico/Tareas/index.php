<?php
session_start();

// Cargar modelos, vistas y controladores
include("db.php");
include("model/TaskModel.php");
include("view/TaskView.php");
include("controller/TaskController.php");


// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

// Obtener el usuario_id de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Crear instancias de modelos, vistas y controladores
$taskModel = new TaskModel($conexion);
$taskView = new TaskView();
$taskController = new TaskController($taskModel, $taskView);

// Obtener el valor de $id 
$id = $taskController->obtener_valor_id();  // Usa el método del controlador

// Lógica de la aplicación
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si se ha enviado un formulario, procesar la tarea
    $taskController->saveTask($_POST['titulo'], $_POST['descripcion'], $usuario_id);
}

// Obtener todas las tareas del usuario actual
$tareas = $taskController->getTasks($usuario_id);

// Mostrar la vista con las tareas
$taskView->showTasksForm($tareas);  // Mostrar formulario para ingresar tareas

// Enlaces para cerrar sesión
echo '<a href="login.php">Cerrar Sesión</a>';

// Verificar si hay tareas antes de iterar sobre ellas
if (!empty($tareas)) {
    foreach ($tareas as $task) {
        echo "<div>";
        echo "<p>Título: " . $task['titulo'] . "</p>";
        echo "<p>Descripción: " . $task['descripcion'] . "</p>";
        echo "<p>ID: " . $task['id'] . "</p>";
        // Agregar botones de editar y eliminar con enlaces a acciones.php
        echo "<a href='acciones.php?action=editar&id={$task['id']}'>Editar</a>";
        echo "<a href='acciones.php?action=eliminar&id={$task['id']}'>Eliminar</a>";
        echo "</div>";
    }
} else {
    echo "<p>No hay tareas registradas.</p>";
}
