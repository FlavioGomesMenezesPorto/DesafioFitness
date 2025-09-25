<?php

require_once '../config/database.php';
require_once '../app/models/desafio.php';

class DesafioDao {
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Em uma aplicação real, logar o erro em vez de exibi-lo
            die("Erro de conexão com o banco de dados: " . $e->getMessage());
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

    // Outros métodos de CRUD (create, update, delete) podem ser adicionados aqui
}
