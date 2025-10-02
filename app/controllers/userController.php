<?php

class UserController {

    public function showRegisterPage() {
        require_once '../app/views/register.php';
    }

    public function showLoginPage() {
        require_once '../app/views/login.php';
    }

    public function register() {
        // Lógica de cadastro (vamos implementar depois)
        echo "Processando cadastro...";
        header('Location: ' . BASE_URL . 'desafios');
        exit();
    }

    public function login() {
        // Lógica de login (vamos implementar depois)
        echo "Processando login...";
        header('Location: ' . BASE_URL . 'desafios');
        exit();
    }
}
