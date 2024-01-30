<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host = "db";
$dbUsername = "root";
$dbPassword = "test";
$dbName = "tareas";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Error de conexión: " . $e->getMessage());
}



