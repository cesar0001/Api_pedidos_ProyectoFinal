<?php 

include "../conexion.php";


$id_pedido = $_GET["id_pedido"];
 
$query = "DELETE FROM public.pedidos
WHERE id_pedido ='$id_pedido'";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);



?>