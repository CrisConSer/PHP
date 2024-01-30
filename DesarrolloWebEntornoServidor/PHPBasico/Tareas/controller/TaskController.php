<?php
class TaskController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function redirect($url) {
        header("Location: $url");
        exit();
    }

    public function getTasks($usuario_id) {
        return $this->model->getTasks($usuario_id);
    }

    public function showTask($id) {
        // Obtener la tarea del modelo según el ID
        $task = $this->model->getTask($id);

        // Mostrar la tarea utilizando la vista
        $this->view->showTask($task['titulo'], $task['descripcion']);
    }

    public function showTaskForm($id) {
        // Obtener la tarea del modelo según el ID
        $task = $this->model->getTask($id);

        // Mostrar el formulario de tarea utilizando la vista
        $this->view->showTaskForm($id, $task['titulo'], $task['descripcion']);
    }

    public function saveTask($titulo, $descripcion, $usuario_id) {
        // Guardar una tarea asociada a un usuario
        $this->model->saveTask($titulo, $descripcion, $usuario_id);
        $this->redirect('index.php');
    }

    public function updateTask($id, $titulo, $descripcion) {
        // Aactualizar una tarea
        $this->model->updateTask($id, $titulo, $descripcion);
        $this->redirect('index.php');
    }

    public function deleteTask($id) {
        // Borrar una tarea
        $this->model->deleteTask($id);
        $this->redirect('index.php');
    }

    public function obtener_valor_id() {
        return isset($_POST['id']) ? $_POST['id'] : null;
    }
}

