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
}