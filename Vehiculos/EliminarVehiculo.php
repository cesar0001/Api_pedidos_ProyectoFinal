<?php

include "../conexion.php";

$id_vehiculo=$_GET["id_vehiculo"];
$query = "DELETE FROM public.vehiculos WHERE id_vehiculo= '$id_vehiculo'";
$resultado = pg_query($db_handle,$query);
$datos = pg_fetch_all($resultado);
?>