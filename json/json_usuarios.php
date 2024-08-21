<?php



include "../complementos/conexion.php";

$consulta = "select * from usuario";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);



$respuesta=[];
while ($row = mysqli_fetch_array($resultado)) {

    $array = array(
        'id' => $row['id'],
        'nombres' => $row['nombres'],
        'apellido_paterno'=>$row['apellido_paterno'],
        'apellido_materno'=>$row['apellido_materno'],
        'usuario'=>$row['usuario'],
        'cargo'=>$row['cargo'],
        'estado'=>$row['estado'],
    );
    array_push($respuesta, $array);



}

//$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($respuesta);