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

    public function getAll() {
        $sql = "SELECT * FROM desafios";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $desafios = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $desafio = new Desafio();
            $desafio->setId($row['id']);
            $desafio->setNome($row['nome']);
            $desafio->setDescricao($row['descricao']);
            $desafios[] = $desafio;
        }

        return $desafios;
    }

    public function getById($id) {
        $sql = "SELECT * FROM desafios WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $desafio = new Desafio();
            $desafio->setId($row['id']);
            $desafio->setNome($row['nome']);
            $desafio->setDescricao($row['descricao']);
            return $desafio;
        }

        return null;
    }

    public function create(Desafio $desafio) {
        $sql = "INSERT INTO desafios (nome, descricao) VALUES (:nome, :descricao)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $desafio->getNome());
        $stmt->bindValue(':descricao', $desafio->getDescricao());

        return $stmt->execute();
    }

    public function update(Desafio $desafio) {
        $sql = "UPDATE desafios SET nome = :nome, descricao = :descricao WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $desafio->getId());
        $stmt->bindValue(':nome', $desafio->getNome());
        $stmt->bindValue(':descricao', $desafio->getDescricao());

        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM desafios WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }

    
}