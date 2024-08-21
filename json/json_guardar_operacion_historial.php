<?php
include '../complementos/tmp.php';
session_start();
$idBanco = $_POST["idBanco"];
$idTipo_transaccion = $_POST["idTipo_transaccion"];
$comision_operaciones = $_POST["comision_operaciones"];
$comentario = $_POST["comentario"];
$valor = $_POST["valor"];
$referencia = $_POST["referencia"];
$cedula_ruc = $_POST["cedula_ruc"];

$tipo_comision = $_POST["tipo_comision"];
$comision_valor_porcentaje = $_POST["comision_valor_porcentaje"];



$id_crea=$_SESSION["id"];


include "../complementos/conexion.php";


date_default_timezone_set('America/Guayaquil');

$fecha_actual = date('Y-m-d h:i:s');


$sql_insertar = "INSERT INTO historial_transacciones ( id_entidad, tipo_transaccion, comision, comentario,valor,fecha_creada,id_crea,cedula,referencia,tipo_comision,comision_valor_porcentaje) VALUES ({$idBanco}, '{$idTipo_transaccion}', {$comision_operaciones}, '{$comentario}',{$valor},'{$fecha_actual}',{$id_crea},'{$cedula_ruc}','{$referencia}','{$tipo_comision}',{$comision_valor_porcentaje});";


mysqli_query($conn, $sql_insertar) or die ("Algo ha ido mal en la consulta a la base de datos");

$mensaje = "Transacción creada correctamente";

mysqli_close($conn);



echo $mensaje;