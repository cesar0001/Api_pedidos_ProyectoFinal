<?php 

include "../conexion.php";
 

$id = $_GET["id"]; 
$descripcion = $_GET["descripcion"]; 
$activo = $_GET["activo"]; 
 

$query = "UPDATE public.categorias
	SET descripcion='$descripcion', activo='$activo'
	WHERE id_categoria='$id';";


//$query = "UPDATE public.usuarios nombres"" where id_usuario='".$id."';";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);
//echo $datos;

?>