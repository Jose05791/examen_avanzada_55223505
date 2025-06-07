<?php
require_once "models/Nota.php";

class NotaController {
    public function listar() {
        $nota = new Nota();
        $notas = $nota->listar();
        $promedio = $nota->promedio();
        require "views/listar.php";
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nota = new Nota();
            $nota->registrar($_POST['estudiante'], $_POST['descripcion'], $_POST['nota']);
            header("Location: index.php?action=listar");
        } else {
            require "views/registrar.php";
        }
    }
}
