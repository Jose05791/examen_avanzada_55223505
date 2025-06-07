<?php
require_once __DIR__ . '/../models/Nota.php';

class NotaController {
    public function listar() {
        $nota = new Nota();
        $notas = $nota->listar();
        $promedio = $nota->promedio();
        require __DIR__ . '/../views/listar.php';
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nota = new Nota();
            $nota->registrar($_POST['estudiante'], $_POST['descripcion'], $_POST['nota']);
            header("Location: index.php?action=listar");
            exit;
        } else {
            require __DIR__ . '/../views/registrar.php';
        }
    }
}