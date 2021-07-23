<?php 


# id_pedido, id_usuario, id_estado, fecha, observacion, sub_total, descuento, impuesto, total
include "../conexion.php";

$id_usuario = $_GET["id_usuario"];
$id_estado = $_GET["id_estado"];
$fecha = $_GET["fecha"];
$observacion = $_GET["observacion"];
$sub_total = $_GET["sub_total"];
$descuento = $_GET["descuento"];
$impuesto = $_GET["impuesto"];
$total = $_GET["total"];
 
$query = "INSERT INTO public.pedidos(id_usuario, id_estado, fecha, observacion, sub_total, descuento, impuesto, total)
	VALUES ('$id_usuario', '$id_estado', '$fecha', '$observacion', '$sub_total', '$descuento', '$impuesto', '$total')";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);



?>