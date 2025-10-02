<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Desafio</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styles.css">
</head>
<body>
    <header>
        <h1>Editar Desafio</h1>
    </header>
    <main>
        <form action="<?php echo BASE_URL; ?>desafios_update" method="POST">
            <input type="hidden" name="id" value="<?php echo $desafio->getId(); ?>">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($desafio->getNome()); ?>" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao"><?php echo htmlspecialchars($desafio->getDescricao()); ?></textarea>

            <button type="submit">Salvar</button>
        </form>
    </main>
</body>
</html>