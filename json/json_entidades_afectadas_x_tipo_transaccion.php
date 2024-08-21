<?php

include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";

$tipo_transaccion = $_POST["tipo_transaccion"];

$consulta = "select *,(SELECT nombre FROM entidad WHERE ID=ea.id_entidad) as nombre from entidades_afectadas_x_tipo_transaccion ea where id_tipo_transaccion={$tipo_transaccion}";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);



$respuesta=[];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        'id' => $row['id'],
        'id_entidad' => $row['id_entidad'],
        'id_tipo_transaccion'=>$row['id_tipo_transaccion'],
        'tipo_comision'=>$row['tipo_comision'],
        'valor_porcentaje'=>$row['valor_porcentaje'],
        'nombre'=>$row['nombre'],
    );
    array_push($respuesta, $array);



}


//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);