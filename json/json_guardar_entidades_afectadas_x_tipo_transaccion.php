<?php

$id_afecta = $_POST["id_afecta"];
$id_tipo_transaccion = $_POST["id"];

$id_entidad = $_POST["id_entidad"];
$tipo_comision = $_POST["tipo_comision"];
$valor_porcentaje = $_POST["valor_porcentaje"];


date_default_timezone_set('America/Guayaquil');

$fecha_actual = date('Y-m-d h:i:s');


include "../complementos/conexion.php";

$sql_existe = "select * from entidades_afectadas_x_tipo_transaccion where id_entidad={$id_entidad} and id_tipo_transaccion={$id_tipo_transaccion} and valor_porcentaje={$valor_porcentaje} and tipo_comision='{$tipo_comision}'";

//$consulta = "select * from usuario where Usuario='{$us}' and Clave='{$cl}'";

$resultado_existe = mysqli_query($conn, $sql_existe) or die ("Algo ha ido mal en la consulta a la base de datos");


$mensaje = "'Ya existe con los mismos valores que ha seleccionado.";

$existe_entidad = "no";

while ($row = mysqli_fetch_array($resultado_existe)) {

    //$id = ($row['id']);

    $existe_entidad = "si";


}

if ($existe_entidad == "no"&& $id_afecta=="") {
    $sql_insertar = "INSERT INTO `entidades_afectadas_x_tipo_transaccion` (`id`, `id_entidad`, `id_tipo_transaccion`, `tipo_comision`, `valor_porcentaje`, `fecha_creada`) VALUES (NULL, '{$id_entidad}', '{$id_tipo_transaccion}', '{$tipo_comision}', '{$valor_porcentaje}', '{$fecha_actual}');";

    mysqli_query($conn, $sql_insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje = "Creado correctamente";
} else if ($existe_entidad == "no") {
    $sql_actualizar = "update entidades_afectadas_x_tipo_transaccion set id_entidad={$id_entidad}, id_tipo_transaccion={$id_tipo_transaccion},tipo_comision='{$tipo_comision}', valor_porcentaje='{$valor_porcentaje}' where id={$id_afecta}";
    mysqli_query($conn, $sql_actualizar) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje = "Actualizado correctamente";
    //$mensaje=$sql_actualizar;
}
mysqli_close($conn);


echo $mensaje;