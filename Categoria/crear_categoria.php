<?php 

include "../conexion.php";

$descripcion = $_GET["descripcion"];
$activo = $_GET["activo"];

 
$query = "INSERT INTO public.categorias(
	      descripcion, activo)
	    VALUES ('$descripcion', '$activo');";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);



?>