<?php
include '../complementos/tmp.php';
session_start();

$nombre = $_POST["nombre"];


$id_crea = $_SESSION["id"];


include "../complementos/conexion.php";

$sql_eliminar = "delete FROM nombre_empresa";
mysqli_query($conn, $sql_eliminar) or die ("Algo ha ido mal en la consulta $sql_eliminar");


$sql_insertar = "INSERT INTO `nombre_empresa` (`nombre`) VALUES (upper('$nombre'));";


mysqli_query($conn, $sql_insertar) or die ("Algo ha ido mal en la consulta $sql_insertar");

$mensaje = "Nombre guardado correctamente";

mysqli_close($conn);


echo $mensaje;