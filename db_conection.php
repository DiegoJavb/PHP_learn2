<?php
$conection = mysqli_connect("127.0.0.1", "root", "", "login");
if ($conection) {
    echo "Conexion exitosa";
    header("Location: login.php");
} else {
    echo "Conexion fallida";
}
