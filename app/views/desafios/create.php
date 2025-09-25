<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Desafio</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>
    <header>
        <h1>Criar Novo Desafio</h1>
    </header>
    <main>
        <div class="form-container">
            <form action="../../public/index.php?route=desafios/store" method="POST">
                <label for="nome">Nome do Desafio:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" required></textarea>

                <button type="submit">Salvar Desafio</button>
                <a href="../../public/index.php?route=home" class="btn-cancel">Cancelar</a>
            </form>
        </div>
    </main>
</body>
</html>