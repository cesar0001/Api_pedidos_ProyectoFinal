<?php 

include "../conexion.php";


$postdata = file_get_contents("php://input"); 
$data = json_decode($postdata);
 
$query = "SELECT  public.ft_insertar_usuario('".$postdata."')";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);
echo $datos[0]["ft_insertar_usuario"];


?>