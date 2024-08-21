<?php

$id_tipo_transaccion = $_POST["id"];
$nombre_transaccion = $_POST["nombre_transaccion"];
$caja= $_POST["caja"];
$cuenta= $_POST["cuenta"];



date_default_timezone_set('America/Guayaquil');

$fecha_actual = date('Y-m-d h:i:s');



//INSERT INTO entidad (nombre,acronimo,comision) VALUES(upper("PICHINCHA"),upper("BP"),0.48)
//select * from entidad where nombre = upper("pichincha") and acronimo= upper("bp")
include "../complementos/conexion.php";

$sql_existe="select * from tipo_transaccion where nombre = upper('{$nombre_transaccion}') and afecta_caja='{$caja}' and afecta_cuenta='{$cuenta}'";

//$consulta = "select * from usuario where Usuario='{$us}' and Clave='{$cl}'";

$resultado_existe = mysqli_query($conn, $sql_existe) or die ("Algo ha ido mal en la consulta a la base de datos");



$mensaje="'{$nombre_transaccion}' ya existe con los mismos valores que ha seleccionado.";

$existe_entidad="no";

while ($row = mysqli_fetch_array($resultado_existe )) {

    //$id = ($row['id']);

    $existe_entidad="si";


}

if($existe_entidad=="no"&& $id_tipo_transaccion==""){
    $sql_insertar = "INSERT INTO tipo_transaccion (nombre, afecta_caja,afecta_cuenta,fecha_creada) VALUES ( upper('{$nombre_transaccion}'), '{$caja}','{$cuenta}','{$fecha_actual}');";

    mysqli_query($conn, $sql_insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje="{$nombre_transaccion} creado correctamente";
}else if($existe_entidad=="no"){
    $sql_actualizar="UPDATE tipo_transaccion SET nombre = upper('{$nombre_transaccion}'),afecta_caja='{$caja}',afecta_cuenta='{$cuenta}' WHERE id = {$id_tipo_transaccion}";
    mysqli_query($conn, $sql_actualizar) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje="Actualizado correctamente";
    //$mensaje=$sql_actualizar;
}
mysqli_close($conn);


echo $mensaje;