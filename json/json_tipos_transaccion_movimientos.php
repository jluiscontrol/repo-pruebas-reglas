<?php

include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";

$consulta = "select * from tipo_transaccion where afecta_caja='NO' or afecta_cuenta='NO'";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);



$respuesta=[];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'afecta_caja'=>$row['afecta_caja'],
        'afecta_cuenta'=>$row['afecta_cuenta'],
    );
    array_push($respuesta, $array);



}


//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);