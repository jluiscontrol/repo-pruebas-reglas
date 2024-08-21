<?php

$id_entidad = $_POST["id"];

include "../complementos/conexion.php";

$sql_existe="select count(*) as cantidad from historial_transacciones where id_entidad={$id_entidad}";


$resultado_existe = mysqli_query($conn, $sql_existe) or die ("Algo ha ido mal en la consulta a la base de datos");



$mensaje="Entidad borrada exitosamente.";

$cantidad=0;

while ($row = mysqli_fetch_array($resultado_existe )) {



    $cantidad=intval($row['cantidad']);


}
if($cantidad==0){


    $sql_eliminar_entidad="delete from entidad where id={$id_entidad}";
    mysqli_query($conn, $sql_eliminar_entidad) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje="Entidad eliminada correctamente";
}else{
    $mensaje="No se puede borrar ya que hay $cantidad transacciones hechas con esta entidad";
}

mysqli_close($conn);


echo $mensaje;