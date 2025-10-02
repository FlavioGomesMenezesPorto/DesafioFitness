<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Desafio</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styles.css">
</head>
<body>
    <header>
        <h1>Criar Novo Desafio</h1>
    </header>
    <main>
        <form action="<?php echo BASE_URL; ?>desafios_store" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao"></textarea>

            <button type="submit">Salvar</button>
        </form>
    </main>
</body>
</html>