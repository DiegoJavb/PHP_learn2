<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/registro.css">
    <title>registro</title>
</head>

<body>

    <div class="contenedor">
        <nav>
            <h1>Bienvenido</h1>
        </nav>
        <div class="seccion_tarjeta">
            <div class="tarjeta">
                <form action="validacion_registro.php" method="post">
                    <h2>Registro</h2><br><br>
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre" required><br><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" required><br><br>
                    <label for="usuario">Usuario</label><br>
                    <input type="text" name="usuario" required><br><br>
                    <label for="contrasena">Contraseña</label><br>
                    <input type="text" name="contrasena" required><br><br>
                    <div style="height: 30px;"></div>
                    <input class="submit" type="submit" value="Registrate"><br><br>
                </form>
            </div>
        </div>

    </div>
</body>

</html>