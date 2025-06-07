<?php
require_once __DIR__ . '/controller/NotaController.php';

$controller = new NotaController();

$action = $_GET['action'] ?? 'listar';

if ($action === 'listar') {
    $controller->listar();
} elseif ($action === 'registrar') {
    $controller->registrar();
} else {
    echo "Acción no válida.";
}