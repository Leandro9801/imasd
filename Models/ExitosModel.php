<?php
require_once('../Config/db_config.php');

class ExitosModel {

    public function obtenerExitos() {
        global $conn;

        $query = "SELECT nombre, link, img FROM exitos";
        $result = mysqli_query($conn, $query);

        $exitos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $exitos[] = $row;
        }

        return $exitos;
    }
}
?>