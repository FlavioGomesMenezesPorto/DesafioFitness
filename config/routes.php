<?php

$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        // CORREÇÃO: Mudança para o controlador de Desafio
        require_once '../app/controllers/desafioController.php';
        $controller = new DesafioController();
        $controller->index();
        break;
    // Outras rotas podem ser adicionadas aqui
    default:
        // Rota não encontrada
        echo "Página não encontrada";
        break;
}