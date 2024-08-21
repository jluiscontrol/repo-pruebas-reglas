<?php
include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";

$id_crea = $_SESSION["id"];
date_default_timezone_set('America/Guayaquil');

$fecha_actual = date('Y-m-d');

//$ayer = date("Y-m-d", strtotime("yesterday"));

$consulta_fecha_ayer = "select sum(if(tt.afecta_caja='SUMA',ht.valor,if(tt.afecta_caja='RESTA',-(ht.valor),0))) as valor_en_caja,sum(ht.comision) as comision from entidad en 
inner join historial_transacciones ht on en.id=ht.id_entidad
inner join tipo_transaccion tt on tt.id =ht.tipo_transaccion where date (ht.fecha_creada)<date('{$fecha_actual}')";



$consulta_fecha_actual = "sELECT ht.referencia,(select nombre from tipo_transaccion where id=ht.tipo_transaccion)as tipo_comision,(select concat(nombres,' ',apellido_paterno,' ',apellido_materno) as nombre from usuario where id=$id_crea) as usuario,(select nombre from entidad en where en.id=ht.id_entidad)as nombre,
if((select afecta_caja from tipo_transaccion where id=ht.tipo_transaccion)='SUMA',ht.valor,-(ht.valor)) as valor,ht.comision,ht.comentario,ht.fecha_creada FROM historial_transacciones ht where tipo_transaccion in (SELECT id FROM tipo_transaccion where afecta_caja='SUMA' OR afecta_caja ='RESTA') and date(ht.fecha_creada)=date('{$fecha_actual}') order by date(ht.fecha_creada),ht.id asc";


$resultado_actual = mysqli_query($conn, $consulta_fecha_actual) or die ("Algo ha ido mal en la consulta a la base de datos");
$resultado_ayer = mysqli_query($conn, $consulta_fecha_ayer) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);


$respuesta = [];
$valor_ayer = 0.00;
$valor_ayer_comision = 0.00;
while ($row = mysqli_fetch_array($resultado_ayer)) {
    if ($row['valor_en_caja'] != null) {
        $valor_ayer = floatval($row['valor_en_caja']) + floatval($row['comision']);
        $valor_ayer_comision = floatval($row['comision']);
    }

    $array = array(
        'nombre' => "SALDO ANTERIOR",
        'valor' => floatval($row['valor_en_caja']),
        'saldo' => floatval($valor_ayer),
        'comision' => $valor_ayer_comision,
        'tipo_comision' => "-",
        'comentario' => "",
        'id_crea' => "",
        'fecha_creada' => "",
        'referencia' => ""
    );
    array_push($respuesta, $array);

}
while ($row = mysqli_fetch_array($resultado_actual)) {
    $valor_ayer += floatval($row['valor']) + floatval($row['comision']);
    $array = array(
        'nombre' => $row['nombre'],
        'valor' => $row['valor'],
        'saldo' => $valor_ayer,
        'comision' => $row['comision'],
        'comentario' => $row['comentario'],
        'tipo_comision' => $row['tipo_comision'],
        'id_crea' => $row['usuario'],
        'referencia' => $row['referencia'],
        'fecha_creada' => $row['fecha_creada'],
    );
    array_push($respuesta, $array);


}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);