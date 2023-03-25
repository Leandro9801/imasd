<?php
require_once('../Config/db_config.php');

class ServiciosModel {

    public function obtenerServicios() {
        global $conn;

        $query = "SELECT id, nombre FROM servicios";
        $result = mysqli_query($conn, $query);

        $servicios = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $servicios[] = $row;
        }

        return $servicios;
    }
}
?>
