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
            $desafio->setDataInicio($row['data_inicio']);
            $desafio->setDataFim($row['data_fim']);
            $desafio->setStatus($row['status']);
            $desafios[] = $desafio;
        }

        return $desafios;
    }

    
}