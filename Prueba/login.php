<?php
session_start(); // Inicia la sesión para almacenar datos del usuario

if (isset($_SESSION['username'])) {
    // Si el usuario ya está logueado, redirige al inicio
    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <form action="login_check.php" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required><br>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br>
            
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
