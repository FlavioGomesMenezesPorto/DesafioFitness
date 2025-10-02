<?php

$route = $_GET['route'] ?? 'home';

// Incluir controllers
require_once '../app/controllers/desafioController.php';
require_once '../app/controllers/userController.php';

// Instanciar controllers
$desafioController = new DesafioController();
$userController = new UserController();

switch ($route) {
    // Rota principal
    case 'home':
        $userController->showRegisterPage();
        break;

    // Rotas de Usuário
    case 'register':
        $userController->showRegisterPage();
        break;
    case 'login':
        $userController->showLoginPage();
        break;
    case 'register_action':
        $userController->register();
        break;
    case 'login_action':
        $userController->login();
        break;

    // Rotas de Desafios
    case 'desafios':
        $desafioController->index();
        break;
    case 'desafios_create':
        $desafioController->create();
        break;
    case 'desafios_store':
        $desafioController->store();
        break;
    case 'desafios_edit':
        $desafioController->edit();
        break;
    case 'desafios_update':
        $desafioController->update();
        break;
    case 'desafios_delete':
        $desafioController->delete();
        break;

    default:
        // Rota não encontrada
        echo "Página não encontrada";
        break;
}
