<?php
require "../Models/conexionModel.php";
?>
<?php 
require "../Models/conexionModel.php";
$id = $_GET['id'];

// echo $id;

$eliminar = "DELETE FROM colaboradores WHERE id='$id'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado ){
  header("location:../Views/paneladmipro.php");
}
else{
  echo "no se pudo eliminar el dato";
}

?>