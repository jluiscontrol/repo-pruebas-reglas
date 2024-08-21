<?php

$id_entidad = $_POST["id"];
$nombre_banco = $_POST["nombre_banco"];
$acronimo = $_POST["acronimo"];
$comision = $_POST["comision"];
$sobre_giro = $_POST["sobre_giro"];



date_default_timezone_set('America/Guayaquil');

$fecha_actual = date('Y-m-d h:i:s');

//INSERT INTO entidad (nombre,acronimo,comision) VALUES(upper("PICHINCHA"),upper("BP"),0.48)
//select * from entidad where nombre = upper("pichincha") and acronimo= upper("bp")
include "../complementos/conexion.php";

$sql_existe="select * from entidad where nombre = upper('{$nombre_banco}') and acronimo= upper('{$acronimo}') and comision={$comision} and sobre_giro={$sobre_giro}";

//$consulta = "select * from usuario where Usuario='{$us}' and Clave='{$cl}'";

$resultado_existe = mysqli_query($conn, $sql_existe) or die ("Algo ha ido mal en la consulta a la base de datos");



$mensaje="{$nombre_banco} con acrónimo {$acronimo} y comisión {$comision} ya existe.";

$existe_entidad="no";

while ($row = mysqli_fetch_array($resultado_existe )) {

    //$id = ($row['id']);

    $existe_entidad="si";


}
if($id_entidad>0){
    $existe_entidad="no";
}
if($existe_entidad=="no"&& $id_entidad==""){
    $sql_insertar = "INSERT INTO entidad (nombre,acronimo,comision,fecha_creada,sobre_giro) VALUES(upper('{$nombre_banco}'),upper('{$acronimo}'),{$comision},'{$fecha_actual}',{$sobre_giro});";

   mysqli_query($conn, $sql_insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

            $mensaje="{$nombre_banco} creado correctamente";
}else if($existe_entidad=="no"){
    $sql_actualizar="UPDATE entidad SET nombre = upper('{$nombre_banco}'),acronimo=upper('{$acronimo}'),comision={$comision},sobre_giro={$sobre_giro} WHERE id = {$id_entidad}";
 mysqli_query($conn, $sql_actualizar) or die ("Algo ha ido mal en la consulta a la base de datos");

            $mensaje="Actualizado correctamente";
}
mysqli_close($conn);


echo $mensaje;