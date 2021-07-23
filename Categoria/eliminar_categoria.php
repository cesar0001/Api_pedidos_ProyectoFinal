<?php 

include "../conexion.php";


$id = $_GET["id"];
 
$query = "DELETE FROM public.categorias
	WHERE id_categoria='$id'";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);



?>