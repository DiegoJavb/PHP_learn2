<?php
require("db_conection.php");
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$peticion = $_POST['peticion'];
$usuario_actual = session_id();

$consulta = "INSERT INTO contactos (user_id, user_name, user_nick, user_email, peticion) VALUES ('$usuario_actual', '$nombre', '$usuario', 'email', 'peticion')";
$verificacion = mysqli_query($conection, $consulta);
