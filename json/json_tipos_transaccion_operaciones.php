<?php

include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";

//$consulta = "select * from tipo_transaccion where afecta_caja<>'NO' AND afecta_cuenta<>'NO'";

$consulta="select *,(select GROUP_CONCAT(ea.id_entidad) from entidades_afectadas_x_tipo_transaccion ea where id_tipo_transaccion=tp.id order by id) as id_entidad
,(select GROUP_CONCAT(ea.tipo_comision) from entidades_afectadas_x_tipo_transaccion ea where id_tipo_transaccion=tp.id order by id) as tipo_comision,
(select GROUP_CONCAT(ea.valor_porcentaje) from entidades_afectadas_x_tipo_transaccion ea where id_tipo_transaccion=tp.id order by id) as valor_porcentaje
from tipo_transaccion tp where afecta_caja<>'NO' AND afecta_cuenta<>'NO'";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);



$respuesta=[];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'afecta_caja'=>$row['afecta_caja'],
        'afecta_cuenta'=>$row['afecta_cuenta'],
        'id_entidad'=>$row['id_entidad'],
        'tipo_comision'=>$row['tipo_comision'],
        'valor_porcentaje'=>$row['valor_porcentaje'],
    );
    array_push($respuesta, $array);



}


//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);