<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/contacto.css">
    <title>Contacto</title>
</head>

<body>
    <div class="contenedor">

        <header>
            <nav class="menu">
                <ul class="lista1">
                    <li>
                        <a href="./home.php">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Contactos</a>
                    </li>
                    <li>
                        <a href="#">Sobre Nosotros</a>
                    </li>
                    <li>
                        <a href="#">Usuarios</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="contactos">

            <div class="form_contactos">
                <form action="./datos.php" method="post">
                    <h2>Contactos</h2><br><br>
                    <label for="nombre">Ingresa tu nombre</label><br>
                    <input type="text" name="nombre"><br><br>
                    <label for="usuario">Ingresa tu usuario</label><br>
                    <input type="text" name="usuario"><br><br>
                    <label for="email">Ingresa tu correo</label><br>
                    <input type="email" name="email"><br><br>
                    <textarea name="peticion" id="" cols="30" rows="10"></textarea><br>
                    <input type="submit">
                </form>
            </div>
        </section>
    </div>

</body>

</html>