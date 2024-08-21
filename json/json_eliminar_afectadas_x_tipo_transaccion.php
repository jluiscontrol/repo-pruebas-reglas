<?php
include "../complementos/conexion.php";
$id_afecta = $_POST["id_afecta"];


$sql_eliminar_entidad = "DELETE FROM entidades_afectadas_x_tipo_transaccion WHERE `entidades_afectadas_x_tipo_transaccion`.`id` = {$id_afecta}";
mysqli_query($conn, $sql_eliminar_entidad) or die ("Algo ha ido mal en la consulta a la base de datos");

$mensaje = "Eliminada correctamente";

mysqli_close($conn);


echo $mensaje;