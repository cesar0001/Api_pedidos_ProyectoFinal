<?php 

include "../conexion.php";

$id_categoria = $_GET["id_categoria"];
$codigo_producto = $_GET["cod_producto"];
$nombre = $_GET["nombre"];
$descripcion = $_GET["descripcion"];
$existencia = $_GET["existencia"];
$activo = $_GET["activo"];
$precio_venta = $_GET["precio_venta"];

$query = "INSERT INTO public.productos(
	 id_categoria, codigo_producto, nombre, descripcion, existencia, activo, precio_venta)
	VALUES ('$id_categoria','$codigo_producto', '$nombre', '$descripcion', '$existencia', '$activo', '$precio_venta');";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);



?>