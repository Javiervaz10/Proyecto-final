<?php
$host = 'proyecto-final-db.mysql.database.azure.com';
$username = 'MySql';
$password = 'userL20051268-';
$ssl-mode= 'require';
$db_name = 'industria';

//Establishes the connection
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "proyecto-final-db.mysql.database.azure.com", "MySql", "{userL20051268-}", "{industria}", 3306, MYSQLI_CLIENT_SSL);


//Close the connection
mysqli_close($conn);
?>
