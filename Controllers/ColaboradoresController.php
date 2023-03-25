<?php
require_once('../Models/ColaboradoresModel.php');

class ColaboradoresController {

    public function index() {
        $colaboradoresModel = new ColaboradoresModel();
        $colaboradores = $colaboradoresModel->obtenerColaboradores();

        require_once('../Views/Colaboradores/index.php');
    }
    public function index2() {
        $colaboradoresModel = new ColaboradoresModel();
        $colaboradores = $colaboradoresModel->busquedaColaboradores();
        require_once('../Views/Colaboradores/index.php');
        
    }
}
?>