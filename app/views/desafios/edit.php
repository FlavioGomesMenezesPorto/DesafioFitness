<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Desafio</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>
    <header>
        <h1>Editar Desafio: <?php echo htmlspecialchars($desafio->getNome()); ?></h1>
    </header>
    <main>
        <div class="form-container">
            <form action="../../public/index.php?route=desafios/update" method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($desafio->getId()); ?>">

                <label for="nome">Nome do Desafio:</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($desafio->getNome()); ?>" required>

                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" required><?php echo htmlspecialchars($desafio->getDescricao()); ?></textarea>

                <button type="submit">Atualizar Desafio</button>
                <a href="../../public/index.php?route=home" class="btn-cancel">Cancelar</a>
            </form>
        </div>
    </main>
</body>
</html>