<?php
$servername = "localhost"; //variable del server: localhost o ip
$username = "root"; //variable de usuario
$password = ""; //variable de contraseña
$dbname = "TechZone"; //nombre de la database

// Establecer la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
