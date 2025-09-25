<?php

$route = $_GET['route'] ?? 'home';

require_once '../app/controllers/desafioController.php';
$controller = new DesafioController();

switch ($route) {
    case 'home':
        $controller->index();
        break;
    case 'desafios/create':
        $controller->create(); 
        break;
    case 'desafios/store':
        $controller->store(); 
        break;
    case 'desafios/edit':
        $controller->edit(); 
        break;
    case 'desafios/update':
        $controller->update(); 
        break;
    default:
        echo "Página não encontrada";
        break;
}