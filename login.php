<?php
session_start();
require 'conectar/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT id_usuario, Nombre, contraseña FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_usuario, $Nombre, $hash);
        $stmt->fetch();
        
        // Verificación de la contraseña usando password_verify
        if (password_verify($contraseña, $hash)) {
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['Nombre'] = $Nombre;
            header("Location: menu_usuarios.php");
            exit();
        } else {
            echo "<p style='color: red;'>Contraseña incorrecta</p>";
        }
    } else {
        echo "<p style='color: red;'>No existe una cuenta con ese correo</p>";
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
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="password" name="contraseña" placeholder="Contraseña" required>
        <button type="submit">Iniciar Sesión</button>
    </form>


    <a href="index.html"><button>regresar menuuu</button></a>
</body>
</html>