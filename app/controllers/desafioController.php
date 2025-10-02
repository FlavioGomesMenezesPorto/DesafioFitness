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
        $desafio = new Desafio();
        $desafio->setNome($_POST['nome']);
        $desafio->setDescricao($_POST['descricao']);

        $this->desafioService->create($desafio);

        header('Location: ' . BASE_URL . 'desafios');
    }

    public function edit() {
        $id = $_GET['id'];
        $desafio = $this->desafioService->getById($id);

        if (!$desafio) {
            // Redireciona para a página inicial ou exibe uma mensagem de erro
            header('Location: ' . BASE_URL . 'desafios');
            exit();
        }

        require_once '../app/views/desafios/edit.php';
    }

    public function update() {
        $desafio = new Desafio();
        $desafio->setId($_POST['id']);
        $desafio->setNome($_POST['nome']);
        $desafio->setDescricao($_POST['descricao']);

        $this->desafioService->update($desafio);

        header('Location: ' . BASE_URL . 'desafios');
    }

    public function delete() {
        $id = $_GET['id'];
        $this->desafioService->delete($id);

        header('Location: ' . BASE_URL . 'desafios');
    }
}