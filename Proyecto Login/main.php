<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="cabeza1">
        <ul class="nav">
            <li id="cs">Usuario
                <ul><li><a href="index.php">Cerrar Sesión</a></li></ul>
            </li>
        </ul>
    </div>
    <div class="cuerpo1">
        <h3 class="tema1">Usuarios</h3>
        <div class="contenedor">
            <table>
                <thead>
                    <tr><th>Correo</th><th>Contraseña</th></tr>
                </thead>
                <?php 
                    include("conexion.php");
                    $consulta = "select * from usuario";
                    if(consulta($consulta)){
                        $resultado = consulta($consulta);
            
                        if($resultado->num_rows > 0){
                            while($row = $resultado->fetch_assoc()){
                                ?><tr><td><?php echo $row['correo']; ?></td><?php
                                ?><td><?php echo "************"; ?></td></tr><?php
                            }
                        }
                    }

                ?>
            </table>
            <form action="" method="post">
                <input class= "button" id= "Ac" type="submit" name="access" value="Acceder">
            </form>
            <?php 
                if(isset($_POST['access']))
                    header('Location: http://localhost:22533/');   
            ?>
        </div>
    </div>
</body>
</html>