<?php

include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";


$desde=$_POST["desde"];
$hasta=$_POST["hasta"];

$consulta = "select en.id,en.nombre,COUNT(*) as cantidad from historial_transacciones ht inner join entidad en
on ht.id_entidad = en.id where en.tipo='CUE' and date(ht.fecha_creada) BETWEEN date('{$desde}') and date('{$hasta}') GROUP by ht.id_entidad";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);



$respuesta=[];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        intval($row['id']).",".$row['nombre'],
        intval( $row['cantidad']),
    );
    array_push($respuesta, $array);



}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);
