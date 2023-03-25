<?php
  include "../Models/conexionModel.php";

  $nombreS = $_POST['nombreS'];

  $insertar = "INSERT INTO servicios(nombre)VALUES('$nombreS')";
  $query = mysqli_query($conectar,$insertar);
  echo '<script>
    alert("SE GUARDARON LOS DATOS EXITOSAMENTE");
    location = "../Views/paneladmipro.php";
    </script>';
?>