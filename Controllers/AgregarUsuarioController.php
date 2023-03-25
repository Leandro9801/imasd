<?php
  include "../Models/conexionModel.php";

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $cargo = $_POST['cargo'];
  $departamento = $_POST['departamento'];
  $telefono_personal = $_POST['telefono_personal'];

  $insertar = "INSERT INTO colaboradores(nombre,correo,contrasena,cargo,departamento,telefono_personal)VALUES('$nombre','$correo','$contrasena','$cargo','$departamento','$telefono_personal')";

  $verificar_usuario = mysqli_query($conectar,"SELECT * FROM colaboradores WHERE correo = '$correo'");

  if(mysqli_num_rows($verificar_usuario)){
    echo '<script>
    alert("Este usuario ya existe");
    location.href("../Views/paneladmipro.php");
    </script>';
  } else {
    $query = mysqli_query($conectar,$insertar);
  }

  if($query){
    echo '<script>
    alert("SE GUARDARON LOS DATOS EXITOSAMENTE");
    location = "../Views/paneladmipro.php";
    </script>';
  } else {
    echo '<script>
    alert("NO SE GUARDARON LOS DATOS");
    location = "../Views/paneladmipro.php";
    </script>';
  }
?>