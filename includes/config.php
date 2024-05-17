<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "industria";
*/
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "proyecto-final-db.mysql.database.azure.com", "u20051268", "{userL20051268-}", "{industria}", 3306, MYSQLI_CLIENT_SSL);
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
