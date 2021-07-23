<?php 

include "../conexion.php";


$id = $_GET["id"];
 
$query = "DELETE FROM public.productos
	WHERE id_producto='$id';";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);



?>