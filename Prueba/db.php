<?php
$host = 'localhost'; // Cambia esto si usas un servidor diferente
$user = 'root'; // Tu usuario de la base de datos
$password = ''; // Tu contraseña de la base de datos (deja vacío si usas XAMPP por defecto)
$dbname = 'login_db'; // El nombre de tu base de datos

// Conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
