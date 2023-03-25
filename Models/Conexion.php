<?php

class Conexion {
    private $host = "localhost";
    private $usuario = "ggbdesig_administrador";
    private $contrasena = "#E_U?C[(r5!r";
    private $bd = "ggbdesig_imasd";

    public function conectar() {
        $conn = new mysqli($this->host, $this->usuario, $this->contrasena, $this->bd);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        return $conn;
    }
}

?>
