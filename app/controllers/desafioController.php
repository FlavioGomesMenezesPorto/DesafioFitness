<?php

require_once '../app/services/desafioService.php';

class DesafioController {
    private $desafioService;

    public function __construct() {
        $this->desafioService = new DesafioService();
    }

    public function index() {
        $desafios = $this->desafioService->getAll();
        require_once '../app/views/desafios/index.php';
    }

    public function create() {
        require_once '../app/views/desafios/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nome' => $_POST['nome'] ?? '',
                'descricao' => $_POST['descricao'] ?? ''
            ];
            $this->desafioService->create($data);
            header('Location: /desafiosFitness/public/index.php?route=home');
            exit();
        }
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /desafiosFitness/public/index.php?route=home');
            exit();
        }

        $desafio = $this->desafioService->getById($id);

        if (!$desafio) {
            echo "Desafio não encontrado.";
            return;
        }

        require_once '../app/views/desafios/edit.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $_POST['id'] ?? null,
                'nome' => $_POST['nome'] ?? '',
                'descricao' => $_POST['descricao'] ?? ''
            ];
            $this->desafioService->update($data);
            header('Location: /desafiosFitness/public/index.php?route=home');
            exit();
        }
    }
}