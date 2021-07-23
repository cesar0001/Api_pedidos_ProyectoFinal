<?php
include "../conexion.php";
//$id_vehiculo = $_GET["id_vehiculo"];
$id_usuario = $_GET["id_usuario"];
$tipo_vehiculo = $_GET["tipo_vehiculo"];
$placa = $_GET["placa"];
$color = $_GET["color"];
$activo=$_GET["activo"];

$query = "INSERT INTO public.vehiculos(id_usuario, tipo_vehiculo, placa, color, activo)
   VALUES ('$id_usuario', '$tipo_vehiculo', '$placa', '$color', '$activo');";

   $resultado = pg_query($db_handle,$query);

   $datos = pg_fetch_all($resultado);

?>