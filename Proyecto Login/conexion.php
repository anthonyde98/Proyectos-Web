<?php  

function consulta($consulta){

    $usuario = "root";
    $contrasena = "";
    $servidor = "localhost";
    $basededatos = "login";  
    
    $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    mysqli_close( $conexion );
    
    return $resultado;
}
?>

