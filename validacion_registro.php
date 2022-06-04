<?php
include 'db_conection.php';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$user = $_POST['usuario'];
$password = $_POST['contrasena'];

$registro = "INSERT INTO usuarios (user_name, user_email, user_nick, user_password) VALUES ('$nombre', '$email', '$user', '$password')";
$validadcion = mysqli_query($conection, $registro);
