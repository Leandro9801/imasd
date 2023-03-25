<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "imasd";

$conectar = mysqli_connect($host, $usuario, $contrasena, $bd);

if (!$conectar) {
  echo "No se pudo conectar a la base de datos";
}