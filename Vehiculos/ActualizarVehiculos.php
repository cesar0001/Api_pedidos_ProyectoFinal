<?php

include "../conexion.php";

$id_vehiculo = $_GET["id_vehiculo"];
$id_usuario = $_GET["id_usuario"];
$tipo_vehiculo = $_GET["tipo_vehiculo"];
$placa = $_GET["placa"];
$color = $_GET["color"];
$activo = $_GET["activo"];

$query = "UPDATE public.vehiculos SET id_usuario='$id_usuario',
  tipo_vehiculo='$tipo_vehiculo',placa='$placa',color='$color',activo='$activo'
  WHERE id_vehiculo ='$id_vehiculo'";
 $resultado = pg_query($db_handle,$query);
 $datos = pg_fetch_all($resultado); 


?>