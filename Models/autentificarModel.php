<?php
require "conexionModel.php";

$correo = addslashes($_POST['correo']);
$contrasena = addslashes($_POST['contrasena']);

$comparar = "SELECT * FROM administradores WHERE correo='$correo' AND contrasena='$contrasena'";

$resultado = mysqli_query($conectar, $comparar);

if(mysqli_num_rows($resultado)>0){
  session_start();
  $_SESSION['username'] = $correo;
  $_SESSION["autentificado"]="SI";
  header("Location: ../Views/paneladmipro.php");
}else{
  $comparar = "SELECT * FROM colaboradores WHERE correo='$correo' AND contrasena='$contrasena'";

  $resultado = mysqli_query($conectar, $comparar);
  if(mysqli_num_rows($resultado)>0){
    session_start();
    $_SESSION['username'] = $correo;
    $_SESSION["autentificado"]="SI";
    header("Location: ../Views/paneladmi.php");
  }else{
    echo
    '<script>
      alert("Error en la autentificación");
      location.href="../Views/login.php?errorusuario=SI";
    </script>';
  }
}
mysqli_free_result($resultado);
mysqli_close($conectar);



