<?php
ob_start();
class TaskModel {
    private $conexion;
    private $id;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function getTasks($usuario_id) {
        // Obtener todas las tareas de un usuario
        $query = "SELECT tarea.* FROM tarea
                  JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea
                  WHERE usuarios_tarea.usuario = ?";
        $statement = $this->conexion->prepare($query);
        $statement->execute([$usuario_id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveTask($titulo, $descripcion) {
        if (isset($_POST['save_task'])) {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
        
            // Verifica si los campos están en blanco
            if (empty($titulo) || empty($descripcion)) {
                $_SESSION['mensaje'] = 'Por favor, completa todos los campos';
                header("Location: index.php");
                exit();
            }
        
            try {
                // Continúa con la lógica de guardar la tarea en la base de datos
                $query_insertar_tarea = "INSERT INTO tarea (titulo, descripcion) VALUES (:titulo, :descripcion)";
                $statement_insertar_tarea = $this->conexion->prepare($query_insertar_tarea);
                $statement_insertar_tarea->bindParam(':titulo', $titulo);
                $statement_insertar_tarea->bindParam(':descripcion', $descripcion);
                $statement_insertar_tarea->execute();
        
                // Obtén el ID de la tarea recién insertada
                $tarea_id = $this->conexion->lastInsertId();
        
                // Obtén el ID de usuario de la sesión
                $usuario_id = $_SESSION['usuario_id'];
        
                // Asocia la tarea con el usuario en la tabla usuarios_tarea
                $query_asociar_tarea = "INSERT INTO usuarios_tarea (usuario, tarea) VALUES (?, ?)";
                $statement_asociar_tarea = $this->conexion->prepare($query_asociar_tarea);
                $statement_asociar_tarea->execute([$usuario_id, $tarea_id]);
        
                $_SESSION['mensaje'] = 'Tarea guardada correctamente';
                header("Location: index.php");
                exit();
            } catch (PDOException $e) {
                die("Error en la consulta: " . $e->getMessage());
            }
        }
    }

    public function editTask($id) {
        $query = "SELECT * FROM tarea WHERE id = ?";
        $statement = $this->conexion->prepare($query);
        $statement->execute([$id]);
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    public function deleteTask($id) {
        try {
            // Elimina registros relacionados en la tabla usuarios_tarea
            $query_delete_usuarios_tarea = "DELETE FROM usuarios_tarea WHERE tarea = ?";
            $statement_delete_usuarios_tarea = $this->conexion->prepare($query_delete_usuarios_tarea);
            $statement_delete_usuarios_tarea->execute([$id]);
    
            // Elimina la tarea en la tabla tarea
            $query_delete_tarea = "DELETE FROM tarea WHERE id = ?";
            $statement_delete_tarea = $this->conexion->prepare($query_delete_tarea);
            $statement_delete_tarea->execute([$id]);
        } catch (PDOException $e) {
            die("Error al eliminar la tarea: " . $e->getMessage());
        }
    }
    

    public function updateTask($id, $titulo, $descripcion) {
        try {
            $query = "UPDATE tarea SET titulo = ?, descripcion = ? WHERE id = ?";
            $statement = $this->conexion->prepare($query);
            $statement->execute([$titulo, $descripcion, $id]);
        } catch (PDOException $e) {
            die("Error al actualizar la tarea: " . $e->getMessage());
        }
    }
}