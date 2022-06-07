<?php
include 'db_conection.php';
$user = $_POST['usuario'];
$password = $_POST['contrasena'];
// iniciamos la sección
session_start();
$_SESSION['usuario'] = $user;

// realizamos el query de la petición a la base de datos
$consulta = "SELECT * FROM usuarios WHERE user_nick = '$user' AND user_password = '$password'";

// realizamos la consulta
$sql = mysqli_query($conection, $consulta);
$row = mysqli_fetch_array($sql);

// validar datos
if (mysqli_num_rows($sql) != 1) {
    echo "<h1>Usuario o contraseña incorrectos</h1>";
} else {
    echo "Bienvenido " . $row[1];
    header("Location: home.php");
}
