<?php

require_once "../Models/Conexion.php";

class LoginController {

    public function iniciarSesion() {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        // Creamos la conexión con la base de datos
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        // Preparamos la consulta SQL
        $stmt = $conn->prepare("SELECT * FROM administradores WHERE correo = ? AND contrasena = ?");
        $stmt->bind_param("ss", $correo, $contrasena);
        $stmt->execute();

        // Verificamos si se encontró una coincidencia
        if ($stmt->fetch()) {
            // Redirigimos al panel de administrador
            header("Location: ../Views/paneladmipro.php");
        } else {
            // Si no se encontró una coincidencia, mostramos un mensaje de error
            echo "Credenciales inválidas";
            $stmt = $conn->prepare("SELECT * FROM colaboradores WHERE correo = ? AND contrasena = ?");
            $stmt->bind_param("ss", $correo, $contrasena);
            $stmt->execute();
            if ($stmt->fetch()) {
                // Redirigimos al panel de administrador
                header("Location: ../Views/paneladmi.php");
            } else {
                // Si no se encontró una coincidencia, mostramos un mensaje de error
                echo "Credenciales inválidas";
            }
        }

        // Cerramos la conexión y el statement
        $stmt->close();
        $conn->close();
    }
}

$loginController = new LoginController();
$loginController->iniciarSesion();

?>
