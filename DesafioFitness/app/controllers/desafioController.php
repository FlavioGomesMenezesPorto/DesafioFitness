<?php

require_once '../app/services/prodServices.php';

class ProdController {
    private $prodService;

    public function __construct() {
        $this->prodService = new ProdService();
    }

    public function index() {
        $produtos = $this->prodService->getAll();
        // Carrega a view para listar os produtos
        require_once '../app/views/produtos/index.php';
    }
}
