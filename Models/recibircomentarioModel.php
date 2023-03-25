<?php
require 'conexion.php';

$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];

$insertar = "INSERT INTO comentarios (correo, asunto, comentario) VALUES ('$correo','$asunto','$comentario')";  //inserta la ruta en la BD
$resultado = mysqli_query($conectar, $insertar);

if($resultado){
  echo '
  <script>
    alert("Se guardo correctamente");
    location.href = "../indexservicios.php";
  </script>';
} else {
  echo '
  <script>
    alert("No se guardo correctamente");
    location.href = "../indexcontactanos.php";
  </script>';
}