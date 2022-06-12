<?php
include("db_conection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/usuario.css">
    <title>Usuario</title>
</head>

<body>
    <div class="container">
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
        <h1>Usuarios</h1>
        <div class="info_user">
            <table>
                <tr>
                    <td>id_Usuario</td>
                    <td>Nombre</td>
                    <td>Email</td>
                    <td>Usuario</td>
                    <td>Contraseña</td>
                </tr>
                <?php
                $consulta = "SELECT * FROM usuarios";
                $validacion = mysqli_query($conection, $consulta);
                while ($resultado = mysqli_fetch_array($validacion)) {
                    # code...

                ?>
                    <tr>
                        <td><?php echo $resultado['user_id'] ?>
                        </td>
                        <td><?php echo $resultado['user_name'] ?>
                        </td>
                        <td><?php echo $resultado['user_email'] ?>
                        </td>
                        <td><?php echo $resultado['user_nick'] ?>
                        </td>
                        <td><?php echo $resultado['user_password'] ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

</body>

</html>