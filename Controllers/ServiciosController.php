<?php
require_once('../Models/ServiciosModel.php');

class ServiciosController {

    public function index() {
        $serviciosModel = new ServiciosModel();
        $servicios = $serviciosModel->obtenerServicios();

        require_once('../Views/Servicios/index.php');
    }
}
?>
