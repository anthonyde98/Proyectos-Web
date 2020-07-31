<?php 
include("conexion.php");

if(isset($_POST['register'])){
    if(strlen($_POST['email']) >= 1 && strlen($_POST['contrasena']) >= 1){
        $correo = trim($_POST['email']);
        $contrasena = trim($_POST['contrasena']);
        $consulta = "select * from usuario where correo = '$correo'";
        $verificado = 0;
        if(consulta($consulta)){
            $resultado = consulta($consulta);

            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    if($correo == $row['correo']){
                        $verificado = 1;
                    }
                }
            } 
        }
        if($verificado == 1){
            header('Location: main.php');
        }
        else{
            ?>
            <h3 class="campos">No se encontró este usuario</h3>
            <?php
        }
    }
    else{
        ?>
        <h3 class="campos">Por favor, complete los campos</h3>
        <?php
    }
}

if(isset($_POST['create'])){
    if(strlen($_POST['email']) >= 1 && strlen($_POST['contrasena']) >= 1){
        $correo = trim($_POST['email']);
        $contrasena = trim($_POST['contrasena']);
        $consulta = "select * from usuario";
        $verificado = 1;
        if(consulta($consulta)){
            $resultado = consulta($consulta);
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    if($row['correo'] == $correo){
                        $verificado = 0;
                    }
                }
            }           
        }
        if($verificado == 1){
            $consulta = "insert into usuario (correo, contrasena) VALUES ('$correo','$contrasena')";
            if(consulta($consulta)){
                ?>
                <h3 class="exito">Usuario creado</h3>
                <?php
            }
        }
        else{
            ?>
                <h3 class="campos">Hay un usuario con este correo</h3>
            <?php
        }
         
    }
    else{
        ?>
        <h3 class="campos">Por favor, complete los campos</h3>
        <?php
    }
}

?>
