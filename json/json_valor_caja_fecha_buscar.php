<?php


include "../complementos/conexion.php";


$desde=$_POST["desde"];
$hasta=$_POST["hasta"];


$consulta = "select sum(if(tt.afecta_caja='SUMA',ht.valor,if(tt.afecta_caja='RESTA',-(ht.valor),0))) as valor_en_caja,sum(ht.comision)  as comision from entidad en 
inner join historial_transacciones ht on en.id=ht.id_entidad
inner join tipo_transaccion tt on tt.id =ht.tipo_transaccion where date(ht.fecha_creada)<=date('{$hasta}')";




$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);

$valor_en_caja = 0;

while ($row = mysqli_fetch_array($resultado)) {
    $caja = floatval($row['valor_en_caja']);

    if ($caja < 0) {
        $caja = 0.00;
        $total = floatval($row['valor_en_caja']) + floatval($row['comision']);
        //$valor_en_caja="($0.00) + comisión( $".$total." )= $".$total;

    } else {
        $total = floatval($row['valor_en_caja']) + floatval($row['comision']);
        // $valor_en_caja="($".$caja.") + comisión( $".$row['comision']." )= $".$total;
    }
    $valor_en_caja = $total;


}

echo $valor_en_caja;
