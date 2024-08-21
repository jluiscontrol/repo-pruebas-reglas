<?php

include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";


$id_entidad=$_POST["id_entidad"];

$consulta = "select tp.nombre,sum(ht.comision) as comision,sum(ht.comision_valor_porcentaje) as comision_valor_porcentaje,sum(ht.valor) as valor, COUNT(*) as cantidad from historial_transacciones ht inner join tipo_transaccion tp ON
ht.tipo_transaccion=tp.id where ht.id_entidad={$id_entidad} group by ht.tipo_transaccion";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);



$respuesta=[];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        $row['nombre']."\n C.CAJA($".$row['comision']." )"."\n C.DIRECTA($".$row['comision_valor_porcentaje']." )"."\n VALOR($".$row['valor']." )",
        intval( $row['cantidad']),
    );
    array_push($respuesta, $array);



}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);
