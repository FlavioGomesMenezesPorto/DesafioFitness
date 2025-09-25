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

                <label for="data_inicio">Data de Início:</label>
                <input type="date" id="data_inicio" name="data_inicio" required>

                <label for="data_fim">Data de Fim:</label>
                <input type="date" id="data_fim" name="data_fim" required>

                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="ativo">Ativo</option>
                    <option value="concluido">Concluído</option>
                    <option value="pendente">Pendente</option>
                </select>

                <button type="submit">Salvar Desafio</button>
                <a href="../../public/index.php?route=home" class="btn-cancel">Cancelar</a>
            </form>
        </div>
    </main>
</body>
</html>