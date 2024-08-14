<?php
$servername = "mysql_db";
$username = "user";
$password = "password";
$dbname = "clasificacion_niza";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
