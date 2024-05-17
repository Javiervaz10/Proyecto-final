/*
    hostname=proyecto-final-db.mysql.database.azure.com
    username=MySql    
    password={your-password}
    ssl-mode=require
*/

<?php
$host = 'proyecto-final-db.mysql.database.azure.com';
$username = 'MySql';
$password = 'userL20051268-';
$ssl-mode= 'require';
$db_name = 'industria';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
//Close the connection
mysqli_close($conn);
?>
