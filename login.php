<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Login</title>
</head>

<body>

    <div class="contenedor">
        <nav>
            <h1>Bienvenido</h1>
        </nav>
        <div class="seccion_tarjeta">
            <div class="tarjeta">
                <form action="validacion.php" method="post">
                    <h2>Ingresa</h2><br><br>
                    <label for="usuario">Usuario</label><br>
                    <input type="text" name="usuario" require><br><br>
                    <label for="contraseña">Contraseña</label><br>
                    <input type="contraseña" name="contrasena" require><br><br>
                    <div style="height: 30px;"></div>
                    <input class="submit" type="submit" value="Ingrese"><br><br>
                    <p>Aun no tienes cuenta registrate <a href="registro.php">Aquí</a></p>
                </form>
            </div>
        </div>

    </div>
</body>

</html>