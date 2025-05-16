<?php
$servername = "localhost";
$username = "root"; // Cambia si es necesario
$password = ""; // Cambia si tienes contraseña
$database = "apostol";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
