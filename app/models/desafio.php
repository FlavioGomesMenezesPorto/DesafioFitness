<?php

require_once '../config/database.php';
require_once '../app/models/desafio.php';

class DesafioDao {
    private $db;

    public function __construct() {
        try {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
            $this->db = new PDO($dsn, DB_USER, DB_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new PDOException("Não foi possível conectar ao banco de dados: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    private function mapRowToDesafio($row) {
        $desafio = new Desafio();
        $desafio->setId($row['id']);
        $desafio->setNome($row['nome']);
        $desafio->setDescricao($row['descricao']);
        return $desafio;
    }

    public function getAll() {
        $sql = "SELECT * FROM desafios";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $desafios = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $desafios[] = $this->mapRowToDesafio($row);
        }
        return $desafios;
    }

    public function getById($id) {
        $sql = "SELECT * FROM desafios WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? $this->mapRowToDesafio($row) : null;
    }

    public function create(Desafio $desafio) {
        $sql = "INSERT INTO desafios (nome, descricao) VALUES (:nome, :descricao)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nome', $desafio->getNome());
        $stmt->bindParam(':descricao', $desafio->getDescricao());
        return $stmt->execute();
    }

    public function update(Desafio $desafio) {
        $sql = "UPDATE desafios SET nome = :nome, descricao = :descricao WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $desafio->getId(), PDO::PARAM_INT);
        $stmt->bindParam(':nome', $desafio->getNome());
        $stmt->bindParam(':descricao', $desafio->getDescricao());
        return $stmt->execute();
    }
}