<?php
session_start();
require 'conectar/conexion.php'; // Conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST['id_usuario'];
    $Nombre = $_POST['Nombre'];
    $correo = $_POST['correo'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (id_usuario, Nombre, correo, contraseña) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $id_usuario, $Nombre, $correo, $contraseña);
    
    if ($stmt->execute()) {
        $_SESSION['id_usuario'] = $id_usuario; // Inicia sesión automáticamente
        $_SESSION['Nombre'] = $Nombre;
        header("Location: menu_usuarios.php"); // Redirige al menú de usuarios
        exit();
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }
    
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Regístrate</h2>
    <form action="registro.php" method="POST">
        <input type="text" name="Nombre" placeholder="Nombre completo" required>
        <input type="text" name="id_usuario" placeholder="Número de control" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="password" name="contraseña" placeholder="Contraseña" required>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>