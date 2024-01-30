<?php
session_start();
//require_once("db.php");
require_once("model/TaskModel.php");

$db = new PDO('mysql:host=db;dbname=tareas', 'root', 'test');
$taskModel = new TaskModel($db);

$action = $_GET['action']; 
$id = $_GET['id']; 
$usuario_id = $_SESSION['usuario_id']; 

if ($action == 'editar') {
    // Obtén la tarea para prellenar el formulario de edición
    $tarea = $taskModel->editTask($id);

    // Muestra el formulario de edición
    echo "<form action='acciones.php?action=actualizar&id={$id}' method='post'>";
    echo "<input type='text' name='titulo' value='{$tarea['titulo']}'><br>";
    echo "<textarea name='descripcion'>{$tarea['descripcion']}</textarea><br>";
    echo "<input type='submit' name='update_task' value='Actualizar'>";
    echo "</form>";

} elseif ($action == 'eliminar') {
    // Lógica para eliminar una tarea
    $taskModel->deleteTask($id);
    $_SESSION['mensaje'] = 'Tarea eliminada correctamente';
    header("Location: index.php");
    exit();
} elseif ($action == 'actualizar') {
    // Lógica para actualizar una tarea
    if (isset($_POST['update_task'])) {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        // Verifica si los campos están en blanco
        if (empty($titulo) || empty($descripcion)) {
            $_SESSION['mensaje'] = 'Por favor, completa todos los campos';
            header("Location: index.php");
            exit();
        }

        // Actualiza la tarea en la base de datos
        $taskModel->updateTask($id, $titulo, $descripcion);

        $_SESSION['mensaje'] = 'Tarea actualizada correctamente';
        header("Location: index.php");
        exit();
    }
}

