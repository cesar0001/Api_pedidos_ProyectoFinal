<?php 

include "../conexion.php";
 

$id_producto = $_GET["id_producto"]; 
$id_categoria = $_GET["id_categoria"]; 
$codigo_producto = $_GET["codigo_producto"]; 
$nombre = $_GET["nombre"];  
$descripcion= $_GET["descripcion"]; 
$existencia = $_GET["existencia"]; 
$activo = $_GET["activo"]; 
$precio_venta = $_GET["precio_venta"]; 


$query = "UPDATE public.productos
	SET  id_categoria='$id_categoria', codigo_producto='$codigo_producto', nombre='$nombre', descripcion='$descripcion', existencia='$existencia', activo='$activo', precio_venta='$precio_venta'
	WHERE id_producto='$id_producto';";


//$query = "UPDATE public.usuarios nombres"" where id_usuario='".$id."';";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);
//echo $datos;

?>