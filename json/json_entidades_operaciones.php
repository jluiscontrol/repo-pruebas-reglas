<?php

include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";

$consulta = "select * from entidad where tipo='CUE'";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);



$respuesta=[];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'acronimo'=>$row['acronimo'],
        'comision'=>$row['comision'],
        'tipo'=>$row['tipo'],
        'sobre_giro'=>$row['sobre_giro'],
        );
    array_push($respuesta, $array);



}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);