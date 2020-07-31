<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="cuerpo">
        <div class="contenedor">
            <div class="tema">
                <h1 id="titulo">Login</h1>
            </div>
            <div class="formulario">
                <form action="" method="post">
                    <input id= "email" type="email" name="email" id="correo" placeholder="Correo">
                    <input id= "pass" type="password" name="contrasena" id="pass" placeholder="Contraseña">
                    <input class= "button" id= "Ing" type="submit" name="register" value="Entrar">
                    <input class= "button" id= "Cr" type="submit" name="create" value="Registrar">
                </form>               
            </div>
        </div>
    </div>
    <?php 
        include("consulta.php");
    ?>
</body>
</html>


