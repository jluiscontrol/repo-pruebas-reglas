<?php

include '../complementos/tmp.php';
session_start();
$us = $_POST["usuario"];
$cl = $_POST["clave"];



include "../complementos/conexion.php";

$consulta = "select * from usuario where Usuario='{$us}' and Clave='{$cl}'";

$resultado = mysqli_query($conn, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($conn);

$nombres = "";
$estado=false;
$existe=false;

while ($row = mysqli_fetch_array($resultado)) {

    $nombres = ($row['nombres']);
    $apellidos_paterno = ($row['apellido_paterno']);
    $apellidos_materno = ($row['apellido_materno']);
    $cargo = ($row['cargo']);
    $estado = boolval($row['estado']);

    $id = ($row['id']);


    $nombres = $nombres . " " . $apellidos_paterno . " " . $apellidos_materno;

    if($estado){
        $_SESSION["nombres"] = $nombres;
        $_SESSION["cargo"] = $cargo;
        $_SESSION["id"] = $id;
    }


    $existe=true;

}

$array = array('existe' => $existe, 'nombres' => $nombres,'estado'=>$estado);
echo json_encode($array);