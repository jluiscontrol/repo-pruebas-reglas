<?php
include '../complementos/tmp.php';
session_start();
include "../complementos/conexion.php";


$desde=$_POST["desde"];
$hasta=$_POST["hasta"];


$id= $_POST["id"];
$id_crea=$_SESSION["id"];
date_default_timezone_set('America/Guayaquil');

$fecha_actual = $hasta;

$ayer = date("Y-m-d", strtotime("yesterday"));

$consulta_fecha_ayer = "select sum(
    if(tt.afecta_cuenta='SUMA',
       if(ht.tipo_comision!='COMISION',(ht.valor+ht.comision_valor_porcentaje),ht.valor),
       
       
       if(tt.afecta_cuenta='RESTA',
          -(ht.valor),0))
      
) as valor_en_cuenta,sum(ht.comision) as comision, sum(ht.comision_valor_porcentaje) as comision_valor_porcentaje  from entidad en 
inner join historial_transacciones ht on en.id=ht.id_entidad
inner join tipo_transaccion tt on tt.id =ht.tipo_transaccion where date (ht.fecha_creada)<date('{$desde}') and ht.id_entidad={$id}";
//inner join tipo_transaccion tt on tt.id =ht.tipo_transaccion where date (ht.fecha_creada)=date('{$ayer}') and ht.id_entidad={$id}";


$consulta_fecha_actual = "sELECT ht.id,ht.referencia,(select nombre from tipo_transaccion where id=ht.tipo_transaccion)as tipo_comision,(select concat(nombres,' ',apellido_paterno,' ',apellido_materno) as nombre from usuario where id=$id_crea) as usuario,(select nombre from entidad en where en.id=ht.id_entidad)as nombre,
IF((select afecta_cuenta from tipo_transaccion where id=ht.tipo_transaccion)='SUMA',ht.valor,
   if((select afecta_cuenta from tipo_transaccion where id=ht.tipo_transaccion)='RESTA',-ht.valor,0)) as valor,ht.comision,ht.comision_valor_porcentaje,ht.comentario,ht.fecha_creada FROM historial_transacciones ht where tipo_transaccion in (SELECT id FROM tipo_transaccion where afecta_cuenta='SUMA' OR afecta_cuenta ='RESTA') and date(ht.fecha_creada) between date('{$desde}') and date('{$hasta}') and ht.id_entidad={$id} order by date(ht.fecha_creada),ht.id asc";


$resultado_actual = mysqli_query($conn, $consulta_fecha_actual) or die ("Algo ha ido mal en la consulta a la base de datos");
$resultado_ayer = mysqli_query($conn, $consulta_fecha_ayer) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);


$respuesta = [];
$valor_ayer = 0.00;
$valor_ayer_comision = 0.00;
$valor_ayer_comision_valor_porcentaje = 0.00;
while ($row = mysqli_fetch_array($resultado_ayer)) {
    if ($row['valor_en_cuenta'] != null) {
        $valor_ayer = $row['valor_en_cuenta'];
        $valor_ayer_comision = $row['comision'];
        $valor_ayer_comision_valor_porcentaje = $row['comision_valor_porcentaje'];
    }

    $array = array(
        'nombre' => "SALDO ANTERIOR",
        'valor' => "",
        'saldo' => $valor_ayer,
        'comision' => $valor_ayer_comision,
        'comision_valor_porcentaje' => $valor_ayer_comision_valor_porcentaje,
        'tipo_comision' => "-",
        'comentario' => "",
        'referencia' => "",
        'id_crea' => "",
        'fecha_creada' => ""
    );
    array_push($respuesta, $array);

}
while ($row = mysqli_fetch_array($resultado_actual)) {
    $tipo_comision= $row['tipo_comision'];
    if($tipo_comision!=="COMISION"){
        $valor_ayer += floatval($row['valor'])+floatval($row['comision_valor_porcentaje']);
    }else{
        $valor_ayer += $row['valor'];
    }
    $array = array(
        'nombre' => $row['nombre'],
        'valor' => $row['valor'],
        'saldo' => $valor_ayer,
        'comision' => $row['comision'],
        'referencia' => $row['referencia'],
        'comision_valor_porcentaje' => $row['comision_valor_porcentaje'],
        'tipo_comision' => $row['tipo_comision'],
        'comentario' => $row['comentario'],
        'id_crea' => $row['usuario'],
        'fecha_creada' => $row['fecha_creada'],
    );
    array_push($respuesta, $array);


}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);