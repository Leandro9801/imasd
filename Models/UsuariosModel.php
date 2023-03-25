<?php
require_once('../Config/db_config.php');

class UsuariosModel {

    public function obtenerUsuarios() {
        global $conn;

        $query = "SELECT cargo, nombre FROM colaboradores";
        $result = mysqli_query($conn, $query);

        $usuarios = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $usuarios[] = $row;
        }

        return $usuarios;
    }

    public function agregarUsuario($cargo, $nombre) {
        global $conn;

        $query = "INSERT INTO colaboradores (cargo, nombre) VALUES ('$cargo', '$nombre')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}