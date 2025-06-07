<?php
require_once 'ConexDB.php';

class Nota {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    public function listar() {
        $sql = "SELECT * FROM notas";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function promedio() {
        $sql = "SELECT AVG(nota) as promedio FROM notas";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['promedio'] ?? 0;
    }

    public function registrar($estudiante, $descripcion, $nota) {
        $sql = "INSERT INTO notas (estudiante, descripcion, nota) VALUES (:estudiante, :descripcion, :nota)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':estudiante', $estudiante);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':nota', $nota);
        return $stmt->execute();
    }
}