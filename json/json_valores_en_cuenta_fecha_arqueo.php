<?php


include "../complementos/conexion.php";

$fecha=$_POST["fecha"];




$consulta = "select en.id,en.nombre,en.acronimo,
sum(if(tt.afecta_cuenta='SUMA',if(ht.tipo_comision!='COMISION',(ht.valor+ht.comision_valor_porcentaje),ht.valor),if(tt.afecta_cuenta='RESTA',if(ht.tipo_comision!='COMISION',(-ht.valor+ht.comision_valor_porcentaje),-ht.valor),0)))  as valor,
sum(ht.comision+ht.comision_valor_porcentaje) as comision
from entidad en 
inner join historial_transacciones ht on en.id=ht.id_entidad
inner join tipo_transaccion tt on tt.id =ht.tipo_transaccion where en.tipo='CUE' and date(ht.fecha_creada) <= date('{$fecha}')
GROUP by en.id";
//inner join tipo_transaccion tt on tt.id =ht.tipo_transaccion where en.tipo='CUE' and date(ht.fecha_creada) BETWEEN  date('{$desde}') and date('{$hasta}')
$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);


$respuesta = [];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'acronimo' => $row['acronimo'],
        'valor' => $row['valor'],
        'comision' => $row['comision'],
        //'tipo' => $row['tipo'],
        //'fecha_creada' => $row['fecha_creada'],
    );
    array_push($respuesta, $array);


}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);