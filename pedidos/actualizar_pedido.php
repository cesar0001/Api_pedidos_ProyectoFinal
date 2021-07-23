<?php 

include "../conexion.php";
 
# id_pedido, id_usuario, id_estado, fecha, observacion, sub_total, descuento, impuesto, total
$id_pedido = $_GET["id_pedido"]; 
$id_usuario = $_GET["id_usuario"]; 
$id_estado = $_GET["id_estado"];
$fecha = $_GET["fecha"]; 
$observacion = $_GET["observacion"]; 
$sub_total = $_GET["sub_total"]; 
$descuento = $_GET["descuento"]; 
$impuesto = $_GET["impuesto"];
$total = $_GET["total"];
 
$query = "UPDATE public.pedidos SET id_usuario='$id_usuario', id_estado='$id_estado', fecha='$fecha', 
                                    observacion='$observacion', sub_total='$sub_total', descuento='$descuento',
									impuesto='$impuesto', total='$total' WHERE id_pedido ='$id_pedido'";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);

?>