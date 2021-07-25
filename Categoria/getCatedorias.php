<?php 

include "../conexion.php";


$sql_query = "SELECT  public.ft_get_categorias_productos()";

if (pg_send_query($con, $sql_query)) {
    $res=pg_get_result($con);
    if ($res) {
      $state = pg_result_error_field($res, PGSQL_DIAG_SQLSTATE);
      if ($state==0) {
            $datos = pg_fetch_all($res);
            $variable = $datos[0]["ft_get_categorias_productos"];
            // $resultado = array('estado' => $variable);
            echo $variable ;    
            }
      else {
        // some error happened
        if ($state == 23505) { // unique_violation
            $resultado = array('estado' => $state);
            echo json_encode($resultado) ;    
        }
        else {
            $resultado = array('estado' => $state);
            echo json_encode($resultado) ;
         // process other errors
        }
      }
    }  
  }

?>