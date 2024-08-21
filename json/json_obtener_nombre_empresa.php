<?php
include '../complementos/tmp.php';
session_start();




$id_crea = $_SESSION["id"];


include "../complementos/conexion.php";


$sql_obtener = "SELECT * FROM nombre_empresa";


$resultado = mysqli_query($conn, $sql_obtener) or die ("Algo ha ido mal en la consulta $sql_obtener");

mysqli_close($conn);
while ($row = mysqli_fetch_array($resultado)) {

    $mensaje = $row['nombre'];


}

echo $mensaje;