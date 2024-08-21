<?php
include '../complementos/tmp.php';
session_start();
$id = $_POST["id"];
$billete_uno = $_POST["billete_uno"];
$billete_cinco = $_POST["billete_cinco"];
$billete_dies = $_POST["billete_dies"];
$billete_veinte = $_POST["billete_veinte"];
$billete_cincuenta = $_POST["billete_cincuenta"];
$billete_cien = $_POST["billete_cien"];

$moneda_uno = $_POST["moneda_uno"];
$moneda_cinco = $_POST["moneda_cinco"];
$moneda_dies = $_POST["moneda_dies"];
$moneda_veinticinco = $_POST["moneda_veinticinco"];
$moneda_cincuenta = $_POST["moneda_cincuenta"];
$moneda_undolar = $_POST["moneda_undolar"];


$id_crea = $_SESSION["id"];


include "../complementos/conexion.php";


date_default_timezone_set('America/Guayaquil');

$fecha_actual = date('Y-m-d h:i:s');


$sql_existe = "select * from historial_total_monedas where date(fecha_creada)=date('{$fecha_actual}')";
$resultado_existe = mysqli_query($conn, $sql_existe) or die ("Algo ha ido mal en la consulta a la base de datos");


$mensaje = "Ya existe datos guardados para la fecha: {$fecha_actual}, si desea actualizarlos primero buscar por fecha.";

$existe_entidad = "no";

while ($row = mysqli_fetch_array($resultado_existe)) {

    //$id = ($row['id']);

    $existe_entidad = "si";

    if($id===""){
        echo $mensaje;
        return;
    }


}

if ($id === "") {
    $sql_insertar = "INSERT INTO `historial_total_monedas` (`id`, `billete_uno`, `billete_cinco`, `billete_dies`, `billete_veinte`, `billete_cincuenta`, `billete_cien`, `moneda_uno`, `moneda_cinco`, `moneda_dies`, `moneda_veinticinco`, `moneda_cincuenta`, `moneda_undolar`,`id_crea`, `fecha_creada`) VALUES (NULL, {$billete_uno}, {$billete_cinco}, {$billete_dies}, {$billete_veinte}, {$billete_cincuenta}, {$billete_cien}, {$moneda_uno}, {$moneda_cinco}, {$moneda_dies}, {$moneda_veinticinco}, {$moneda_cincuenta}, {$moneda_undolar},{$id_crea}, '{$fecha_actual}');";


    mysqli_query($conn, $sql_insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje = "Guardado correctamente";
} else {
    $sql_actualizar = "UPDATE historial_total_monedas SET billete_uno={$billete_uno}, billete_cinco={$billete_cinco},billete_dies={$billete_dies},billete_veinte={$billete_veinte},billete_cincuenta={$billete_cincuenta},billete_cien={$billete_cien},moneda_uno={$moneda_uno},moneda_cinco={$moneda_cinco},moneda_dies={$moneda_dies},moneda_veinticinco={$moneda_veinticinco},moneda_cincuenta={$moneda_cincuenta},moneda_undolar={$moneda_undolar} WHERE id = {$id}";

    mysqli_query($conn, $sql_actualizar) or die ("Algo ha ido mal en la consulta a la base de datos");

    $mensaje = "Actualizado correctamente";
}


mysqli_close($conn);


echo $mensaje;