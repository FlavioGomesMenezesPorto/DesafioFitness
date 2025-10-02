<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Desafios Fitness</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styles.css">
</head>
<body>
    <header>
        <h1>Desafios Fitness</h1>
    </header>
    <main>
        <div class="form-container">
            <h2>Login</h2>
            <form action="<?php echo BASE_URL; ?>login_action" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <button type="submit">Entrar</button>
            </form>
            <p>Não tem uma conta? <a href="<?php echo BASE_URL; ?>register">Cadastre-se</a></p>
        </div>
    </main>
</body>
</html>