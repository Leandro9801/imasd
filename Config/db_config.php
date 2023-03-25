<?php

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'ggbdesig_administrador');
define('DB_PASSWORD', '#E_U?C[(r5!r');
define('DB_NAME', 'ggbdesig_imasd');

// Conexión a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar si hay algún error en la conexión
if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>
