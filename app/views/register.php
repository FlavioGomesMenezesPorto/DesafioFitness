<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Desafios Fitness</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styles.css">
</head>
<body>
    <header>
        <h1>Desafios Fitness</h1>
    </header>
    <main>
        <div class="form-container">
            <h2>Cadastro</h2>
            <form action="<?php echo BASE_URL; ?>register_action" method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div class="form-group">
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha" required>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
            <p>Já tem uma conta? <a href="<?php echo BASE_URL; ?>login">Faça login</a></p>
        </div>
    </main>
</body>
</html>