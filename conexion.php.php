<?php

$host = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "tidesurf";

$conn = mysqli_connect($host, $usuario, $contrasena, $bd);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>