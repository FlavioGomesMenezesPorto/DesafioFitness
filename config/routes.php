<?php

$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        require_once '../app/controllers/prodControllers.php';
        $controller = new ProdController();
        $controller->index();
        break;
    // Outras rotas podem ser adicionadas aqui
    default:
        // Rota não encontrada
        echo "Página não encontrada";
        break;
}
