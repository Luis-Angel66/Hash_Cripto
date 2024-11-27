<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Si no hay sesión, redirigir al login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard-container">
        <img src="logo.png" alt="Logo" />
    </div>
</body>
</html>
