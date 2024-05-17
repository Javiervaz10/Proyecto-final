<?php
$host = 'proyecto-final-db.mysql.database.azure.com';
$username = 'MySql';
$password = 'userL20051268-';
$db_name = 'industria';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

// Run the create table query
if (mysqli_query($conn, '
CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido_paterno VARCHAR(50) NOT NULL,
    apellido_materno VARCHAR(50) NOT NULL,
    puesto VARCHAR(100) NOT NULL,
    dias_trabajo INT NOT NULL,
    horas_trabajo INT NOT NULL,
    hora_entrada TIME NOT NULL,
    hora_salida TIME NOT NULL,
    dias_vacaciones INT NOT NULL
);
')) {
printf("Table created\n");
}

//Close the connection
mysqli_close($conn);
?>
