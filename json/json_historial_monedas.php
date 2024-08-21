<?php

include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";


$desde = $_POST["desde"];

$consulta = "select * from historial_total_monedas where date(fecha_creada)=date('{$desde}')";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);


$respuesta = [];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        'id' => $row['id'],
        'billete_uno' => $row['billete_uno'],
        'billete_cinco' => $row['billete_cinco'],
        'billete_dies' => $row['billete_dies'],
        'billete_veinte' => $row['billete_veinte'],
        'billete_cincuenta' => $row['billete_cincuenta'],
        'billete_cien' => $row['billete_cien'],
        'moneda_uno' => $row['moneda_uno'],
        'moneda_cinco' => $row['moneda_cinco'],
        'moneda_dies' => $row['moneda_dies'],
        'moneda_veinticinco' => $row['moneda_veinticinco'],
        'moneda_cincuenta' => $row['moneda_cincuenta'],
        'moneda_undolar' => $row['moneda_undolar'],

    );


    array_push($respuesta, $array);


}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);