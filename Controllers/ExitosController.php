<?php
require_once('../Models/ExitosModel.php');

class ExitosController {

    public function index() {
        $exitosModel = new ExitosModel();
        $exitos = $exitosModel->obtenerExitos();

        require_once('../Views/Exitos/index.php');
    }
}
?>