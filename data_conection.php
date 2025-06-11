<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "presupuestox";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
