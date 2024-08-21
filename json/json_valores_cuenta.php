<?php


include "../complementos/conexion.php";


$consulta="select en.sobre_giro,en.id,en.nombre,en.acronimo,
sum(if(tt.afecta_cuenta='SUMA',if(ht.tipo_comision!='COMISION',(ht.valor+ht.comision_valor_porcentaje),ht.valor),if(tt.afecta_cuenta='RESTA',if(ht.tipo_comision!='COMISION',(-ht.valor+ht.comision_valor_porcentaje),-ht.valor),0)))  as valor,    
sum(ht.comision+ht.comision_valor_porcentaje) as comision
from entidad en 
inner join historial_transacciones ht on en.id=ht.id_entidad
inner join tipo_transaccion tt on tt.id =ht.tipo_transaccion where en.tipo='CUE'
GROUP by en.id";

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
        'sobre_giro' => $row['sobre_giro'],
    );
    array_push($respuesta, $array);


}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);

