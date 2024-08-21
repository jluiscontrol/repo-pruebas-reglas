<?php

$servername = "localhost";

//DEV
/*$database = "empresa";
$username = "root";
$password = "";*/

//PROD
$database = "cnbjimmy";
$username = "cnbjimmy";
$password = "cnbjimmy2022";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//mysql_set_charset('utf8', $conn );

mysqli_query($conn, 'SET NAMES "utf8" COLLATE "utf8_general_ci"');


// Check connection
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {

    $respuesta = 1;

}


