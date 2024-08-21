<?php

$id_usuario= $_POST["id"];
$nombres = $_POST["nombres"];
$paterno = $_POST["paterno"];
$materno = $_POST["materno"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$tipo_cuenta = $_POST["tipo_cuenta"];
$estado = $_POST["estado"];



date_default_timezone_set('America/Guayaquil');

$fecha_actual = date('Y-m-d h:i:s');



//INSERT INTO entidad (nombre,acronimo,comision) VALUES(upper("PICHINCHA"),upper("BP"),0.48)
//select * from entidad where nombre = upper("pichincha") and acronimo= upper("bp")
include "../complementos/conexion.php";

$sql_existe="select * from usuario where nombres = upper('{$nombres}') and apellido_paterno=upper('{$paterno}') and apellido_materno=upper('{$materno}')";

//$consulta = "select * from usuario where Usuario='{$us}' and Clave='{$cl}'";

$resultado_existe = mysqli_query($conn, $sql_existe) or die ("Algo ha ido mal en la consulta a la base de datos");



$mensaje="Ya existe un usuario con el nombre $nombres $paterno $materno";

$existe_entidad="no";

while ($row = mysqli_fetch_array($resultado_existe )) {

    //$id = ($row['id']);

    $existe_entidad="si";


}
if($id_usuario>0){
    $existe_entidad="no";
}
if($existe_entidad=="no"&& $id_usuario==""){
    $sql_insertar = "INSERT INTO usuario (nombres, apellido_paterno,apellido_materno,usuario,clave,cargo,estado,fecha_creada) VALUES ( upper('{$nombres}'), upper('{$paterno}'),upper('{$materno}'),'{$usuario}','{$clave}','{$tipo_cuenta}','{$estado}','$fecha_actual');";

    mysqli_query($conn, $sql_insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje="Usuario $nombres $paterno $materno creado correctamente";
}else if($existe_entidad=="no"){

    if( strlen($clave)>0){
        $sql_actualizar="UPDATE usuario SET nombres = upper('{$nombres}'),apellido_paterno=upper('{$paterno}'),apellido_materno=upper('{$materno}'),usuario='{$usuario}',clave='{$clave}',cargo='{$tipo_cuenta}',estado='{$estado}' WHERE id = {$id_usuario}";

    }else{
        $sql_actualizar="UPDATE usuario SET nombres = upper('{$nombres}'),apellido_paterno=upper('{$paterno}'),apellido_materno=upper('{$materno}'),usuario='{$usuario}',cargo='{$tipo_cuenta}',estado='{$estado}' WHERE id = {$id_usuario}";

    }

    mysqli_query($conn, $sql_actualizar) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje="Actualizado correctamente";
    //$mensaje=$sql_actualizar;
}
mysqli_close($conn);


echo $mensaje;