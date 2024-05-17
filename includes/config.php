<?php
$host = 'proyecto-final-db.mysql.database.azure.com';
$username = 'MySql';
$password = 'userL20051268-';
$db_name = 'industria';
$ssl_cert_path = 'C:\Users\fvale\Downloads\Microsoft RSA Root Certificate Authority 2017.crt'; // Ajusta esta ruta al certificado CA

// Establecer la conexión
$con = mysqli_init();
mysqli_ssl_set($con, NULL, NULL, $ssl_cert_path, NULL, NULL);
mysqli_real_connect($con, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

// Verificar la conexión
if (mysqli_connect_errno($con)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

echo "Connected successfully";

// Aquí puedes realizar tus consultas

// Cerrar la conexión
mysqli_close($con);
?>
