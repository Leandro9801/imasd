<?php
require_once('../Models/UsuariosModel.php');

class UsuariosController {

    public function index() {
        $usuariosModel = new UsuariosModel();
        $usuarios = $usuariosModel->obtenerUsuarios();

        require_once('../Views/Usuarios/index.php');
    }
}
?>