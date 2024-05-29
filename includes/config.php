<?php
$servername = "empresa-form.privatelink.azurewebsites.net.";
$username = "u20051268";
$password = "userL20051268";
$dbname = "industria";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
